
FROM debian:bullseye

RUN apt update && apt upgrade && apt install -y mariadb-server

COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/.
COPY tools/init.sql /etc/mysql/init.sql
COPY tools/mysql_setup.sh .
RUN chmod +x mysql_setup.sh

RUN mkdir /run/mysqld

CMD ["./mysql_setup.sh"]
