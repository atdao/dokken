#!/bin/bash

env | grep 'APP_' | sed "s/\(.*\)=\(.*\)/env[\1]='\2'/" > /etc/php/7.4/fpm/env.conf && sed -i "s/\(.*\)=''//g" /etc/php/7.4/fpm/env.conf

service php7.4-fpm start
service nginx start

function stop {
    service php7.4-fpm stop
    service nginx stop
    exit 0
}

trap stop SIGINT
trap stop SIGQUIT

touch /dokken/storage/logs/laravel.log
chmod -R 777 /dokken/storage


tail -F /var/log/nginx/error.log -F /var/log/nginx/access.log -F /dokken/storage/logs/laravel.log
