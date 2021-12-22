FROM php3. :7.4-apache

WORKDIR /var/www/html

RUN apt update

RUN apt update && apt install -y \
        ibpng-dev \
        zlib1g-dev \
        libxml2-dev \
        libzip-dev \
        libonig-dev \
        zip \
        curl \
        unzip \
        mariadb-client-core-10.5 \
    && docker-php-ext-configure gd \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install zip \
    && docker-php-source delete

COPY laravel.conf /etc/apache2/sites-available/

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN chgrp -R www-data /var/www/html

RUN a2dissite 000-default.conf; \
    a2ensite web.conf; \
    a2enmod rewrite

COPY . .