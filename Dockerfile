FROM php:7.4-apache

RUN a2enmod rewrite

WORKDIR /var/www/html/opentask

COPY . .
COPY ./docker/config.php App/Config
COPY ./docker/000-default.conf /etc/apache2/sites-available/000-default.conf

CMD ["apachectl", "-D", "FOREGROUND"]