#!/bin/bash
cd /app
composer install
npm install
cp env .env
rm database/library.sqlite
touch database/library.sqlite
php artisan key:generate
php artisan migrate
npm run dev
