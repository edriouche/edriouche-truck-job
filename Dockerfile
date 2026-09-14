FROM php:8.5-apache

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    zip \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

COPY docker/apache.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

RUN sed -i 's/Listen 80/Listen 3000/' /etc/apache2/ports.conf

RUN sed -i 's/<VirtualHost \*:80>/<VirtualHost *:3000>/' /etc/apache2/sites-available/000-default.conf

RUN composer install --no-dev --optimize-autoloader --no-interaction

RUN mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views bootstrap/cache

RUN chown -R www-data:www-data storage bootstrap/cache

RUN php artisan storage:link || true

EXPOSE 3000

CMD ["apache2-foreground"]
