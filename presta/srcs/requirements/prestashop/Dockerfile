
FROM prestashop/base:7.4-fpm

# ENV PS_VERSION 8.0.4

# Get PrestaShop
ADD https://www.prestashop.com/download/old/prestashop_1.7.8.5.zip /tmp/prestashop.zip

# Extract
RUN mkdir -p /tmp/data-ps \
	&& unzip -q /tmp/prestashop.zip -d /tmp/data-ps/ \
	&& bash /tmp/ps-extractor.sh /tmp/data-ps \
	&& rm /tmp/prestashop.zip
RUN apt-get update && apt-get install -y vim