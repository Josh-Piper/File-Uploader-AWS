FROM mysql:latest
ENV MYSQL_ROOT_PASSWORD 123
ENV MYSQL_DATABASE swinburne
ENV MYSQL_USER josh
ENV MYSQL_PASSWORD posh
ADD setup.sql /docker-entrypoint-initdb.databases
EXPOSE 3306



#docker build . -t [tag]
#docker run -p 3307:3306 -d [tag] -e MYSQL_ROOT_PASSWORD=[password] mysql


#without docker file
# docker run --name db -d -p 3307:3306 -e MYSQL_ROOT_PASSWORD=123 mysql:latest
#docker exec -it db /bin/bash
#mysql -uroot -p123
#show databases;
#