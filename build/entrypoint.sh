#!/bin/bash

# Replace dummy IP with IP of host
HOSTNAME="$(hostname)"
#sed -i "s|0.0.0.0|${HOSTIP}|g" /etc/apache2/apache2.conf
echo ServerName ${HOSTNAME} >> /etc/apache2/apache2.conf

service apache2 start
service mysql start

tail -f /var/log/apache2/access.log