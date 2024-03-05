FROM php:8.3-fpm

COPY . /var/www/html/

WORKDIR /var/www/html/

RUN apt-get update && apt-get install -y \
    unzip \
    libpq-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ENV COMPOSER_ALLOW_SUPERUSER 1

RUN composer install --no-dev --optimize-autoloader 

RUN php bin/console asset-map:compile
    
RUN php bin/console cache:clear --env=prod
