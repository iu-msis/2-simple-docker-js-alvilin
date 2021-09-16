#using this as the base
FROM php:7.4-apache

#optional
LABEL maintainer="Alvin Lin"

FROM php:7.4-apache

COPY app /srv/app

COPY docker/apache/vhost.conf /etc/apache2/sites-available/000-default.conf