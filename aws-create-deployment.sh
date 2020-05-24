#!/bin/bash

#EC2 Values -> Change these if needed
EC2_INSTANCE_TYPE = t2.micro
KEYS_NAME = EC2KEY
AMI_TYPE = ami-0323c3dd2da7fb37d

#CREATE .PEM FILE FOR INSTANCE saved in /Documents
aws ec2 create-key-pair --key-name KEYS_NAME --query 'KeyMaterial' --output text > KEYS_NAME.pem


# Security Group -> Inbund rule SSH, HTTP, HTTPS
SECURITY_NAME = WebDMZ
SECURITY_DESCRIPTION = "WebDMZ for EC2 instances"
IP_ADDRESS = 0.0.0.0/0 #CHANGE THIS

##CREATE SECURITY GROUP
aws create-security-group --group-name SECURITY_NAME --description SECURITY_DESCRIPTION

#ASSIGN RULES TO SECURITY GROUP
aws ec2 authorize-security-group-ingress --group-name SECURITY_NAME --protocol tcp --port 22 --cidr IP_ADDRESS
aws ec2 authorize-security-group-ingress --group-name SECURITY_NAME --protocol tcp --port 88 --cidr IP_ADDRESS
aws ec2 authorize-security-group-ingress --group-name SECURITY_NAME --protocol tcp --port 443 --cidr IP_ADDRESS

#CREATE EC2 INSTANCE
aws ec2 run-instances --image-id AMI_TYPE --count 1 --instance-type EC2_INSTANCE_TYPE --key-name KEYS_NAME --security-group-ids SECURITY_NAME








#Use AWS CLI to launch script.
Region = 
VPC_Name = 
VPC_CIDR