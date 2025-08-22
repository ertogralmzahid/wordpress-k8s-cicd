FROM wordpress:php8.1-apache

# Custom theme'i kopyala
COPY src/wp-content/themes/my-custom-theme /var/www/html/wp-content/themes/my-custom-theme

# wp-config.php template'ini kopyala
COPY src/wp-config-template.php /var/www/html/wp-config-template.php

# Startup script
COPY src/start.sh /start.sh
RUN chmod +x /start.sh

# Default theme olarak set et
RUN echo "define('WP_DEFAULT_THEME', 'my-custom-theme');" >> /var/www/html/wp-config-sample.php

# Apache user sahipliği
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

CMD ["/start.sh"]
