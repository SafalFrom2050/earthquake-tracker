#!/usr/bin/env bash

mkdir storage/framework
mkdir storage/framework/sessions
mkdir storage/framework/views
mkdir storage/framework/cache
#mkdir -p storage/framework/cache/data


echo 'Running composer'
composer install --no-dev --working-dir=/var/www/html


echo 'Caching config...'
php artisan config:cache

php artisan cache:clear
php artisan config:clear
php artisan view:clear



echo 'Caching routes...'
php artisan route:cache

echo 'Running migrations...'
php artisan migrate --force --seed
