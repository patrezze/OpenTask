FROM php:7.4-apache

CMD ["apachectl", "-D", "FOREGROUND"]