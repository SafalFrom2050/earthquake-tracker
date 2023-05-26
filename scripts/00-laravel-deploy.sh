#!/usr/bin/env bash


echo 'Running composer'
composer global require hirak/prestissimo
composer install --no-dev --working-dir=/var/www/html

ls
#mkdir /storage/framework/{sessions,views,cache}



php artisan cache:clear
php artisan config:clear
php artisan view:clear

echo 'Caching config...'
php artisan config:cache

echo 'Caching routes...'
php artisan route:cache

echo 'Running migrations...'
php artisan migrate --force
