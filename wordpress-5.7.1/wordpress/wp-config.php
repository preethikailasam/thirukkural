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
define( 'DB_NAME', 'thirukkural' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '#V+= VHfTny+{dIK[6d^|f+j.4I{Yb/,4 T@ _.i<v44B/p-xc]!V;DW vFmO_9Y' );
define( 'SECURE_AUTH_KEY',  ' bRWGq@S[dxa**&(9vTpX9mZ2Hdh1o/?|YB6D8t2C#]?;aF,*dH);?K:v!Y]vkK+' );
define( 'LOGGED_IN_KEY',    '`#,mjF5HsnOA{Slzw^),D L[w0!6~4h]dERB*DTi`8^%*3`mRngni~&F(M]2@LaP' );
define( 'NONCE_KEY',        'Ql4jZsdj1miAK/4>}@tf v/dHG>!HTjyoOdc*Tj#f2gI]}sdL] U[x$lSw%+o^>.' );
define( 'AUTH_SALT',        'q{]A,Z?GDYWC}J?,=#f1)_v-3%7maQ[[mmE)b0W{>jd9ln]kM^d+{~h1LM_il4YE' );
define( 'SECURE_AUTH_SALT', 'xPuU-2OWxUu;$]GkNPlc~e#U>Usxl|7v)5:pkIOX@D)i@&Rsrr`<Qy^vidi_voBe' );
define( 'LOGGED_IN_SALT',   '[qiB~O+0Ehy-Us ];UkTnh`(yjMq[W>X&)zh@n38sYP5QZd8)PM,k6Og&.OB:g{!' );
define( 'NONCE_SALT',       'Z5jMN_=pXCg@6NKqf@0Yui@/HmJDD[lVohSi=c/8X~P-:[;.QGNJ`>]hHNL13;~~' );

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
