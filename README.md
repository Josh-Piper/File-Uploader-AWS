# File-Uploader-AWS

## Description
<br>Simple file uploading application that will be used in AWS. 
This is a sample project that requires setting up AWS ELB's, Route53, VPC's, Monitoring etc.
This repository will track the progress completed...</br>

## How To Set Up on AWWS
```
sudo yum -y update -> updates server
sudo yum -y install httpd php -> installs httpd + php interpreter
sudo chkconfig httpd on -> ensures Apache is on when booted
wget https://github.com/PandaPlaysAll/File-Uploader-AWS/archive/master.zip -> downloads this repo
sudo unzip File-Uploader-AWS-master.zip -d /var/www/html -> unzips repo into default webpage
sudo service httpd start -> Starts web server on current machine
```

## How to Set Up on Docker
```
docker build .
docker run --rm --h [myapp.mydomain.com] [ContainerID]
docker exec -it [ContainerID] sh
cd /var/www/html
sh mysql.sh
```

### How to make wget and update EC2 instance repo when config refreshed? boot /w docker + kurbenetes...

## AWS CLI script

### Creating the VPC
```
View the install script within the repo
```
