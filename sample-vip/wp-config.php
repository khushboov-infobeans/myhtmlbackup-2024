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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sample_vip' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'server.123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '::5oi~n2J?lb>V|*C`Z#7vP0z^}YHl%A~Ta(  mFxp474&g[!U4/t]u2`G6& -Jw' );
define( 'SECURE_AUTH_KEY',  'EUb5q4BCmZ($Hcg_MxZv`<@lNMIl5W=?]](Mh33m;+}c5N90`+?Gjg 03fsA2y|c' );
define( 'LOGGED_IN_KEY',    'ym?NIk9M{8_s/?Wl;+X%c0KgdEq :1Wl/z`Y)bm}-`(:T[p+Hh.JeG@zSQL[HTh@' );
define( 'NONCE_KEY',        '8{cVZ9&+MaF<!/n^>TcWDJkjr-orzY&pT}#p5I7AV>lw^ %^f2.s*v#N9R)>kW O' );
define( 'AUTH_SALT',        'I>uaV[HD}#$>TI[)r[@O/t(Q=q T#)v<2<^jb(n~cZj:-QR@_4.s (8,y8xx&6(3' );
define( 'SECURE_AUTH_SALT', '%KDA*js ?DU^le_QZt9r?UDqbj_F{$myz+tc+DNrb;0ykfcu9=FP%1QVy53NP UV' );
define( 'LOGGED_IN_SALT',   '+d`1G%/01mQ;j~%Oe|mOkP hEbl%pT.g]YD0>|^F=SJ)0r(jG&Qhhe]@ 1x|Wq p' );
define( 'NONCE_SALT',       'JIO#s9Q ZkzG%[kg]DXU2`XCasB:.IGAQ:>)Ff:/o/T:s~FzA^x<VsYW2>UUBWR#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vip_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
