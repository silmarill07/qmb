<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'qmb' );

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
define( 'AUTH_KEY',         'iuw`+X];oz2,4)az S_NY.0 B$d}+iX)Ha3OA!P}WzI+B;nakM<jfL@RcP6FE<7*' );
define( 'SECURE_AUTH_KEY',  '[SP7zT*`2U%5RI@~BtC0B:QzDAjD~ewG_rDuCh&K,#Kbk0*M.x`Km9nGKPM[$YE;' );
define( 'LOGGED_IN_KEY',    'q]s1G&Y`DR77wmd{V=2H~8;:e8{/{Tk5Pup[^[=cH$v8]gA~-TF7&SzKx#S_<NIA' );
define( 'NONCE_KEY',        'Lp*$wcl.MBL^*_7NRQ4+<Hyx@x/HjxLQ}&i|>Vi!vu7+SF;iGj6&*vfW w4`9[D;' );
define( 'AUTH_SALT',        'h?WC#B%[:j[;YoH/uf.4Z~K5a;Ql%n~bq^`YRmg,nO]NA|J_n$RF^+;L:Rfq9pj<' );
define( 'SECURE_AUTH_SALT', 'i5SD)=MtoV3*W7)Zpj]9Ji&iJHc:JbVb8W{K0j0]qfy{]^FG.M@27PTe~Q35J;~V' );
define( 'LOGGED_IN_SALT',   '7Olg&:_<oaj).]WGbErdw+,omkkZSxre.KvUv_|=FV[Dy7j#WT1)iB~4Ps]G=1xZ' );
define( 'NONCE_SALT',       '{%%!N/X3}6S${S-eq?b(*bi|)lX)(=2HbB/j)+0Qk i&UG*o$G<f1^7E]vme]/gO' );

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
