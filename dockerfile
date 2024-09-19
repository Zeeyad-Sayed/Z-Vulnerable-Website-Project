# Use PHP base image
FROM php:7.4-apache

# Copying my project to the web root directory in the container
COPY . /var/www/html

# Exposing port 80 for web traffic
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]
