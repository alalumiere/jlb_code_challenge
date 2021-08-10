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
define( 'DB_NAME', 'jlb_challenge_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'sqJ<2<E:2<_Ts,jcx~DPTjmm&>cP)9J.-aw5@+-j,/vx( +G=9XRGG>P^!< o=9m' );
define( 'SECURE_AUTH_KEY',  'TfyBBj>R`yrryCjs+8s^bw0;_Edmbf~t:r)%/U.1jvNtj}Qv{yQ`(5Xg-)xVs%:$' );
define( 'LOGGED_IN_KEY',    'ag%tHoeb2I^x1r[Y/qCD75s.elU:fFp0P:dd0-lFD*!MjF&J Kfv{( nPsCv.z;d' );
define( 'NONCE_KEY',        'kZ%wN-{c^U[}E?uXSu(@;&[T6BR`a=#Sk<Hxx&!!*#k|*0<KCpQWUD<B@%e:M:#m' );
define( 'AUTH_SALT',        'PQ1^,l<J&z]/V*>omN?4==Z>W}UsmjfP/dL@+t*RPQ-+-nua_,lee&*hy<I}lOZ$' );
define( 'SECURE_AUTH_SALT', 'AyVc 0}^nSTZ>s(_;1Y$}CKxP0_WNW_h(}S^,TnX: F,#4j-^D|V.w,FF-n(Vu&3' );
define( 'LOGGED_IN_SALT',   's-r:}&?`xtj3i?MpxF * Oz `y/feY%ZrNCqq#6mVMDB|x vb[;*md,Wx^yVHx9C' );
define( 'NONCE_SALT',       'x^#QG83],64A7J`Rkuf9tIm;qr]?vF0!};P4(YY3Dg*,GEP%jdqx s8=$sJ#-0L7' );

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
