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
define('DB_NAME', 'flora_stage');

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
define('AUTH_KEY',         '9,/FI>S_J#&[Z+!B8On[uY3A1y7u2(hZ5tzMk)Z.Y:RrgGP>ygoQqngZw|(HB`l]');
define('SECURE_AUTH_KEY',  'SPCNy&79DSmAXf:PoeN&5{FT^>`+CmB?/@}4CZ{_SBhXs7N97E|nb|:i V1O%ElT');
define('LOGGED_IN_KEY',    ')T5^8q;C3<u<(|t+3yX642hOl). enQ19P/9S,$y@,&|x4Rl{f?Y~3GA?W{]{q2O');
define('NONCE_KEY',        'b))t[*gJ@ e]=k.1b:-:JK/K+n>4=+/o9_$r3^f_jt>;Bef~ad2~LLF%Lx=6S$1M');
define('AUTH_SALT',        'HOH|u#5VpiKg:q-(94NF(si}t,K1 R=cly@$P-=xaNO2!g$Hy+BH+9TQRPbiRfba');
define('SECURE_AUTH_SALT', 'AuK%(NxX VW1BwYwA^s,wZr&C}{*^M=eL]xR,mG4u*CF[NyQlw`gK/y`k}X-X43L');
define('LOGGED_IN_SALT',   'SlxS(}yNicY+38vSq)<L*?6LB1SVu!lBz%Q:>M1RqyXmV!mOxSJCY[#qpqL;%8]@');
define('NONCE_SALT',       ' 9`uHQwhM6NvR(R=B$Qt&Qk*`_t`uyp==ic-:M.*`,INN^nIgOpCX0vA|(p+Ni? ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ca_';

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
define('FORCE_SSL_ADMIN', true);
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
