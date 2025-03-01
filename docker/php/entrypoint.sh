#!/bin/bash

composer install -y --ignore-platform-reqs
npm run build -y
php artisan migrate:fresh --seed

if [ ! -f '.env' ]; then
   cp .env.example .env
fi

php-fpm