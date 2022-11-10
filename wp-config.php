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
define( 'DB_NAME', 'fadel' );

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
define( 'AUTH_KEY',         'pyi8Q%MC$R|Gz`mLIt`boLMyN-;YN(6XTh8ZeL1s9RQwEYsjR?{}}(,@jan]YQAV' );
define( 'SECURE_AUTH_KEY',  'nJ~njIYB#P(UkFiApJ-X][6p/YBn9o)LhuM.Y~OwZ9IE$[86FNF|4EOpF7ulK@Vp' );
define( 'LOGGED_IN_KEY',    'ypo>wwyJo7~?/+1yaIlJ5cob=FYu~Zm7EZiA=$c8+2<%PR02${-ywM1KAd9O~`p.' );
define( 'NONCE_KEY',        'Wi=,#hA8#uA+)}b_g-3BJS.V{b5-W!-CtZP1H#EQa]b90B]UM|ew(,-Th{NDaepN' );
define( 'AUTH_SALT',        'D:9*Sw9Cxbq8(a*lQ{u8&UHcWymt,p Y6|ApI%:=f?RH+LB097i{)Dn3ka Mq(M=' );
define( 'SECURE_AUTH_SALT', '/GI8P%oE,i4W9HT# Ao=a96dmujBt0~YLR9)Vv-`c|h=-/LY36l{{?86voQ4O((;' );
define( 'LOGGED_IN_SALT',   '^X:OpZ#ld-)2#{_E@YlvE8Pzqq.p <,{Nfy7JaY&^ftCW`r5gyN;^~e~EF0(t*ei' );
define( 'NONCE_SALT',       '=/k<}[s:fB&.`R2/mlGpRk[+cpr,ay8~z2gkc0HYW2s:$ZJOCpnY] .KIX5?fb+w' );

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
