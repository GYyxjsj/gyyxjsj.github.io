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
define( 'DB_NAME', 'www_gyyxjsj_eu_o' );

/** Database username */
define( 'DB_USER', 'www_gyyxjsj_eu_o' );

/** Database password */
define( 'DB_PASSWORD', 'qq200538' );

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
define( 'AUTH_KEY',         'g${&$3|iWfgDHaNAy3_`}p}bs^/QKt/?0cg)$k&v@t!`XPqNZIp}oubn:PA/PO`@' );
define( 'SECURE_AUTH_KEY',  'ok6<$djj$DQSfa.tLi @{pa8%i_B|&7V1llyaqh:.1OClj])F_Gc%ky[eqdn>2<t' );
define( 'LOGGED_IN_KEY',    'uzb{>TvW@,yT+!d.u{?u;RYG^Scc>x82<ODG7N0+zi?6$2F#g^P`<U8&;:([cO&9' );
define( 'NONCE_KEY',        'm-Rjt@&S%Lxu)XA,i+ A*<am&o%57?4jA.p|M!kX@yHUdP}+E9*nu4XPU3e37?G_' );
define( 'AUTH_SALT',        'T31k!odl|8BkVSVmN8f$/s+<oUbdVL-PD`tJ$-waDt;P=pg-DO,-Fh(s~PO~*Pv/' );
define( 'SECURE_AUTH_SALT', 'Yq|1>Ep%z#(m+@|J;78Mj2LuzFuiV,mv4n<|FrIjAH<[dCSA+oJ_9r>5!mH[=#Hy' );
define( 'LOGGED_IN_SALT',   '|{KS3(}`+;(n^hYJfa=zjEPyWebsi(7KKK,#!Ih?Aw=s8)i6 0{m%~u/q0>^B+V$' );
define( 'NONCE_SALT',       '3Nw0k5G:0If>X)cf#ETFm>>hq9xHm:3/!a-UNu_5KRQ>v#P^; {z}*8eTkxO<F2l' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'GY_';

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
