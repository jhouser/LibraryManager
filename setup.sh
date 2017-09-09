#!/bin/bash
cd /app
composer install
cp env .env
touch database/library.sqlite
php artisan key:generate
