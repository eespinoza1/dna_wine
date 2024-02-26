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
define( 'DB_NAME', 'dna' );

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
define( 'AUTH_KEY',         '.)*w!{%l[xJ8U:-[A!KJuB%hJ&xv?1);DjYfq<CQ/i+;%^obl5?>`ev1E9v /.2G' );
define( 'SECURE_AUTH_KEY',  'bf e*q|ug(l,.@Dx<r>b?Ndi3%Dp8J+[j,xp6sUgSP]jZWl.zkof[vl;H)YFp[#(' );
define( 'LOGGED_IN_KEY',    'pa=)>>k>r3$Xu)gDlbw)T/C.BOLe{}]%(>//(e,j;:!+Q,M?/09}R9-etBOfc}Yp' );
define( 'NONCE_KEY',        'Y7eGLiq&/Ypcb/8G9aOynWbi{8Jtl%i7xW2r+HOOk<|M>NS_rn4%QSkif;&`ypz`' );
define( 'AUTH_SALT',        'N1td!I @0c7D2=SA5ziv>xCN1qs%7zaMQ}Q*l,nE6~kA*Lk~C(I[lM> kOXAHe-i' );
define( 'SECURE_AUTH_SALT', '?KFFiNN,xC<G7f++U uXy59Uzi]CG/e3n*qO*H:OX?#|^?+HH x91N9*1q8tdT>?' );
define( 'LOGGED_IN_SALT',   '.G^%Z&`t_ivvnJQAJKK~n3[Uo(<`K@yPH ^bqs<@m#{lUsTDh>kJ#||(/C8!,6{e' );
define( 'NONCE_SALT',       '84w>U,P{J>ji}C9bS[o|NVp8_^PrIH#+W m`]s)YuD#<qrG}3^gvRn}NV+;+A*M-' );

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
