FROM wordpress:latest
RUN apt-get update && \
    apt-get install -y nginx && \
    rm -rf /var/lib/apt/lists/* && \
    chown -R www-data:www-data /var/lib/nginx
COPY default.conf /etc/nginx/conf.d/default.conf