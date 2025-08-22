<?php
define('DB_NAME', getenv('WORDPRESS_DB_NAME') ?: 'wordpress_db');
define('DB_USER', getenv('WORDPRESS_DB_USER') ?: 'wp_user');
define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ?: 'wppassword123');
define('DB_HOST', getenv('WORDPRESS_DB_HOST') ?: 'mysql:3306');

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// Unique keys (production'da farklı olacak)
define('AUTH_KEY',         getenv('WP_AUTH_KEY') ?: 'dev-auth-key');
define('SECURE_AUTH_KEY',  getenv('WP_SECURE_AUTH_KEY') ?: 'dev-secure-key');

$table_prefix = 'wp_';
define('WP_DEBUG', false);

if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

require_once ABSPATH . 'wp-settings.php';
?>
