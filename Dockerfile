#Alpine, PHP, MySql, Apache
FROM php:7.3-apache
COPY ./ /var/www/html
RUN apt-get update && apt-get upgrade -y 
RUN docker-php-ext-install mysqli
VOLUME /var/www/html
VOLUME /var/log/httpd
VOLUME /var/lib/mysql
VOLUME /var/log/mysql
VOLUME /etc/apache2

