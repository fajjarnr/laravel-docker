FROM php:8.4.5-fpm

RUN mkdir -p /var/www/html

RUN usermod -u 1000 www-data

RUN docker-php-ext-install pdo pdo_mysql

RUN chown -R www-data:www-data /var/www/html

USER www-data