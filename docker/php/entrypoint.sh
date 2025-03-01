#!/bin/bash

composer install --ignore-platform-reqs
npm install
npm run build
php artisan migrate:fresh --seed

if [ ! -f '.env' ]; then
   cp .env.example .env
fi

php-fpm