<?php
define( 'DB_NAME',      getenv('DB_NAME') );
define( 'DB_USER',      getenv('DB_USER') );
define( 'DB_PASSWORD',  getenv('DB_PASSWORD') );
define( 'DB_HOST',      getenv('DB_HOST') );

ini_set( 'display_errors',  getenv('DISPLAY_ERRORS') );
define( 'WP_DEBUG_DISPLAY', getenv('WP_DEBUG_DISPLAY') );
define( 'WP_DEBUG',         getenv('WP_DEBUG') );

define('AUTH_KEY',         getenv('AUTH_KEY'));
define('SECURE_AUTH_KEY',  getenv('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY',    getenv('LOGGED_IN_KEY'));
define('NONCE_KEY',        getenv('NONCE_KEY'));
define('AUTH_SALT',        getenv('AUTH_SALT'));
define('SECURE_AUTH_SALT', getenv('DB_HOST'));
define('LOGGED_IN_SALT',   getenv('LOGGED_IN_SALT'));
define('NONCE_SALT',       getenv('NONCE_SALT'));

define( 'DBI_AWS_ACCESS_KEY_ID',        getenv('DBI_AWS_ACCESS_KEY_ID') );
define( 'DBI_AWS_SECRET_ACCESS_KEY',    getenv('DBI_AWS_SECRET_ACCESS_KEY') );

define('WP_CACHE_KEY_SALT', getenv('WP_CACHE_KEY_SALT'));
define('WP_CACHE',          getenv('WP_CACHE'));

$table_prefix  = getenv('TABLE_PREFIX');