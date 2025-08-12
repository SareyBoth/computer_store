FROM php:8.3-apache

WORKDIR /var/www/html

COPY composer.json composer.lock /var/www/html/

RUN apt-get update && apt-get install -y unzip && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install --no-dev

COPY . /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
