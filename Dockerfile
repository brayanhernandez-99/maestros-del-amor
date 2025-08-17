FROM php:8.2-apache

# Instalar extensiones necesarias para MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilitar mod_rewrite (si usas .htaccess)
RUN a2enmod rewrite

# Establecer permisos para que Apache pueda escribir si es necesario
RUN chown -R www-data:www-data /var/www/html
