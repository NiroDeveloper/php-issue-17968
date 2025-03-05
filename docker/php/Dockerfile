FROM php:8.4-cli-alpine

RUN apk upgrade --update

WORKDIR /var/www/html

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# If you remove this command, it will work correctly.
RUN apk add linux-headers \
  && apk --no-cache add pcre-dev ${PHPIZE_DEPS} \
  && pecl install xdebug \
  && docker-php-ext-enable xdebug \
  && apk del pcre-dev ${PHPIZE_DEPS}
