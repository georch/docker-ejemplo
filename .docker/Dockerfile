FROM php:7.1-apache

RUN apt-get -y update --fix-missing
RUN apt-get upgrade -y

RUN apt-get update && apt-get install --fix-missing -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
    && docker-php-ext-install -j$(nproc) iconv mcrypt mysqli \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

RUN apt-get -y install libsqlite3-dev libsqlite3-0 mysql-client
RUN docker-php-ext-install pdo pdo_mysql 
RUN docker-php-ext-install pdo_sqlite
RUN docker-php-ext-install mysqli

RUN a2enmod rewrite headers

RUN a2dissite 000-default

COPY php.ini /usr/local/etc/php/conf.d/php.ini

COPY virtualhost-php.conf /etc/apache2/sites-available/001-virtualhost-php.conf
RUN a2ensite 001-virtualhost-php

RUN touch /var/www/error.log /var/www/access.log
RUN chown www-data:www-data /var/www/error.log /var/www/access.log

RUN curl -sS https://getcomposer.org/installer | php -- \
  --install-dir=/usr/bin --filename=composer
