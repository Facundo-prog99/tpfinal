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
define( 'DB_NAME', 'TPFINAL' );

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
define( 'AUTH_KEY',         'D#g?pL4AXc]7lA`1?@]63zr3w =Cn&4{S1`A3A5v={.;te*DF=HPSYn1?M=xW%AN' );
define( 'SECURE_AUTH_KEY',  '.Z7h_scc~^HLV} [hpa-W_-~Ofr6~Qx_cfw{T3sa/-WZB~(,MvH/ROfc4n&J<1zq' );
define( 'LOGGED_IN_KEY',    'ErLSJ@H.8WGH8Z$vJ[1W)$>#tb{Ho2POC).$;<.td0[) FXST9<SH}F Lq17:l-M' );
define( 'NONCE_KEY',        'i6<(7UAK^4fVY;%$^#`uSSMU:G}#!0/qoA?VgBA1*A5$DP%xtTW:t*YH#gRXQaf|' );
define( 'AUTH_SALT',        '/kS23upazQTg?Hj8)8&</DK5([5s;Z2^r0#$V2<&/bTq~BF+3Pa7x2j?;YH0?[wD' );
define( 'SECURE_AUTH_SALT', 'VucB$`q8Xc.}c,+2Iot&OA0&u>CqfM5DpZ/23M`i:wg07S[GEVs{Yz4=Dj]PdAOG' );
define( 'LOGGED_IN_SALT',   '-br/&ITm^p&]8Kg$,0$-*V.L+e]Wu>HN.cj&r{2,n#i@E6RYsJ~G pHE;kiIc4T:' );
define( 'NONCE_SALT',       'VZ#!{y*E2V( QG][{ne:&1n5$bLB4j*{2t3F3oSM6z6uww?ZIBocaQ*)Iz1S$!^v' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
