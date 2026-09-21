#!/bin/sh
set -e

mkdir -p /data

export DB_CONNECTION=sqlite
export DB_DATABASE=/data/database.sqlite

if [ ! -f /data/database.sqlite ]; then
    cp /var/www/html/database/database.sqlite /data/database.sqlite
fi

php artisan migrate --force

exec apache2-foreground
