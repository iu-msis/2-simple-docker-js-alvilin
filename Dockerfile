#using this as the base
FROM php:7.4-apache

#optional
LABEL maintainer="Alvin Lin"

RUN docker-php-ext-install pdo_mysql

#apache config
COPY docker/apache/vhost.conf /etc/apache2/sites-available/000-default.conf

#copy our public to working dir
COPY app /srv/app

#set working dir in image
WORKDIR /srv/app

COPY docker/php/php.ini /usr/local/etc/php/php.ini