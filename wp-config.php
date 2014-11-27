<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'oX+y8uY~tSF;TuIH=!ne_.@hvNmU}.;-aU}A9X.!Azwt*8XVanI@(Zoj<?GSQbRt');
define('SECURE_AUTH_KEY',  'L&4U#//p~qczqXGmREBXc;T8_jy0a[g?h*:D9C=kc|9.#N%GA0MFlxa2s;+i:ii1');
define('LOGGED_IN_KEY',    'I79]*X@6NkE(n]4*>,u&p+%}C^RrOqzBT{JD)&.7DM4WdNs^sH$l!.8{-$Qnv~_9');
define('NONCE_KEY',        '/U+(y#<^{_.2u.r;yu{h>z/.$dWB70^!Ep7{9O[^FI=4TnOtWP_4h1MN1[%`IVe|');
define('AUTH_SALT',        '/#W:y51kp>Z#qsqju&8GhK~|d$;:Nn-5F0B(J`0:EWW7{nT1*Jv6D|Cm+kc?=9X$');
define('SECURE_AUTH_SALT', '}mu$-yA@8!`&1IFPrymMZ8-2c1Kwy)]|hhor>5T%A[Z~S2?VvsgT+b$pI+{[Y]~J');
define('LOGGED_IN_SALT',   'KMeh|&vEl7xJ$|#T&WI--Zmjj=w3!Er!r |Un1G5mq9x1#(`(ASo-bl=iFiCs>Az');
define('NONCE_SALT',       'eGfy%f?_f8#CJ=v-4-w]d-jcU3xk|1HOJQ>%(D^=1?,i#|V/vn14S>KvDK9*6D$-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

