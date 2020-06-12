FROM ubuntu

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        nginx \
        mysql-server \
        php-fpm \
        wget \
        unzip \
        php-mysql

RUN apt-get install -y vim


WORKDIR /var/www


# MySQL
COPY ./initdb.sql ./initdb.sql


# Nginx
COPY ./www.conf /etc/nginx/sites-enabled/default


# ワードプレスのファイルを配置しておく
RUN wget https://ja.wordpress.org/wordpress-5.4.1-ja.zip  --no-check-certificate
RUN unzip -q wordpress-5.4.1-ja.zip
RUN mv ./wordpress/* ./html
#RUN rm wordpress-5.4.1-ja.zip
#RUN rm -r ./wordpress
COPY ./wp-config.php ./html/wp-config.php

# その他Dockerfile後実行したい処理
COPY ./entrypoint.sh ./entrypoint.sh
RUN chmod +x ./entrypoint.sh
CMD ./entrypoint.sh
 

EXPOSE 80
