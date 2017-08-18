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
define('DB_NAME', 'elise');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
 define('AUTH_KEY',         '8vS~=qhKq*aF|O-D^C_d7A8DZh`YSI-T`;0~#Cp@JP|j~9*Pu-=<NK*t-#IQI>c^');
 define('SECURE_AUTH_KEY',  'Zm=4c7L HJX$ZtZ&ss)#3zq.h&pzSt{N}+d<<R?F;7-yDknWWTg|W95j;D-C},zx');
 define('LOGGED_IN_KEY',    'W*:4Gq`pjLSGJ^i~d(+J<i4je~/;!6D&2tyf`+Tx !J-cr#v(i-*W]$Z*&iWCk99');
 define('NONCE_KEY',        '%3:^IS!ZF|w(ZZ@j8D1.X,;FOtaXCZ!m,D^`XaKH_k4dv71P:+>Nzk)-Fa9GF:nU');
 define('AUTH_SALT',        'P/BsO)},:hSoq>!}eh>}auNCF8j%1ZyuNrMz<}U*N6u>gC]s*DSH/8Q4g]6u[@cl');
 define('SECURE_AUTH_SALT', 'lr.Rv,4@Nm5G]n-V:lK+;(l1;^.SeW8HYen:UGYp_,y1H)U]A#d&xN_}o4*h=usX');
 define('LOGGED_IN_SALT',   '8m@L@Rr/w6xI6909V(d20bY&W 1J4 )klCMp6nS|k=U3Y!7DX0~Am|1yrD]r@*[y');
 define('NONCE_SALT',       '5^AI;bxnv<xoET6_+p<}+fw-+Wi[{$*TAkbe@MgzUv/H=^YLU/dcvp@LxYhquX`2');
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
define( 'DISALLOW_FILE_EDIT', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
