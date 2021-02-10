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
define('AUTH_KEY',         'ZfCsukcaJfjoIQkx35nenMPrRElxqDXaBz2H+t/GiusGZV4OnPgO295wCTtMhfpjyhJ+PfQKQ6RmlXpwg4mhog==');
define('SECURE_AUTH_KEY',  'Sy4O62UjZsORFxUzdNqV++DXnLpzqP4qy8ZEHIaebuwGKHitmRwk31hby/10j7kcaZ/LWftbJ1LY0plMPJjQkA==');
define('LOGGED_IN_KEY',    'GrkvX/W0rdJG3XLqTNNn27Yx67zurwhIlX2ViCzbxxPZg2fLL1ZAgoNfPnJAUXdSCfo3qgYAIwsi/5V8avmK/Q==');
define('NONCE_KEY',        'yst+K2JQkExbYUHvSz3bQYpVL327dWABBv7BwqFON3Ti/meHCaL068LeFUUzzhI/bKjF50y0AmIf8d+Zp146PA==');
define('AUTH_SALT',        'xTNYvBuX3/57uP8sgrr7mt/YZ+0P/0roYIQJLsuSHV5OC36AZpNgRXHio62qvV3kHTWIisWID7cJZkTnh//AyQ==');
define('SECURE_AUTH_SALT', 'lAfE4zTJ+yc1v/WS5hHoGdWtlG2YlHoPEXEJWNr2QuMDSrrghLTi88WdO50i2uE77QZlHu+XAEY47FX2hsL+OQ==');
define('LOGGED_IN_SALT',   '4eCuCoMAWbqi1JWOhTvIjC42tKiPm6FByyeTaQJcjjfN/Ae98LBrreSUrdN0vJfLNM+VhP+97pShnPsAiwFPWA==');
define('NONCE_SALT',       '6DOUbApNJlXCTV9Yu+9ZJ5qKK8x2+3C3kOStb7KGR8Mk7xm3+abjv0lOfmJitbk2Qb4c7m5Vv9kop9N2478wgA==');

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
