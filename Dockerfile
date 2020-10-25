FROM php:8.0.0RC2-fpm

RUN sed -i 's/deb.debian.org/mirrors.aliyun.com/g' /etc/apt/sources.list
RUN apt-get clean
RUN apt-get update -yqq && apt-get install -y     libpng-dev libicu-dev nginx supervisor procps zip libssl-dev git libzip-dev libonig-dev

COPY --from=composer:2.0.0-RC1 /usr/bin/composer /usr/bin/composer
RUN composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/

COPY composer.json .
COPY patches/* patches/
RUN ls patches
RUN composer update --prefer-stable --prefer-dist --no-autoloader --no-interaction --ignore-platform-reqs
COPY . .
RUN composer du
RUN composer test
