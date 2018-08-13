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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'V8tE29RWVWVyUAkoHfwt3rnpiYA/Zjweq//obn2079drput5tmEood+e6tQbJU+RCGrl+JBnt7aLn+E2ju1w/A==');
define('SECURE_AUTH_KEY',  'kGc+IqKMvuW9KZ7JzqAhj//iwzxLT6bCClYl/vVCXnVG3qEZCOq5ELW2q03qcf0JcuKNZYjJZTMzKK/Fmlt1bg==');
define('LOGGED_IN_KEY',    'VpHvxCoRNszFZTkHV/s3/qo7ar7epcsHTRe81OPQLukx9QoxzVDci8bfAxhRX/0ty7FRoox5LekY0vQ4CQ4+1w==');
define('NONCE_KEY',        'iKUL8KdWLzSnbPyxZVn6mAKLZ0JiximFj1AbyU6fsGc9Yu3pETa9m5fWND4UPnSSmvsaCj88T3c1VQ9dZf/Y2A==');
define('AUTH_SALT',        'oTU0VL/7WFNRAJ0by9I95Pi8VpCUX6XeS28s4Sktal3HX2oaVrUv1Rw0n80eo34IpPGeWa0m8CbUu2IdUrYH0Q==');
define('SECURE_AUTH_SALT', '+sJOqajWt84hEbqI8K275i5R5cK6cAZ09eHP4a27VX9EvrUa4b3xx+xoKp/vucxhazjnSbE1Io1h7eSbsR+6Nw==');
define('LOGGED_IN_SALT',   'F6p1azG0+Kf9J5LqBNAeQv0D6mnIiN+aib0lJyW0PP9eXryslov9GTDOfonGSjf3JhgIKvTsWc4uT85MJS+hmw==');
define('NONCE_SALT',       'EVlRSuj17KVOMVr7GXj8wT4HtGlxJEmDrGU+QO4aQ0d2hKHNxoHEB7SU+W1e0GmVXvrWB6yOqH1O/OA8hgfoOg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
