#!/bin/bash

echo "Database provisioning - begin"
DBNAME=vagrant
DBUSER=vagrant
DBPASSWD=vagrantpass
echo "Creating new db $DBNAME"
mysql -uroot -e "drop DATABASE if exists $DBNAME"
mysql -uroot -e "CREATE DATABASE $DBNAME"

mysql -uroot -e "drop user if exists '$DBUSER'@'%'"
mysql -uroot -e "create user '$DBUSER'@'%' identified by '$DBPASSWD'"

mysql -uroot -e "grant all privileges on $DBNAME.* to '$DBUSER'@'%'"
echo "Database provisioning - end"