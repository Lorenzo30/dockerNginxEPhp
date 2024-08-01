#!/bin/bash

mkdir /etc/nginx/servers
mkdir /projeto

dockerize -wait fpm -timeout 90s

nginx -g 'daemon off;'