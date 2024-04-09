FROM php:latest

COPY . /usr/src/app
WORKDIR /usr/src/app

EXPOSE 50

CMD ["php", "-S", "0.0.0.0:50"]
