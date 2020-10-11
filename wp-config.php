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
define( 'DB_NAME', 'blog' );

/** MySQL database username */
define( 'DB_USER', 'popo' );

/** MySQL database password */
define( 'DB_PASSWORD', '075717169' );

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
define( 'AUTH_KEY',         'Q&oj.yeMX5hF#<=m-.[9t,yais{uxS@:<850Z!|T^tr6C@Yj=(+(`pf%oZ.Ym3)e' );
define( 'SECURE_AUTH_KEY',  '-$ps$3kLzK-c&^&X<8y73>&-fZwjqXMS0)W1~3{5pE}k%s7>`AUHu!7k$t6E7@d{' );
define( 'LOGGED_IN_KEY',    '/q07<}[?|VushM/qG`^^&T`BH&t$A**Vd#77c|}CZ|$<f}pXw(xaNWICI%xn4oee' );
define( 'NONCE_KEY',        'PsW0/ir8U&aD*MI*VOb/p7#R|~/+/)[^cX#R(^+@`?|DiQCoVy328!tgf!slTXDJ' );
define( 'AUTH_SALT',        '`xgTy*T0+Dz]So%^(6sH>c[Q?0?@+O`R/r O7vKX T|gSJ#42m}2.z^c^:#2Gz^o' );
define( 'SECURE_AUTH_SALT', 'v{u;[D4rb :eD9yKTEjW:iU)h@MTXA63L}z&akQleV~wMg#/Wo/StAO8@sTbDiUD' );
define( 'LOGGED_IN_SALT',   'l}p-*.VO+(C_yxNUu!qf=kf#b:q?<`7]*4tAy1CDS.a+8Mua6MJ4aBoa.9<1q=k/' );
define( 'NONCE_SALT',       '.DoFR,2Obu&aIjl/4n=dY*Y]Gz_[E>A~tP*twWTgM$D*P)uJJ[AIx*qmv_|^d7}A' );

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
