<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //


if (strstr($_SERVER['SERVER_NAME'], 'ucf.local')) {

	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );

} else {
	define( 'DB_NAME', 'dbpgp6k6a7mjtb' );
	define( 'DB_USER', 'uryyy8xn8qqqk' );
	define( 'DB_PASSWORD', 'Gilisinai1' );
	define( 'DB_HOST', '127.0.0.1' );
}


/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eVCNYXoHRmhUWUvbV3XxLttIH3nUpA4g5KrveT9CYhhma29QSo/FqWall0y9h7CDlzXB9Z8QM5cYg0Tx8KfR6Q==');
define('SECURE_AUTH_KEY',  '+KXvWKMLS4PasAXEb3aI6yk99l2cTXy80HEY5C0ELYsd6Tdu2iD4L3HElzS+ksZ4gmc7oZzIojbKkypNZOslMQ==');
define('LOGGED_IN_KEY',    'wySL37u78EDKsyWQQxeaWlQOJ5HWBwmqa5BIN0r5Jij5fu11dXSYVbBhGYiwfo8Kak0MqXmyAMAJtamj4649SQ==');
define('NONCE_KEY',        'goy+BAojwPgqA6vtxIrAPTIvPY5d0FhpC8WTCMcF1GE/yRMAW2wbqXCM1KD0JDidww8HeF1NWtU90l6QnQUcvg==');
define('AUTH_SALT',        'oL6JEedtUiAvr8Y8MEQS9CGbuo/jj680VMMooqFvkZod6JSc6nWeckMxtWOUrgqe3/yoJpBkZiS322Fpj8/uCw==');
define('SECURE_AUTH_SALT', 'Fcr8fvZ2WS5OKvEcb97vt03j6dW9GoI3w96FJqLafkLJjRCzm/jiXaCYrGbYVU3Tsa1Kg0Ky1RzAE44HYOsDEA==');
define('LOGGED_IN_SALT',   '40XtHdZWUQF0VLmUItBRMQXzhrLqvCJ6UkKQopF49Ludb9T6GACB66uM+W/gEjMnYBuNDdBuTrGo5ZeIrIfAWQ==');
define('NONCE_SALT',       'VC+WowR0631ovOcku2KwcJrE9wT7/PEguqGQJVBhg0jr4nQO1O78HrZuHFqu4yQMiSVcnp1FahW2k9alBtfHdQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
