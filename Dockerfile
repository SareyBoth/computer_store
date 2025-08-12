FROM php:8.3-apache

RUN apt-get update && apt-get install -y \
    libonig-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-install pdo_mysql mbstring zip exif \
    && rm -rf /var/lib/apt/lists/*

RUN a2enmod rewrite

WORKDIR /var/www/html

# Copy composer files first for caching
COPY composer.json composer.lock /var/www/html/

# Copy rest of app code (including artisan)
COPY . /var/www/html

# Copy composer binary
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Run composer install
RUN composer install --no-dev --optimize-autoloader

# Fix permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

CMD ["apache2-foreground"]
