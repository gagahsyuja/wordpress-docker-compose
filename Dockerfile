FROM php:8.2-apache

WORKDIR /var/www/html

RUN apt-get update && \
    apt-get install libpng-dev -y

RUN docker-php-ext-install pdo pdo_mysql gd

RUN docker-php-ext-install mysqli

RUN pecl install redis

EXPOSE 80

RUN mkdir --parents /var/www/html

RUN chown -R www-data:www-data /var/www/html

ENTRYPOINT [ "apache2-foreground" ]
