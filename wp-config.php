<?php


  
define('DB_NAME', $_ENV["info_wordpress"]);
define('DB_USER', $_ENV["info_mynewssitepress"]);
define('DB_PASSWORD', $_ENV["z1kxf97CGb+3pClB"]);
define('DB_HOST', $_ENV["DB_HOST"]);
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');



define('AUTH_KEY',         $_ENV["XAUTH_KEY"]);
define('SECURE_AUTH_KEY',  $_ENV["XSECURE_AUTH_KEY"]);
define('LOGGED_IN_KEY',    $_ENV["XLOGGED_IN_KEY"]);
define('NONCE_KEY',        $_ENV["XNONCE_KEY"]);
define('AUTH_SALT',        $_ENV["XAUTH_SALT"]);
define('SECURE_AUTH_SALT', $_ENV["XSECURE_AUTH_SALT"]);
define('LOGGED_IN_SALT',   $_ENV["XLOGGED_IN_SALT"]);
define('NONCE_SALT',       $_ENV["XNONCE_SALT"]);


$table_prefix  = 'wp_';


define('WPLANG', 'en');

define('WP_DEBUG', false);
define( 'WP_AUTO_UPDATE_CORE', false );


if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');


require_once(ABSPATH . 'wp-settings.php');
