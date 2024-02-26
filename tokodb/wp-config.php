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
define( 'DB_NAME', 'tokodb' );

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
define( 'AUTH_KEY',         'nv}?6;^%];OROY)kq{[lXYP$#+mKnifI[1-/5(P+N^F%{H6,D[-CL/HC<cg{R>`/' );
define( 'SECURE_AUTH_KEY',  '%vYkA.qL*b$.v+dSEzz|0PJ>m4c-wINzA{1Le %gV=iyC+C8$>>{*?wq;{q:/$75' );
define( 'LOGGED_IN_KEY',    'a<)GbDH*I=z~>kL.8Sp&c1k2d%|i<i,C{W[N^!>k]e=/fg*zO?`dh^nk_.R<_i4X' );
define( 'NONCE_KEY',        '(>k&~Y/@5$5IKgvQ,Jx2evaz{0=I!k0{f:a]<|@nX,Z:Ta}pF8@im&ilEVAy;Gt9' );
define( 'AUTH_SALT',        'b!|<= Z&71> C2Y5&^nYSdW)oSwufO0e!t:(ICO.BAf&T;Qv|n_bTP(}h%y7P5jH' );
define( 'SECURE_AUTH_SALT', '^r(hV}$V[jIC1,%p-d];V$E`Ffc0^p=~kTWaq6,@1ECxeE^FT*+[4XOuevw T!/3' );
define( 'LOGGED_IN_SALT',   ' &daoxu)}p?3EI @3(Gv%/{kQ|gNr~;GK,&S~@mEOi5YCr*?v7+jr9;#U!.Q0ch[' );
define( 'NONCE_SALT',       '$  9C6=~w%d9n  UuATQy_6h{3A:1~SSPNEB0SxVQ8m>ZPFT~<Dh-;}udN>-*<pG' );

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
