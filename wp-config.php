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
define( 'DB_NAME', 'mysite' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '(2+yV.iTLERUHF9;)UpNm~soWF^T^=%Bc]#l+M$5mN^b{s6|xN?MwIW>`L*ZTjh0' );
define( 'SECURE_AUTH_KEY',  'a)>|)=%ALdtuv=Z{uTBU{FV>SqsRKY=tR[Cy]nwgvGutwLj1!d_&PQ`j k>MmN_(' );
define( 'LOGGED_IN_KEY',    'y:4aM$2l,Dzvb`T0)b?l#T#$x{8gQu9KEKXqF$}hpuy;B12^w4`. #<6FAp2@y e' );
define( 'NONCE_KEY',        'Y35al;nd+/))0KMye`Y:wm;wyW;/-f(P5sg95ynX)[x7%j D4_,!t]}m]*iiRirW' );
define( 'AUTH_SALT',        'OEP$~S$zKLVY18}Bf TeOs>Hi%SX;SwzQ[mR9!hrB.BJ5e<^4XB#q[h_zGn76wBn' );
define( 'SECURE_AUTH_SALT', ';Zw-ejyj3JGYHM=;OXf%v=Q]PQX-9[qe~|ve}DH?Fq?!C=bS+;]kb4woZcu&.}3Y' );
define( 'LOGGED_IN_SALT',   'a SS5qsqs+87H_nf.X6G,M]GsLNIJM0^KdKwfWM~frXC;n2)la9CrI/zH#nyUx^T' );
define( 'NONCE_SALT',       'de:C|LO{.e}3yU [a(B~VSFl5DfAxR5)`wUH=BqC-|cZ;BC!)a,^([{Un-]8ALWY' );

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
