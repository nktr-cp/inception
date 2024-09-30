
# stable version
FROM debian:bullseye

RUN apt update && apt upgrade && apt install -y nginx openssl

RUN mkdir -p /etc/nginx/ssl/certs && \
	mkdir -p /etc/nginx/ssl/private

RUN openssl req -x509 -nodes -out /etc/nginx/ssl/certs/inception.crt -keyout \
		/etc/nginx/ssl/private/inception.key -subj "/C=JA/ST=Tokyo/L=Shinjuku/O=42Tokyo/OU=42Tokyo/CN=knishiok.42.fr/UID=knishiok"

COPY conf/default.conf /etc/nginx/sites-available/default

RUN mkdir -p /var/www/html

# change the ownership of the html directory
RUN chown -R www-data:www-data /var/www/html && \
	chmod -R 755 /var/www/html

EXPOSE 443

# start nginx in the foreground
CMD ["nginx", "-g", "daemon off;"]
