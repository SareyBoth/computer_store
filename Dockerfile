WORKDIR /var/www/html

# Copy only composer files first
COPY composer.json composer.lock /var/www/html/

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y unzip \
    && docker-php-ext-install exif \
    && docker-php-ext-enable exif

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy the rest of the app including artisan
COPY . /var/www/html

# Install PHP dependencies
RUN composer install --no-dev

# Expose port
EXPOSE 80

CMD ["apache2-foreground"]
