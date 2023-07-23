FROM phpswoole/swoole:5.0

COPY ./docker/ /

RUN set -x \
    &&  apt-get update \
    &&  apt-get install -y inotify-tools --no-install-recommends \
    &&  rm -r /var/lib/apt/lists/* \