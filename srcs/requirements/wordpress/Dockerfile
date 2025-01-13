## the penultimate stable version
FROM debian:bullseye

RUN apt update && apt upgrade -y && apt install -y curl php7.4-fpm php-mysql

COPY ./tools/wp-conf.sh /usr/local/bin/wp-conf.sh
RUN chmod +x /usr/local/bin/wp-conf.sh

COPY ./conf/www.conf /etc/php/7.4/fpm/pool.d/www.conf

EXPOSE 9000

ENTRYPOINT ["usr/local/bin/wp-conf.sh"]
