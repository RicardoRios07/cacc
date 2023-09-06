<?php
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cacc' );

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
    //  define('WP_HOME', 'https://6d49-45-164-66-53.ngrok-free.app/cacc/');
    //  define('WP_SITEURL', 'https://6d49-45-164-66-53.ngrok-free.app/cacc/');
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
define( 'AUTH_KEY',         'Gq08CB79zP3mD7uqYCFNiWof6cw6RctoS0820osZAenoF3P2VX4rgYA3Kclrpz1d' );
define( 'SECURE_AUTH_KEY',  'XUnr8IHXX7aAkTGbvZ2zhFXQOSDq3ejDGMnKSje1a8dVlt7Ps2wEN7lfGv6MFiEY' );
define( 'LOGGED_IN_KEY',    '0TAxqTM0co72J1a5H9IfPMLR29o2RF0GfX3VqqrFIWuKLCKgaw2rA92nTwXJRR0R' );
define( 'NONCE_KEY',        'sdaWlEdbEkDPc1AtHUCoXnVjTWhWuTEEt4uazipNicRQRPTbDr983CtW5hiQNjbf' );
define( 'AUTH_SALT',        'Pbqs3HlDdzVQdrt7BvDhoIfs82J12xv4w0mru3LbRag6NyNlY4xLiPicKTTx7cZT' );
define( 'SECURE_AUTH_SALT', 'Hq0887YsCiwnzn7JHBv7a41jZiFlOq25aZuYJOdutQ1towIqkfj10Q99lpoSpFYA' );
define( 'LOGGED_IN_SALT',   'NuggZ3uKpDR6iQmIXxfuXuSa4w5JMJdaIf48Ka2E82oRTRMleoDzopNyEYeKvbFG' );
define( 'NONCE_SALT',       'huugEK9zPQUWhWqbDmDkvqOh7nQ5btqXdj4svM9fMv27pmlHnJJPzjIdUIv7QoZk' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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