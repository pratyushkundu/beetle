FROM php:8.2-apache

# Install PostgreSQL client & dev headers (REQUIRED for pg_connect)
RUN apt-get update && apt-get install -y libpq-dev

# Enable PDO + PostgreSQL extensions
RUN docker-php-ext-install pdo pdo_pgsql pgsql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy project files
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R 755 /var/www/html/

EXPOSE 80

CMD ["apache2-foreground"]
