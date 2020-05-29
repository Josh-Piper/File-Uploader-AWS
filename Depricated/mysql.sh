#!/bin/bash

if [ -f /root/.my.cnf ]; then
	mysql -e "CREATE DATABASE swinburne /*\!40100 DEFAULT CHARACTER SET utf8 */;"
	mysql -e "show databases;"
	mysql -e "CREATE USER 'root'@localhost IDENTIFIED BY '';"
	mysql -e "GRANT ALL PRIVILEGES ON swinburne.* TO 'root'@'localhost';"
	mysql -e "FLUSH PRIVILEGES;"
	exit
	

else
	mysql -uroot -p'' -e "CREATE DATABASE swinburne /*\!40100 DEFAULT CHARACTER SET utf8 */;"
	mysql -uroot -p'' -e "show databases;"
	mysql -uroot -p"" -e "CREATE USER root@localhost IDENTIFIED BY '';"
	mysql -uroot -p${rootpasswd} -e "GRANT ALL PRIVILEGES ON swinburne.* TO 'root'@'localhost';"
	mysql -uroot -p${rootpasswd} -e "FLUSH PRIVILEGES;"




    mysql "CREATE TABLE 'images' (
    'index' INT(255),
    'title'VARCHAR(255) NOT NULL,
    'description' VARCHAR(255) NOT NULL,
    'photo' LONGBLOB, 
    'date' DATETIME,
    PRIMARY KEY ('title'),
    UNIQUE (
    'index' 
    ),
    );"

    mysql DESCRIBE images
	exit
fi