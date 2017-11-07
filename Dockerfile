FROM wordpress:4.8.2

RUN apt-get update && \
    apt-get install -y mysql-client

COPY dump.sql /var/www/html/dump.sql

