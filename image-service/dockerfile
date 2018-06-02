FROM php:7.2-apache

RUN apt-get update && apt-get install -y \
       libpng-dev \
    && docker-php-ext-configure gd \ 
    && docker-php-ext-install gd

COPY image.php /var/www/html/image.php

