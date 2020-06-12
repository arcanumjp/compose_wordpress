
set -e


service mysql start
mysql < initdb.sql


/etc/init.d/php7.4-fpm start

echo "daemon off;" >> /etc/nginx/nginx.conf
service nginx start


