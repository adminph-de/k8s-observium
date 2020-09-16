CREATE DATABASE observium DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
CREATE USER 'observium'@'%' identified by 'ZK%Oeg@f6!0h';
GRANT ALL ON observium.* TO 'observium'@'%';