FROM php:8.5-apache

RUN docker-php-ext-install pdo_mysql

COPY . /var/www/html/

WORKDIR /var/www/html

RUN chown -R www-data:www-data storage bootstrap/cache

RUN a2enmod rewrite

COPY docker/apache.conf /etc/apache2/sites-available/000-default.conf

EXPOSE 3000
