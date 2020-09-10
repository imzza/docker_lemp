FROM php:7.4-fpm-alpine
RUN docker-php-ext-install pdo pdo_mysql mysqli
COPY crontab /etc/crontabs/root
CMD ["crond", "-f"]
