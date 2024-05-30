FROM php:8.1-fpm
LABEL authors="count"

RUN apt-get -y update && apt-get upgrade -y
RUN docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo_mysql



CMD ["php-fpm"]
