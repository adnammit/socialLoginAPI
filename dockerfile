# docker run --rm -it -p 8090:80 amandaryman/magnificent-beluga

FROM php:7.0-apache

# Install Apache module
RUN a2enmod rewrite

COPY . /var/www/html/