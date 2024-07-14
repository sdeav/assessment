#!/bin/bash
set -e

# Check if the vendor directory exists, if not run composer install
if [ ! -f "vendor/autoload.php" ]; then
     echo "Autoload not found. Installing dependencies."
    composer install --no-interaction --no-progress --no-suggest --prefer-dist
else
    echo "Dependencies are installed."
fi

# Check if the .env file exists, if not copy the .env.example file
if [ ! -f ".env" ]; then
     echo ".env file not found. Copying from .env.example"
    cp .env.example .env
fi

# Ensure the right file permissions
echo "Setting file permissions"
find /var/www/html -path /var/www/html/.git -prune -o -exec chown www-data:www-data {} \;
chmod -R 775 /var/www/html/storage
chmod -R 775 /var/www/html/bootstrap/cache

# Create the SQLite database file
touch /var/www/html/database/database.sqlite
chown www-data:www-data /var/www/html/database/database.sqlite

# Run migration and seed database
if [ "$APP_ENV" != 'production' ]; then
     echo "Setting up the development environment."
     php artisan key:generate
     php artisan storage:link
     php artisan migrate:refresh --seed
fi

# Run the PHP built-in server
echo "Starting PHP built-in server"
php artisan serve --host=0.0.0.0 --port=$PORT --no-reload --no-ansi --no-interaction --quiet --env=.env

# Run the default Docker entrypoint
exec docker-php-entrypoint "$@"
