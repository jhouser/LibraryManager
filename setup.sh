#!/bin/bash
cd /app
composer install
cp env .env
rm database/library.sqlite
touch database/library.sqlite
php artisan key:generate
php artisan migrate
php artisan db:seed
chown -R www-data:www-data /app
