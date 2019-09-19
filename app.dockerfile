FROM php:7.2-fpm

RUN apt-get update && apt-get install -y libmcrypt-dev \
    && apt-get install -y default-libmysqlclient-dev \ 
    && pecl install mcrypt-1.0.1 \
    && docker-php-ext-enable mcrypt \
    && docker-php-ext-install pdo_mysql
# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www
