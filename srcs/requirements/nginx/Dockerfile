## the penultimate stable version
FROM debian:bullseye

RUN apt update && apt upgrade -y && apt install -y nginx openssl

COPY ./conf/nginx.conf /etc/nginx/nginx.conf

COPY ./tools/nginx-conf.sh /usr/local/bin/nginx-conf.sh
RUN chmod +x /usr/local/bin/nginx-conf.sh

EXPOSE 443

## execute in the foreground
ENTRYPOINT ["/usr/local/bin/nginx-conf.sh"]
