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
define( 'DB_NAME', 'db_prueba3' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Inova.2020' );

/** MySQL hostname */
define( 'DB_HOST', 'prometheo.cbt4wothlert.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'Z`:}T+oU~%ww%VT_mzq{N;-|Y P/V6;SI<3 0vPwv50]hk.RgO)I_Ml04hbBDnJ9' );
define( 'SECURE_AUTH_KEY',  'S5A4Ro>6B}gC|e(>{Y$JT)syrRrFZM~ 0#TtK!A##Jce .ji9G5C1aE%WV!(F^X~' );
define( 'LOGGED_IN_KEY',    'H*;WN`(E=xopV@:1*nNVx[xk^Pz*vi]lk_L,R, z;L^*=sp/~)(v6CTxVK1QFXLL' );
define( 'NONCE_KEY',        '.r=uB~fjy1g*?S`:*xtFtX;<g Lyc}P4Ay=xdIR=kUE_w~rgETQ9Dd5z>D~@[Q%3' );
define( 'AUTH_SALT',        'p{_JGHPMI*O60dJQ)w]7(,#u;Xfq%^^e%?Z;MivxDtZ7TQ%a#}m!p3]1el+lRSW&' );
define( 'SECURE_AUTH_SALT', '?)X6?IHI|}xh2K;=Y3uAnsF>PT?oBh?>c,e>)|{%g&ih1q9T**Fml+Yaq-|J6KuO' );
define( 'LOGGED_IN_SALT',   't7])7= (jHk.6B7P~0Q-P5b(o0=U.r1*n:VMy0g%W(_+!q+kO^o_Q2D4?9J(z#$T' );
define( 'NONCE_SALT',       '^{Y.|a_PhK];ftGucDD3Q)SRj7qI4[1sof!2&Mp3%c+r%g;h{$WbqJ4-iMjpJ$L1' );

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
