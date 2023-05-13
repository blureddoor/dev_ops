FROM debian:buster

RUN apt-get -y update
RUN apt-get -y install php7.3 php-mysqli php-fpm wget sendmail 

# EXPOSE 9000

# COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d
# COPY ./tools /var/www

# RUN chmod +x /var/www/wordpress_start.sh

# ENTRYPOINT [ "/var/www/wordpress_start.sh" ]

# CMD ["/usr/sbin/php-fpm7.3", "--nodaemonize"]

FROM prestashop/prestashop:1.7.8.8

# Install php7.4-fpm
# RUN apt-get update && apt-get install -y php7.4-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    apt-utils \
    git \
    libicu-dev \
    libmcrypt-dev \
    libxml2-dev \
    unzip \
    wget \
    && rm -rf /var/lib/apt/lists/* 

# Install the mcrypt extension
# RUN pecl install mcrypt-1.0.3 && docker-php-ext-enable mcrypt

# Install other required extensions
RUN docker-php-ext-install -j$(nproc) \
    intl \
    mbstring \
    pdo_mysql \
    soap

# Configure the gd library
# RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
# RUN docker-php-ext-configure gd --with-png-dir=/usr/include/ --with-jpeg=/usr/include/ --with-freetype=/usr/include/
# RUN docker-php-ext-install gd
RUN docker-php-ext-configure gd --with-jpeg --with-freetype

# Install extensions
# RUN docker-php-ext-install -j$(nproc) gd intl mbstring mcrypt pdo_mysql soap zip

# Download Prestashop
RUN wget https://github.com/PrestaShop/PrestaShop/archive/refs/tags/1.7.8.8.zip

# Unzip Prestashop
RUN unzip 1.7.8.8.zip -d /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 9000 for fastcgi process manager
EXPOSE 9000

# Start PHP-FPM server
CMD ["php-fpm"]