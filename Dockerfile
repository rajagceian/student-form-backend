# Use the official PHP-Apache image
FROM php:8.2-apache

# Copy all files to the web server root
COPY . /var/www/html/

# Expose port 80 (Render uses this by default)
EXPOSE 80
