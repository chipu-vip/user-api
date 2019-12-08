FROM php:fpm-alpine

COPY . /var/www/html/
WORKDIR /var/www/html/
RUN mv /var/www/html/.env-docker /var/www/html/.env
RUN set -ex \
&& apk --no-cache add \
postgresql-dev
RUN docker-php-ext-install pdo pdo_pgsql
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN composer install
RUN php artisan key:generate