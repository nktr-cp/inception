
FROM debian:latest

RUN apt update && apt upgrade && apt install -y mariadb-server

COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/.
COPY init.sql /etc/mysql/init.sql
COPY mysql_setup.sh .
RUN chmod +x mysql_setup.sh

RUN mkdir /run/mysqld

CMD ["./mysql_setup.sh"]
