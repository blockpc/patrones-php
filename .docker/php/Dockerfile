FROM php:8.3-fpm

# Define UID y GID como argumentos de compilación
ARG UID=1000
ARG GID=1000

# Instala dependencias necesarias para las extensiones
RUN apt-get update -y && \
    apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libwebp-dev \
    libxpm-dev \
    libzip-dev \
    zip && \
    docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp --with-xpm && \
    docker-php-ext-install -j$(nproc) gd pdo pdo_mysql zip && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

# Copiar archivos necesarios
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copiar archivos de configuración
COPY .docker/php/php.ini /usr/local/etc/php/

# Copiar la aplicación
COPY . /var/www/html

WORKDIR /var/www/html

# Crear el grupo y el usuario usando los UID y GID definidos
RUN addgroup --gid $GID appgroup && \
    adduser --disabled-password --gecos "" --uid $UID --gid $GID appuser && \
    mkdir -p /var/www/html/logs && \
    chown -R appuser:appgroup /var/www/html/logs

USER appuser