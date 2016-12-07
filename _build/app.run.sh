#!/bin/sh

set -e
set -a

# xDebug
PHP_XDEBUG_ENABLED=${PHP_XDEBUG_ENABLED:-0}

if [[ $PHP_XDEBUG_ENABLED = 1 ]]; then

echo \
"zend_extension=/usr/lib/php5/modules/xdebug.so
xdebug.remote_enable=1
xdebug.remote_connect_back=1
xdebug.remote_autostart=1
xdebug.remote_port=9001
xdebug.extended_info=1
xdebug.default_enable=On" >> /etc/php5/php.ini

fi

exec /root/run.sh
