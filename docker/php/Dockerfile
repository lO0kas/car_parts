FROM php:fpm

ARG user=user1
ARG uid=1000

RUN apt-get update
RUN apt-get install -y libpng-dev libonig-dev libxml2-dev zip unzip curl

RUN docker-php-ext-install -j$(nproc) pdo_mysql mbstring exif pcntl bcmath gd
RUN docker-php-ext-enable pdo_mysql

RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user 

WORKDIR /var/www

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.40.0/install.sh | bash

USER $user