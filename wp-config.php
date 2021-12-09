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
define( 'DB_NAME', 'wp_maraton_tokio' );

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
define( 'AUTH_KEY',         'AS5kS(n<{Co28{LC*gkaPWoi<r^HY%XoSb9w(CU]p+tnEh0c!K)?EUy:ou,K$5iq' );
define( 'SECURE_AUTH_KEY',  'ieS89xQ+x_PR4H.9+M,G+Ef7Y}Og?~Q=k fSnj@rKII/<f KT[lty)YVC#/O]<6v' );
define( 'LOGGED_IN_KEY',    'of2?eaZ,6:<;=[alH+R!lBz$~Sdge`+hq)YqO9:ra>bAlodef[Rk~?yQbFk6;9YT' );
define( 'NONCE_KEY',        'i$<Uo~M~>DTd^vj3i e~~e2yHyDfwPQMU]x5n;6fu@s`~c4-&ECYTar/V(L=K6hp' );
define( 'AUTH_SALT',        'TG~89akq=RxbaL4h(c04>@a:2JbVXLRl5}9)*mM(xUCyp=cZN`nkPFUb,X@gTL4=' );
define( 'SECURE_AUTH_SALT', 'kfrkOC7fUH<55f{1^a4H72}f#Qfe>EL/(_`@J3NhzNI)&Cf1dzcptc<b>eKL#6nT' );
define( 'LOGGED_IN_SALT',   '3kh12~z.-v?<QXsPXd7[:Ul`c U]NVpCA}[)=v;T<D=h,dtf@3 =zOsoeLi$7x?O' );
define( 'NONCE_SALT',       'LvRbYR7FfYpm[9<S5%qYWU[E7TP7a%o(D>.&tC(j-v[Yx^*)hifq)3w^BudQ)!NC' );

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
