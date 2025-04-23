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
define('DB_NAME', 'wordpress_fe9');

/** MySQL database username */
define('DB_USER', 'wordpress_92');

/** MySQL database password */
define('DB_PASSWORD', '$UOk3y9Ut0');

/** MySQL hostname */
define('DB_HOST', 'p3nlmysql23plsk.secureserver.net:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'M^um9oidB#!k3B9S3@%UqBJqUs&GOGOVuZ#T3kl1c1PMv#moG!d5F#&Admi%P0@c');
define('SECURE_AUTH_KEY',  'I%!#y#p3Hcb3%Xcej%tZ0fdyjQrBaKWiSWy6sBh)M#MDR#SGZ1kgD#J2k&^Rm#@b');
define('LOGGED_IN_KEY',    'YY!wSTVvGLgIcyQjPA#5rV7Nw9o3lCyReK2ewHKyBksQp(w6%UoUF&7iY&jk4%6e');
define('NONCE_KEY',        'Vbj3(U%c%Qm@2B!Pj8Q&x2V&6qmvvt5afaT4lvGuMZ6cQV0mv6dOJ(tZZGD0v8nA');
define('AUTH_SALT',        '(hQUUesprz^@ioW#7QU*M7V8oslCihNtn86WjTl1t8aStfqEtFeskQ#TASi3(0lr');
define('SECURE_AUTH_SALT', '%XRW7OHUvG4jC5)O%q8XDa6ClHGhdrM(o!Qg#Odg0OxR(Fk)K4VM5)HX)D^xj293');
define('LOGGED_IN_SALT',   '(PkMgW)6HFyu(ifp%(oqvSQi1G8z5Tuuj*YPEuTPxf6c1U572pLD@yEOrcQgjVb8');
define('NONCE_SALT',       's9js6IGbOeHlDOoWbiF84741NKEU1Ew7tyH*c(k^#bNl%rl5od4adOF0%MWXmD&F');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
