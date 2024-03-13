FROM php
RUN apt-get update
RUN apt-get install zip -y
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
COPY . .