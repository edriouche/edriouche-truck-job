#!/bin/sh
set -e

echo "START.SH IS RUNNING" >&2

mkdir -p /var/www/html/database
touch /var/www/html/database/database.sqlite

php artisan migrate --force

exec apache2-foreground
