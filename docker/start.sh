#!/bin/sh
set -e

mkdir -p /var/www/html/database
touch /var/www/html/database/database.sqlite

php artisan migrate --force

exec apache2-foreground
