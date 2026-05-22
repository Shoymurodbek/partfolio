FROM php:8.2-apache

# Kerakli tizim paketlarini o'rnatish
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl

# PHP kengaytmalarini o'rnatish
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Apache sozlamalari (Laravel public papkasiga yo'naltirish)
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Apache mod_rewrite modullarini yoqish
RUN a2enmod rewrite

# Composer-ni yuklab olish
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Loyiha fayllarini konteynerga nusxalash
WORKDIR /var/www/html
COPY . .

# Composer paketlarini o'rnatish
RUN composer install --no-dev --optimize-autoloader

# Laravel papkalariga ruxsat berish
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80
