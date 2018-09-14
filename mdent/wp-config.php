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
define('DB_NAME', 'wptest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Mkgxl)M0]@~1dL1d`Xsyk`eUBX?fr28K8:Y>DMbR2@z&)(oU)=;3Xu~`>ebxk+!M');
define('SECURE_AUTH_KEY',  '!!L*/}79z)qChym>T4D$QgpR4aQm8[VabBN@twQz#vQ# ;lRnqq6h%B&Y.unB+O2');
define('LOGGED_IN_KEY',    '_O-SADj|^j$C5DD`(WmM9^MF_H-aPp+99i0[Mp46FFCe##}VnOz@S{T}b^~bQM^B');
define('NONCE_KEY',        'E,Qw}83<)KKX]pe;vO#zua>VYYUUQjz5!H{]OCj]_SB:eSxWEK+IkyF{Mwc|c8jQ');
define('AUTH_SALT',        '^uA`=s1n k-ZpQ%fFm]rT8.2nel/,,<$ZCYjOVuk.,igql075w%krRMZcid8C[zH');
define('SECURE_AUTH_SALT', '2_GGAv$F&Ad(yHKTw@fyZVeDVenA%[kk]gV8a`3XhALuZO!RmaYnq6D 6?=]!f5d');
define('LOGGED_IN_SALT',   ')g|-`WsR|r;am1pFwzC7Zb$@a/y)S-!&dj2N3XXh7t^dkTz?R|AG#-OOHQeC/Zbc');
define('NONCE_SALT',       'ptrVcC8C?^-wW5P@+3i,q=6ECnHJYP98,JRCKCQV,ibDs[o+c?V,1m:}!+CX1&~M');

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
