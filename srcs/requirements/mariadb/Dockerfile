## the penultimate stable version
FROM debian:bullseye

## -y: automatic yes to all prompts
RUN apt update && apt upgrade -y && apt install -y mariadb-server

COPY ./tools/mdb-conf.sh /usr/local/bin/mdb-conf.sh
RUN chmod +x /usr/local/bin/mdb-conf.sh

EXPOSE 3306

ENTRYPOINT ["/usr/local/bin/mdb-conf.sh"]
