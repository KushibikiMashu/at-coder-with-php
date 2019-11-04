FROM php:7.0.15-alpine
LABEL maintainer="MashuKushibiki"

RUN set -eux && \
  apk update && \
  apk add --update --no-cache --virtual=.build-dependencies \
    autoconf \
    gcc \
    g++ \
    make && \
  apk add --update --no-cache \
    icu-dev && \
  pecl install xdebug && \
  apk del .build-dependencies && \
  docker-php-ext-install intl pdo_mysql mbstring bcmath && \
  docker-php-ext-enable xdebug && \
  curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer && \
  composer config -g repos.packagist composer https://packagist.jp

# config
COPY config/php.ini /usr/local/etc/php/php.ini
COPY config/docker-php-ext-xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
COPY composer.json /home/composer.json
WORKDIR /home
RUN composer install

ENTRYPOINT ["vendor/bin/phpunit", "tests"]
CMD [""]
