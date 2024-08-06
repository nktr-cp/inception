
FROM debian:latest

RUN apt update && apt upgrade && apt install -y \
		php-fpm \
		php-mysqli \
		curl

COPY conf/www.conf /etc/php/8.2/fpm/pool.d/.
COPY tools/wordpress_setup.sh .
RUN chmod +x wordpress_setup.sh

CMD ["./wordpress_setup.sh"]
