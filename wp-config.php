<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Mateo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zWVPSHpBTpOb8KTj88ZbgsvADblEmz6F5OyhohS3P5oPZHN7uxwGRoaqXexhd2Bu' );
define( 'SECURE_AUTH_KEY',  'aaEBCAtN8eiiSHWmKxaP3X8lGQhfz0fWMLkFrxpok7MMujNgoUIrkyMPu2DdnQKr' );
define( 'LOGGED_IN_KEY',    'Ov8go4eGJn1xx7YFRKKoof5qIqNtaDnt891yBC09MpxCvYvPaOrXsOIBFR0sVYjw' );
define( 'NONCE_KEY',        'ykC9mswbvuSzv0IRkc14d0N5gpEq9KwbGYhZYwteeNQ0LWRLKf8TjaJrAZw4xh2v' );
define( 'AUTH_SALT',        'mPO080u8oUyM1EViHrmsjOHq9F5y1fZk6NXt8ibzGTdPRrWVco7MZf8ZYY9fx2vJ' );
define( 'SECURE_AUTH_SALT', 'gN2m6NZGrioNONQCpUmYQ6nmvkPpemtFI4gusTth959eceFst526oqAB8gCOAW0Q' );
define( 'LOGGED_IN_SALT',   't5Di3UVm2faKk96aDsUbR7VQxmo41vCeubBFKTHbCOglIF0b8fq0VdVLIShgu6Ef' );
define( 'NONCE_SALT',       'QvYzYg55RuTHHyvP82eeBtqBp5RA2F7rjJWq1zSH8l1jiV2vsG6A1PIGwE3FQQ7N' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
