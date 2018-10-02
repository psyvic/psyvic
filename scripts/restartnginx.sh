
#!/bin/bash
# service httpd restart > /var/log/restartapache.out 2>&1
service nginx restart >> /var/log/restartnginx.out 2>&1
service php-fpm restart >>/var/log/restartphp-fpm.out 2>&1