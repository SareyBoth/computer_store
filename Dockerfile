FROM php:8.3-apache

WORKDIR /var/www/html

# Copy composer files first for better caching
COPY composer.json composer.lock /var/www/html/

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y unzip \
    && docker-php-ext-install exif \
    && docker-php-ext-enable exif

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP dependencies
RUN composer install --no-dev

# Copy the rest of the application
COPY . /var/www/html

# Expose port
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
