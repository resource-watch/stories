FROM wordpress:4.8.2

RUN apt-get update && \
    apt-get install -y mysql-client vim

COPY dump.sql /var/www/html/dump.sql
COPY initdb.sh /var/www/html/initdb.sh
