#!/bin/bash

if [! -f etc/ssl/certs/nginx.crt]; then
echo "Ngomx: setting up ssl ...";
openssl req -x509 -nodes -days 365 -newkey rsa:4096 -keyout /etc/ssl/private/nginx.key -out /etc/ssl/certs/nginx.crt -subj "/C=ES/ST=MADRID/L=MADRID/0=wordpress/CN=lvintila.42.fr";
echo "Nginx: ssl is set up!";
fi

exec "$@"