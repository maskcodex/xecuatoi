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
define('DB_NAME', 'xecuatoidb');

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
define('AUTH_KEY',         '+~H;8zzu:4DJ!gH;RsmUu3emA><swP-C5>38*oP3.}>FmFaOSJtE?cvA-F/-o*ZK');
define('SECURE_AUTH_KEY',  '=$B#SZkW-JMI*}-HSUX^W4NJ#+exRI^st1+xR#R4{m_qWYa[B}-O|AIjgG^i~w[?');
define('LOGGED_IN_KEY',    '.N&b; 8r8Ldfi6U,Uhv{932Q13$LO`9zX6F]`{6V<9kz >>,nE|`3*/d-N#AOfW!');
define('NONCE_KEY',        '&NGzXB> jx+c+cvKgbdTx_RP! ,$)h;!:-|+M;l7CQ&u.Nb2q12d#-16xZfVM jf');
define('AUTH_SALT',        '-a)j*IM`+bCy2:Kiz?=7YrKT)mM9fD*XzGE}7%*K|WJs/4IcscPzplm/Qx]-3ZhR');
define('SECURE_AUTH_SALT', 'N)B*)fnjS=9Q:q=0O&!B-iv*TW* -.XDvlm8362+R6qFdi4J081H{=r<7tb@py$!');
define('LOGGED_IN_SALT',   'fY-j-dMKbMWf707|ZpD1O7:|N/AJ+4L:jlGI#_RCPG@uEDE#[gN5@u(WoqX?^MY]');
define('NONCE_SALT',       'Vp_J1*~7Rz7/CDPks],:;0%Vfjf$^ r:c-F}h>?o$_5Y#Vmg,_u4hB-8H@~N:ml!');

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
