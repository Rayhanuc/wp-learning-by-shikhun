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
define( 'DB_NAME', 'wp-learning-by-shikhun' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'Y2oUZ&}T8*q^IjW+Oa6/Q(V=:|odoDZ@W3M |H<>n&o]f:7+f Yj^H:?@?XMh55|' );
define( 'SECURE_AUTH_KEY',  ';GBf~wAMM)1Xh>%vg<zTBiX^a?X9sfCmfj!BiP3z(M_EKkn<=TJ]FB}Kbm,Vl2:K' );
define( 'LOGGED_IN_KEY',    'M-R(Z=?P9Sfn3Hg?!4@r{R6RvThk^`/Up#w&S**?3P]l;$VV2#ES5g?zqL_c%H*{' );
define( 'NONCE_KEY',        'w2OD~M-.&SOpyRtze?&qZ0~vjv||G<HGs[8T9;PFD98WDc`6``S]uXzn|f{8)(E?' );
define( 'AUTH_SALT',        'X]gQkX#:y8PLF#/Rq<H.6=4okAdr`.P)LT<QzFc`EDNdRcp)5mRS.zNWQ?eKbh=5' );
define( 'SECURE_AUTH_SALT', 'QOhSx~H_INCx;^hrG7M0)~dI@Y#umoP3}[L85R&bF=eJ&MvVov=ZvQjpQzJz=Fq_' );
define( 'LOGGED_IN_SALT',   '{^1pa-<EnLKOMSePv:Gn:YmHS@KOu[F[oK+H ;O)fjX?:(|$k-T+s:F~!VCX^_V-' );
define( 'NONCE_SALT',       '*i2vE2$AuY>LFW2)%%vuq TMGiR+vU%YL`XX!Q7=(K Bx0(Dz}8^WjHnS]&wSBAJ' );

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
