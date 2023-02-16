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
define( 'DB_NAME', 'wp-playground' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '3.2cY~>f_+uA@T0o^vrQoLvhLD<#G2(Ymlf^`X_j0H@cCc+:sa[PFh+OPPGX;mEE' );
define( 'SECURE_AUTH_KEY',  'W9QFWg2s~#:5!,dV]%!c#-jrj*I7y$RT^g7-suhBP5My}R5_ech2At!|7P,-%PK$' );
define( 'LOGGED_IN_KEY',    'F#LO=S<a!Fu/tpiVOiuKu<1(19RcHz}YmNKT)AY7brr<s/X}Kn#_#$^,A#,.4ja;' );
define( 'NONCE_KEY',        'L.DZ!+)E#8L=5z0Oy16If7x:JGOc,R%I&oC*%>J{cy>rCT%{N_v#T[v#63<A/~@y' );
define( 'AUTH_SALT',        '|je VGCjw?Q%)mt`c,]F~%`Ke:LoeHEv%dq}XCL_xr__Pi)Vy!h6VV8>+u|r*Epl' );
define( 'SECURE_AUTH_SALT', 'g{a%Q<QBp-U5G]`>bE.Y/R+9=~lOsN(g%n:{1h[hfLWBbV1QMw2Gg$-sV|@g7K^L' );
define( 'LOGGED_IN_SALT',   'p(bot?5`.+r{b8).EQJx?bJx.X=t{+F7,KoIYs;S: b5RC%:mmJ2fc07s>uP:oXS' );
define( 'NONCE_SALT',       'y9+ h@bG;Z/r} 0Xr>DGtE}%!yR A;Gq7 u(%,8:;MGQO*9KTlV,C%s[*#k40)GL' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpp_';

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
