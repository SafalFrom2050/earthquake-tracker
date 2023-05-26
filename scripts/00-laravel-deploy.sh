#!/usr/bin/env bash

ls

echo 'Running composer'
composer install --no-dev --working-dir=/var/www/html

mkdir -p storage/framework
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p storage/framework/cache



php artisan cache:clear
php artisan config:clear
php artisan view:clear

echo 'Caching config...'
php artisan config:cache

echo 'Caching routes...'
php artisan route:cache

echo 'Running migrations...'
php artisan migrate --force
