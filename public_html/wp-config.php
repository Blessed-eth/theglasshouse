<?php
define( 'WP_CACHE', true );


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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'uoktfUxZ1aRIuI' );

/** Database username */
define( 'DB_USER', 'uoktfUxZ1aRIuI' );

/** Database password */
define( 'DB_PASSWORD', 'Ap9Uv3GpyuLmTq' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'a}rSZ3MD[A^gy4w(I5n.d?K28(Yr0Pn&[y|}(Js3)H[Ksav3xKPr>INgp~7>$@j7' );
define( 'SECURE_AUTH_KEY',   'wHVOCL[6.~4Oz_,_t B6OBG?4ZRxLq~|jA)6;jpk]wR.(e^ZzWExZvk:s:^dUO6v' );
define( 'LOGGED_IN_KEY',     '?DEH%r}?f$3@})rE+[gL4:en}HHUBg0~# xrwYI7q<TbH)>0>R8fBX<``4KC1maJ' );
define( 'NONCE_KEY',         'V:*[je,a08S<,#FBW$fEE25$R+msi{^72EFE$GD8?.ly7q6^kftShOC;Wz0(K#k6' );
define( 'AUTH_SALT',         'Wec)n5XnCI.~r%HR(ABA0zXHy*hVa7ZEZFxoOf00n#I p:_*lzMg}+=MOIkttJPL' );
define( 'SECURE_AUTH_SALT',  '2N.N8x^jcHr29BDc{|E5)`Jbi)iG}.Xm|*&B+,o#uBaq2_qYn&=fiTxBG-}jUgN&' );
define( 'LOGGED_IN_SALT',    'mx8cdp7*1#&qp(=:jO&5<7vkZ7}()4y/?``| d|X2EY^sZ74dK/HL-+Cw}kc6TkV' );
define( 'NONCE_SALT',        '1a`h3_;So3t1}J~s(,k@-F:{~uoNE1-x!+9]N`/b6V[x>p;y)RmHUt>u|w{tT F7' );
define( 'WP_CACHE_KEY_SALT', 'd^ v;G,]NqxCKy#5<:NC<kl$;,V/%l4*%6^7cA?VrN{rsHb)fiy2j!cIcVd58%]R' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
