#!/bin/bash
cd /app
composer install
npm install
cp env .env
touch database/library.sqlite
php artisan key:generate
php artisan migrate