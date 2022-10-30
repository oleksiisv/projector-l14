FROM nginx:alpine

RUN apk update \
    && apk upgrade \
    && apk add --no-cache bash \
    && apk add htop \

RUN mkdir -p /var/www

EXPOSE 80 8000 443
