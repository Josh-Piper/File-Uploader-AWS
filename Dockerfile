#Alpine, PHP, MySql, Apache
FROM httpd:latest
COPY ./ /usr/local/apache2/htdocs/
RUN apt-get update && apt-get upgrade -y 


