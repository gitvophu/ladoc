FROM php:7.4-fpm
RUN apt-get update && apt-get install -y libpq-dev libzip-dev
RUN docker-php-ext-install pdo pdo_pgsql pgsql zip pcntl

RUN pecl install redis \
    && docker-php-ext-enable redis


# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app

RUN chmod -R 777 /app/storage/logs || true \
    && chmod -R 777 /app/storage/framework || true \
    && chmod -R 775 /app/bootstrap/cache || true

# CMD /app/docker/config/php/scripts/script.sh