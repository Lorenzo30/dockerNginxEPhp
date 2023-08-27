#!/bin/bash
mkdir /projeto

composer install
php-fpm --nodaemonize


