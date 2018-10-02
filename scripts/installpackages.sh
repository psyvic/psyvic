#!/bin/bash
# yum -y install httpd > /var/log/installapache.out 2>&1
yum -y install nginx > /var/log/installnginx.out
yum -y install gcc > /var/log/installgcc.out
yum -y install make > /var/log/installmake.out

#remove php
yum -y remove php*
# Install PHP 7.0 
# automatically includes php70-cli php70-common php70-json php70-process php70-xml
yum -y install php71 >> /var/log/installphp.out

yum -y install php71-gd
yum -y install php71-imap
yum -y install php71-mbstring
yum -y install php71-mysqlnd
yum -y install php71-opcache
yum -y install php71-pdo
yum -y install php71-pecl-apcu
yum install -y php71-fpm
#install SQL
yum -y install mysql-server mysql