FROM php:8.2-cli-bullseye

RUN apt-get update && apt-get install -y cowsay

COPY src /src

WORKDIR /src

CMD ["/usr/local/bin/php", "-S", "0.0.0.0:3000"]

EXPOSE 3000