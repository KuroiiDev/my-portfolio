#!/bin/sh
set -e

echo "Starting entrypoint..."

# Generate app key if not set
if [ -z "$APP_KEY" ]; then
    echo "Generating APP_KEY..."
    php artisan key:generate --force
fi

# Cache config, routes, views
echo "Caching config..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run migrations
echo "Running migrations..."
php artisan migrate --force

# Run seeders (only if DB is empty)
echo "Checking if seeding needed..."
USER_COUNT=$(php artisan tinker --execute="echo App\Models\Project::count();" 2>/dev/null || echo "0")
if [ "$USER_COUNT" = "0" ]; then
    echo "Seeding database..."
    php artisan db:seed --force
fi

# Create storage symlink
php artisan storage:link --force 2>/dev/null || true

# Make sure log dirs exist
mkdir -p /var/log/supervisor

echo "Starting services..."
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf