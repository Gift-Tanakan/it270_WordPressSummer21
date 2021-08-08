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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xxxxxxx' );

/** MySQL database username */
define( 'DB_USER', 'xxxxxxxxxxxxx' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xxxxxxxxxxxxxxx' );

/** MySQL hostname */
define( 'DB_HOST', 'xxxxxxxxxxxxxx' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'xxxxxxxxxx' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xxx' );
define( 'SECURE_AUTH_KEY',  'xxx' );
define( 'LOGGED_IN_KEY',    'xxx' );
define( 'NONCE_KEY',        'xxx' );
define( 'AUTH_SALT',        'xxx' );
define( 'SECURE_AUTH_SALT', 'xxx' );
define( 'LOGGED_IN_SALT',   'xxx' );
define( 'NONCE_SALT',       'xxx' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
//try below -- from wpbeginner
//define('WP_ALLOW_REPAIR', true); 

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'www.gifttanakan.com' );
define( 'PATH_CURRENT_SITE', '/it270/site-summer-1/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy blogging! */



/*****troubleshoot about the file name and can't find the right path -- code from wp forum******/



/** Absolute path to the WordPress directory. */
//if ( ! defined( 'ABSPATH' ) ) {
//        define( 'ABSPATH', dirname( __FILE__ ) . '/' );
//}

/** Sets up WordPress vars and included files. */
//require_once( ABSPATH . 'wp-settings.php' );
