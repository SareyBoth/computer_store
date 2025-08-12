//Use an official PHP runtime as the base image

FROM php:8.3-apache

//Set the working directory in the container

WORKDIR /var/www/html

//Copy just the necessary files for Composer installation

COPY composer.json composer.lock /var/www/html/

//Install Composer
RUN apt-get update && apt-get install -y unzip && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

//Install project dependencies with Composer

RUN composer install --no-dev

//Copy the rest of your PHP files to the container

COPY . /var/www/html

//Expose port 80 for the Apache web server

EXPOSE 80

//Start the Apache web server

CMD ["apache2-foreground"]
