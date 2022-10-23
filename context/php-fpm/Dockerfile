FROM php:8-fpm-alpine3.12

RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli

RUN apk update && \
  curl -sS https://getcomposer.org/installer | php \
  && chmod +x composer.phar && mv composer.phar /usr/local/bin/composer
