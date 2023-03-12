FROM wordpress:php8.1-fpm-alpine

RUN apk add --no-cache nginx

COPY ../nginx.conf /etc/nginx/conf.d/default.conf

CMD ["nginx", "-g", "daemon off;"]
