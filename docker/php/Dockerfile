FROM php:8.2-fpm

RUN apt-get update && \
    apt install -y lsb-release ca-certificates apt-transport-https \
    software-properties-common gnupg2 curl git openssh-server unzip \
    gettext-base \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN mkdir -p /root/.ssh && \
    chmod 0700 /root/.ssh && \
    ssh-keyscan github.com > /root/.ssh/known_hosts

RUN curl -sSLf \
    -o /usr/local/bin/install-php-extensions \
    https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions && \
    chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions ctype

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug