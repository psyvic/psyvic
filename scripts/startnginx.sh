#!/bin/bash
# service httpd start > /var/log/startapache.out 2>&1
service nginx start >>/var/log/startnginx.out 2>&1
service php-fpm start >>/var/log/startphp-fpm.out 2>&1