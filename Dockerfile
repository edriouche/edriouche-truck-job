FROM php:8.5-apache

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && docker-php-ext-install pdo_mysql zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY . /var/www/html/

WORKDIR /var/www/html

RUN mkdir -p \
    storage/framework/tmp \
    storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    bootstrap/cache \
    && chmod -R 777 storage bootstrap/cache \
    && chmod 1777 /tmp

ENV TMPDIR=/var/www/html/storage/framework/tmp
ENV TEMP=/var/www/html/storage/framework/tmp
ENV TMP=/var/www/html/storage/framework/tmp

RUN composer install --no-dev --optimize-autoloader --no-interaction

RUN a2enmod rewrite

COPY docker/apache.conf /etc/apache2/sites-available/000-default.conf

RUN sed -i 's/Listen 80/Listen 3000/' /etc/apache2/ports.conf

EXPOSE 3000

ENV PORT=3000
