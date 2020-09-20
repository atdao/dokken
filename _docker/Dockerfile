FROM ubuntu:20.04

ARG PHP_VERSION=7.4

RUN apt-get update && DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends \
    vim \
    curl \
    docker.io \
    php${PHP_VERSION}-fpm \
    php${PHP_VERSION}-cli \
    # php extensions
    php${PHP_VERSION}-mbstring \
    php${PHP_VERSION}-bcmath \
    php${PHP_VERSION}-intl \
    php${PHP_VERSION}-pdo-mysql \
    php${PHP_VERSION}-zip \
    php${PHP_VERSION}-curl \
    php${PHP_VERSION}-xml \
    # nginx
    nginx && \
    rm -rf /var/lib/apt/lists/*

RUN rm -f /etc/nginx/conf.d/* \
    && service nginx stop

COPY _docker/etc/nginx/ /etc/nginx/
COPY _docker/etc/php/7.4/fpm/ /etc/php/7.4/fpm/
COPY _docker/entrypoint.sh /entrypoint.sh

COPY . /dokken

WORKDIR /dokken
ENTRYPOINT ["/entrypoint.sh"]
