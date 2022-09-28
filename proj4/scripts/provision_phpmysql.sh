#!/bin/bash
echo "PHP with MYSQL provisioning -begin"
sudo apt install php libapache2-mod-php php-mysql -y
sudo service apache2 restart
echo "PHP with MYSQL provisioning -end"