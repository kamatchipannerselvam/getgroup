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
define( 'DB_NAME', 'getgroup' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'qsh+j$:K&x.#H)=g@$]V7+14Zp^9HLm`zDeI/<2K9<+o*H#O/XC%PTk>y<iepMx=' );
define( 'SECURE_AUTH_KEY',  'Uo6^coOyjW@GKGo2; Nl,F7|.5Op%vTXlJXmOKmyd!lv}L1GGSzn1Xpg#ts7@.H:' );
define( 'LOGGED_IN_KEY',    'f|kHYc~Od+F@4cGk&sVc(2Hzf~NbCZ8#Sv0&t.~8K%Z1zW:5<>=+F+o+!ZEf(rE@' );
define( 'NONCE_KEY',        'Z6Kh/^gYyr8oK_gW=C|_`mwJQX;$#;,+?9n<e*o0xbyL:x7Tw3 G1hL;XxrBle1y' );
define( 'AUTH_SALT',        'HHcjhV6[wP5+lQ.B_9(zuM%w%._S9S<v5(&33)6~?xo|8>8Ipln!t(lB7]YDZ]gU' );
define( 'SECURE_AUTH_SALT', ';:|mr&8g,L0vwP-^|rl gj;^2<{GV^EdM:V Eqfe:q$X%o/RxJ|lsaQC>Xr%KU=R' );
define( 'LOGGED_IN_SALT',   '/hU8fH]uoQy.$FhS[ooYW/}J&)N{Ku w_`n2MJlo6X97|/3R/ nwf6 rEk;t6wZ>' );
define( 'NONCE_SALT',       '-|_@yqT7VG+hD!=to-d=RYMy=X!q*zrP3`lgc`jP md[8;-jNk%5|~?vZJ2X&]+l' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gg_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
