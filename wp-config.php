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
define( 'DB_NAME', 'migration' );

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
define( 'AUTH_KEY',         'p%F}0c=-):T?Ef2#gjR%6l6/gY*8A4II6hHbwp}4B?N:3g+4CQm#8++42&=~!<gr' );
define( 'SECURE_AUTH_KEY',  '5Joe~pRX:{Qw<`{>soi$-a{Su^ht}k5OjvG(8[2WEPJy4^^AJl2HBkwib&2mPsjs' );
define( 'LOGGED_IN_KEY',    'gTdY`P9=wAv5$p#,SH^lm%LXPly%1R4 9va*,&NAY9Fk 74vy:We,?V4!]>82O9H' );
define( 'NONCE_KEY',        '^]@>1T`Bd/wZn5n{=K5.4;Z9krsn0VmN:(0D`NX#noaV3*/Ec~#KBG`xCU?%jV<L' );
define( 'AUTH_SALT',        'eI}g}=1L94)U|0zt{RT0b]n1b +?$Ua(vwo*;{{_0pF>.7H{90S4+fr|s=Ar9mMh' );
define( 'SECURE_AUTH_SALT', ',O&aNpk6Rv>;T77=:FvVs$#UQ.7s*ANZ.y90sqFpP+dfp RE8)n,[.&Y<KcCI2dJ' );
define( 'LOGGED_IN_SALT',   'k1]y5Kmm=:#3v/cu])_~Vx}k!dSjmyd}q>5{dfZ%GM56{jarfI~mTgQJF1Y?V#MG' );
define( 'NONCE_SALT',       '-6uQxZX!AHS|)i0x%:!G:3.2`28rvF3mcT2yQ[Yn.b kip|=Dn P/RD^{?Vhi%,&' );

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
