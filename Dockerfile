FROM php:8.3-apache

WORKDIR /var/www/html

# Copy composer files first (for caching)
COPY composer.json composer.lock /var/www/html/

# Install dependencies
RUN apt-get update && apt-get install -y unzip \
    && docker-php-ext-install exif \
    && docker-php-ext-enable exif

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy the full app including artisan
COPY . /var/www/html

# Install PHP dependencies
RUN composer install --no-dev

EXPOSE 80
CMD ["apache2-foreground"]
