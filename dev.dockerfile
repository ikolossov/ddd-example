FROM php:8.2-fpm-alpine
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/