FROM php:8.4-cli-alpine

RUN sed -i 's|dl-cdn.alpinelinux.org|mirror.yandex.ru/mirrors|g' /etc/apk/repositories \
    && apk add --no-cache \
        bash \
        git \
        unzip \
        sqlite-dev \
        oniguruma-dev \
        linux-headers \
        autoconf \
        build-base \
    && docker-php-ext-install -j$(nproc) \
        pdo \
        pdo_sqlite \
        mbstring \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && apk del autoconf build-base \
    && rm -rf /var/cache/apk/* /tmp/pear

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

WORKDIR /app
