FROM php:8.2-apache

# Enable mod_rewrite
RUN a2enmod rewrite

# Install dependencies
RUN apt-get update && \
    apt-get install -y \
    libicu-dev \
    libmariadb-dev \
    libzip-dev \
    unzip zip \
    zlib1g-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev 


# Install PHP extensions


RUN docker-php-ext-install pdo_mysql zip

RUN echo "EnableSendfile Off" >> /etc/apache2/apache2.conf
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

COPY . /var/www/html

WORKDIR /var/www/html

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer require predis/predis

RUN composer install
# RUN php artisan key:generate

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache