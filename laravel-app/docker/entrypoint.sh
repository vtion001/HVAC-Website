#!/bin/bash

# Copy .env if it doesn't exist
if [ ! -f ".env" ]; then
    echo "Creating .env file..."
    cp .env.example .env
fi

# Install dependencies if vendor doesn't exist (or always update?)
# For dev, we might want 'composer install'
if [ ! -d "vendor" ]; then
    echo "Installing dependencies..."
    composer install
fi

# Generate key if not set
if grep -q "APP_KEY=$" .env || grep -q "APP_KEY=" .env | grep -v "base64"; then
    echo "Generating application key..."
    php artisan key:generate
fi

# Create SQLite database if it doesn't exist
if [ ! -f "database/database.sqlite" ]; then
    echo "Creating database.sqlite..."
    touch database/database.sqlite
fi

# Fix permissions
chmod -R 777 storage bootstrap/cache

# Run migrations
echo "Running migrations..."
# Wait for DB to be ready - rudimentary check
sleep 10
php artisan migrate --force

# Fix ownership of the database after migrations (since they run as root)
echo "Fixing database permissions..."
chown -R www-data:www-data /var/www/database

echo "Starting Apache..."
apache2-foreground
