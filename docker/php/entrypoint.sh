#!/bin/bash

composer install --ignore-platform-reqs

npm install
npm run build

if [ ! -f '.env' ]; then
   cp .env.example .env
fi

php artisan migrate:fresh --seed

php-fpm