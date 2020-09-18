#!/bin/bash

if [ ! -f "/opt/config/observium/config.php" ];
then
  echo "Deploying default configuration (config.php)..."
  cp -nf /opt/config/defaults/*.php /opt/config/observium/.
  cp -nf /opt/config/defaults/*.png /opt/config/observium/images/.
fi

if [ ! -f "/opt/config/apache2/sites-available/000-default-ssl.conf" ];
then
  echo "Deploying Apache default configuration (000-default-ssl.conf)..."
  cp -nf /opt/config/defaults/000-default*.conf /opt/config/apache2/sites-available/.
fi

# Replace dummy IP with IP of host
HOSTNAME="$(hostname -i)"
#echo ServerName ${HOSTNAME} >> /etc/apache2/apache2.conf
sed -i "s/0.0.0.0/${HOSTNAME}/" /opt/config/apache2/sites-available/000-default.conf
sed -i "s/0.0.0.0/${HOSTNAME}/" /opt/config/apache2/sites-available/000-default-ssl.conf

service apache2 start
service mysql start

tail -f /var/log/apache2/access.log