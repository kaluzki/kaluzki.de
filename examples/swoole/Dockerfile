# prod
FROM phpswoole/swoole:5.0 as prod
COPY ./docker/ /

# dev
FROM prod as dev
RUN set -ex \
    && apt-get update \
    && apt-get install -y inotify-tools --no-install-recommends \
    && pecl channel-update pecl.php.net \
    && pecl install xdebug-stable \
    &&  rm -r /var/lib/apt/lists/*
