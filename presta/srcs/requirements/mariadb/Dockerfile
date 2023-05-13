# FROM debian:buster

# RUN apt-get update
# RUN apt-get install -y mariadb-server

# EXPOSE 3306

# COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/
# COPY ./tools /var/www/

# RUN service mysql start && mysql < /var/www/initial_db.sql && rm -f /var/www/initial_db.sql;

# CMD ["mysqld"]

FROM debian:buster

# Install mariadb-server
RUN apt-get update && apt-get install -y mariadb-server

# Copy configuration and tools
COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./tools /var/www/

# Expose port 3306
EXPOSE 3306

# Add an entrypoint script
COPY ./tools/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]