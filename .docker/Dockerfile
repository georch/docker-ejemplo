FROM php:7.1-apache

RUN apt-get -y update --fix-missing
RUN apt-get upgrade -y

RUN apt-get update && apt-get install --fix-missing -y \
        git \
        zip \
        unzip \
        && docker-php-ext-install pdo pdo_mysql
