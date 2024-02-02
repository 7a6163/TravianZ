FROM php:7.4-apache

RUN docker-php-ext-install mysqli
ADD ./ /var/www/html

RUN chmod -R 777 install GameEngine
