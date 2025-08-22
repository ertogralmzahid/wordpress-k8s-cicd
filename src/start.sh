#!/bin/bash

# wp-config.php'yi template'den oluştur
cp /var/www/html/wp-config-template.php /var/www/html/wp-config.php

# Apache'yi başlat
apache2-foreground
