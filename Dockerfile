# Get official PHP image with Apache as php83
FROM php:8.3-apache AS php83

# Install system dependencies
RUN apt-get update -y
RUN apt-get install -y libzip-dev zip unzip libpq-dev libcurl4-gnutls-dev curl

# Install PHP extensions
RUN docker-php-ext-install pdo bcmath

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Configure Apache to know the server name and enable URL rewriting
RUN echo 'ServerName localhost' >> /etc/apache2/apache2.conf
RUN a2enmod rewrite

# Copy existing application directory contents
COPY . /var/www/html

# Copy entrypoint script
COPY docker/entrypoint.sh /usr/local/bin/

# Make entrypoint executable
RUN chmod +x /usr/local/bin/entrypoint.sh

# Use the custom entrypoint
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
