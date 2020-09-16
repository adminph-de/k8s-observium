#!/bin/bash

# Replace dummy IP with IP of host
HOSTNAME="$(hostname -i)"
#echo ServerName ${HOSTNAME} >> /etc/apache2/apache2.conf
sed -i "s/0.0.0.0/${HOSTNAME}/" /etc/apache2/sites-available/000-default.conf
sed -i "s/0.0.0.0/${HOSTNAME}/" /etc/apache2/sites-available/000-default-ssl.conf

service apache2 start
service mysql start

tail -f /var/log/apache2/access.log