FROM dmitrovskiy/docker-nginx-php-fpm:1.0.1-alpine

RUN php /usr/share/pear/peclcmd.php install -f xdebug \
    && apk add --update \
        php5-mysql \
        php5-pdo

COPY app.run.sh /root/app.run.sh

CMD /root/app.run.sh