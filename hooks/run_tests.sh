#!/usr/bin/env sh
# apk --no-cache add curl
# / or /fpm-ping
curl --silent --fail http://app:8080 | grep 'PHP 8.1'
