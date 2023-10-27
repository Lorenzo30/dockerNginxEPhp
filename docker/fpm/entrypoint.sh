#!/bin/bash
mkdir /projeto

composer install

cd /projeto/example-app
php artisan migrate:fresh

php-fpm 



