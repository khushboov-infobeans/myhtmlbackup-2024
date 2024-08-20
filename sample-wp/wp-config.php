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
define( 'DB_NAME', 'sample_wp' );

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
define( 'AUTH_KEY',         'm74T3aF0tc>F^k|YSe^BB_@}`O$(u;MXs.3V;/#/:]*dv]BW3D5+I9)p+2  {8yH' );
define( 'SECURE_AUTH_KEY',  '!diXYb[hp. (2q])ghe!{UbjbZ)<1ytsC#-BI@*)-)=9|,F}/q*uUJtU5N_(/v^}' );
define( 'LOGGED_IN_KEY',    'nzPlOSk;O|xPi7i.Ja Yc~O?.G>_z}&ygL/{<!|q2Cbe6r^?0sZ{7s`$CJi*),5w' );
define( 'NONCE_KEY',        '^qoOenQT#KR9+WS0{X>w0!|#3MnAzVvo` H;g{??joMbNEl6_wF2-WOvT,t07S3{' );
define( 'AUTH_SALT',        'hwPwq`622p&&OJ7I5:j-g_;[lBU?)GRKUsTDxXFPtm<DN$wagVBdG#Zmok6JIGP$' );
define( 'SECURE_AUTH_SALT', 'NTM!f:fS,A`*r*KLo{i+gA#z*I4A+c^M2> NTDtl8P>EVL7SKR9OPyauzdQ_NG=d' );
define( 'LOGGED_IN_SALT',   'O:k4|R3Xm(1KI}FL+$@GqvMIBFlYmQzs0-O3DCZ3*`*=O5r8W `wS1Q-6<%dly?C' );
define( 'NONCE_SALT',       'd0P9+P4)o>@,/&:F.GA3ae#1;]Ag},2GZ8t|t79Zaf{5)Yl=]y|^zSXpcN7dZ6,<' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
