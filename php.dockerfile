FROM php:7.4-fpm-alpine
WORKDIR /var/www/html
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN chown -R www-data:www-data /var/www
RUN chmod -R 775 /var/www/html