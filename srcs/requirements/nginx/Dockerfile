
FROM debian:latest

RUN apt update && apt upgrade && apt install -y nginx

COPY conf/default.conf /etc/nginx/sites-available/default

CMD ["nginx", "-g", "daemon off;"]
