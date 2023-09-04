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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'jgDRryCuYAvm3I2VNK6DZCFYt+ybZ9FAyMLIeEvl6KbjRibI4H0PFqhdPUjpzW6cK01n9MQhX6G+tZcaSxrWaA==');
define('SECURE_AUTH_KEY',  'Y+uQF39lM02c1QFugMAAA3pYcYmoxWecjp9lNvd9vmJnwUijPT5As1qqsCXzc3sFx1vlH+p4bNJE8jpg8lMcqA==');
define('LOGGED_IN_KEY',    'FySFU+XUe2eSksy1A2l4dm3vtLgN9gIHdESuH2qhV48xysiaOvj2rOlx/+DZM8v+PR26c10xffN6iemDLUPmGg==');
define('NONCE_KEY',        'BMXT3YIndepsew36YmECWZkWe3S5aLahp6shX2yhZvKHNZwqGg6zhE0XIcc40XEgu4aQeYVvx6uNFDcOufjtAQ==');
define('AUTH_SALT',        'kjqcTYjCJpC00m6EYpSM6AjDGvaXIG2imVrVefpJyj5lAXNoBBzyykbIZyv2trBiapmXkx8ml7I1vVY0++f4FA==');
define('SECURE_AUTH_SALT', '9HuSdRVxJ/J7EBirK5omGswFOT8j2kdmLKSYPEkHTAiyFkuGkwQ4Po/C9WoXLBZFfDrGCeCLEYfv1eeLryxZfw==');
define('LOGGED_IN_SALT',   'PZI2NnW27oQZztZhRSnbsHhNByKwL0+IJ7Lrh410V1euZYyE3nC82tEKEsP2t9S+yY80IegiiAs5FBaoLHYcCQ==');
define('NONCE_SALT',       '8bOnQvAxzZf0CAbAeSVSiEkjJ+R41o+IZ/+0xM8PRAPduYbYJD7ygv2tydVBJ4o8qXZHsqyqzjeGf86+c/7vmQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
