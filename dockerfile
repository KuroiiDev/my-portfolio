# ─── Stage 1: Build ──────────────────────────────────
FROM php:8.2-fpm-alpine AS build

# Install system dependencies
RUN apk add --no-cache \
    git \
    curl \
    libpng-dev \
    libzip-dev \
    zip \
    unzip \
    nodejs \
    npm \
    postgresql-dev

# Install PHP extensions
RUN docker-php-ext-install \
    pdo \
    pdo_pgsql \
    pgsql \
    zip \
    gd \
    bcmath \
    opcache

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copy composer files first (layer caching)
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-scripts --no-interaction

# Copy package.json for npm
COPY package.json package-lock.json ./
RUN npm ci

# Copy rest of the app
COPY . .

# Build assets
RUN npm run build

# Run composer scripts
RUN composer dump-autoload --optimize

# ─── Stage 2: Production ─────────────────────────────
FROM php:8.2-fpm-alpine AS production

# Install runtime dependencies only
RUN apk add --no-cache \
    nginx \
    supervisor \
    libpng \
    libzip \
    postgresql-dev \
    curl

# Install PHP extensions
RUN docker-php-ext-install \
    pdo \
    pdo_pgsql \
    pgsql \
    zip \
    gd \
    bcmath \
    opcache

WORKDIR /var/www

# Copy built app from build stage
COPY --from=build /var/www .

# Copy nginx config
COPY docker/nginx.conf /etc/nginx/nginx.conf

# Copy supervisor config
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Copy PHP opcache config
COPY docker/opcache.ini /usr/local/etc/php/conf.d/opcache.ini

# Set permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage \
    && chmod -R 755 /var/www/bootstrap/cache

# Copy entrypoint
COPY docker/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

EXPOSE 80

ENTRYPOINT ["/entrypoint.sh"]