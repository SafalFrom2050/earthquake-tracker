#!/usr/bin/env bash

echo 'Creating directories'
mkdir storage/app
mkdir storage/app/public
mkdir storage/framework
mkdir storage/framework/sessions
mkdir storage/framework/views
mkdir storage/framework/cache
mkdir storage/framework/cache/data

echo 'Running composer'
composer global require hirak/prestissimo
composer install --no-dev --working-dir=/var/www/html


echo 'Caching config...'
php artisan config:cache

echo 'Caching routes...'
php artisan route:cache
php artisan view:clear

echo 'Running migrations...'
php artisan migrate --force
