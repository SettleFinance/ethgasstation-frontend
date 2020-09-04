FROM nginx:1.19-alpine

RUN apk update && apk upgrade

RUN apk add php7 php7-fpm php7-opcache

RUN apk add php7-gd php7-mysqli php7-zlib php7-curl