FROM php:8.2-apache

# Instalar extensiones necesarias para MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilitar mod_rewrite en Apache
# Habilitar SSL en Apache
RUN a2enmod rewrite
RUN a2enmod ssl

# Establecer directorio de trabajo
WORKDIR /var/www/html/maestrosdelamor

# Copiar certificados al contenedor
COPY ./storage/certs/maestrosdelamor.crt /etc/ssl/certs/
COPY ./storage/certs/maestrosdelamor.key /etc/ssl/private/

# Copiar VirtualHost y habilitarlo
# Habilitar el sitio y deshabilitar el por defecto
# Permisos correctos para el archivo de configuración
COPY ./storage/virtual-host.conf /etc/apache2/sites-available/maestrosdelamor.conf
RUN a2ensite maestrosdelamor.conf
RUN a2dissite 000-default.conf
RUN chmod 644 /etc/apache2/sites-available/maestrosdelamor.conf

# Comando de inicio: ajustar permisos de storage y arrancar Apache
RUN mkdir -p /var/www/html/maestrosdelamor/storage \
    && chown -R www-data:www-data /var/www/html/maestrosdelamor/storage \
    && chmod -R 775 /var/www/html/maestrosdelamor/storage
CMD bash -c "chown -R www-data:www-data /var/www/html/maestrosdelamor/ && chmod -R 775 /var/www/html/maestrosdelamor/storage && apache2-foreground"
