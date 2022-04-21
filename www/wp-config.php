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
define( 'DB_NAME', 'wp-elabs' );

/** Database username */
define( 'DB_USER', 'elabs' );

/** Database password */
define( 'DB_PASSWORD', 'cowabunga' );

/** Database hostname */
define( 'DB_HOST', 'wp-elabs-mysql57' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         'KJ U#rE(@fN/~`#Xf.fJO}_-03atsqd;eJa*t/p*TDwQ5C%?g!o& rv&RO(bXFB-' );
define( 'SECURE_AUTH_KEY',  'M,ZJA7.REaRy4uHLHb,^)l|0!}3:!qNAC2^&((^oz$&Roa@SV]fy093+v)f#}1Pd' );
define( 'LOGGED_IN_KEY',    'LI6JUrbFDO(rgy80t?/}UK+K90} k;f.J$eK>y8qc#(Lv`YtEwLN`M(Gu0OH.~K>' );
define( 'NONCE_KEY',        ',>CPl0tXmIm08+I!3i)UYp##!$>x$d[qJ.aQjT.}PDWgFcA/]X8x CLF~5R^N?R.' );
define( 'AUTH_SALT',        '2:iH!PH)KX|7s$kf|nA:33qQnaqVA+nh[ZQAp)$kEGg~e_d`HSoc,iuY L&a!2w8' );
define( 'SECURE_AUTH_SALT', 'Q&=[)i }=eBORw]24pOV#kkG?3P]O4v*oXu|+@|/X5Zf*)bI#)~`wqgKrm?r/5aA' );
define( 'LOGGED_IN_SALT',   '9rVcK}>Y`^C Z :z*A:D&{-.v+d#GSBqqDIpu,Y=G2}}Fe@q,w:DoG|J$8s2Z#=K' );
define( 'NONCE_SALT',       't_-Xt=y5eSBnS6=JJy)R+BR//y^jbT16eVW3oJr| ^@;#e3jr@GjP4nMcF~3..1b' );

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
