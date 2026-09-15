FROM php:8.5-apache

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && docker-php-ext-install pdo_mysql zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY . /var/www/html/

WORKDIR /var/www/html

RUN composer install --no-dev --optimize-autoloader --no-interaction

RUN mkdir -p \
    /var/www/html/storage/framework/cache \
    /var/www/html/storage/framework/sessions \
    /var/www/html/storage/framework/views \
    /var/www/html/storage/logs \
    /var/www/html/bootstrap/cache \
    /tmp

RUN chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache /tmp

RUN a2enmod rewrite

COPY docker/apache.conf /etc/apache2/sites-available/000-default.conf

RUN sed -i 's/Listen 80/Listen 3000/' /etc/apache2/ports.conf

RUN sed -i 's/^export APACHE_RUN_USER=.*/export APACHE_RUN_USER=root/' /etc/apache2/envvars && \
    sed -i 's/^export APACHE_RUN_GROUP=.*/export APACHE_RUN_GROUP=root/' /etc/apache2/envvars

EXPOSE 3000

ENV PORT=3000
ENV TMPDIR=/tmp
ENV TEMP=/tmp
ENV TMP=/tmp
ENV VIEW_COMPILED_PATH=/tmp
ENV LOG_CHANNEL=stderr
ENV SESSION_DRIVER=cookie
ENV CACHE_STORE=array
