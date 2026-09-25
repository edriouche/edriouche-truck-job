#!/bin/sh
set -e

echo "START.SH IS RUNNING" >&2

mkdir -p /data

export DB_CONNECTION=sqlite
export DB_DATABASE=/data/database.sqlite
export GALLERY_STORAGE_PATH=/data/gallery
mkdir -p /data/gallery
mkdir -p /var/www/html/public/storage
ln -sfn /data/gallery /var/www/html/public/storage/gallery

if [ ! -f /data/database.sqlite ]; then
    cp /var/www/html/database/database.sqlite /data/database.sqlite
fi

php artisan migrate --force

exec apache2-foreground
