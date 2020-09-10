FROM php:7.4-fpm-alpine

WORKDIR /var/www/html

RUN docker-php-ext-install mysqli pdo_mysql pdo
RUN chown -r www-data:www-data /var/www
RUN chmod -r 775 /var/www/html