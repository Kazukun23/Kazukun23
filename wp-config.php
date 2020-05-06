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
define( 'DB_NAME', 'kazukun23' );

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
define( 'AUTH_KEY',         '/K$ r2u4TfC/u2+1r,RXg_IIAyH{g{rEYb8_I.0k^UvN6NBmRH`>Lr@]~%7cBWo=' );
define( 'SECURE_AUTH_KEY',  'Qlz2/7iY!eG2nRj).G2btlGR;U]?h>.DMAg;vI6[HI/+F6;]Sd*bY s7~SR,3&[]' );
define( 'LOGGED_IN_KEY',    ')..]:!Q47hn1zp*|)M``O2P)x2|c@Rya/l@2g2Qx}{GP-I2&{nNMC6j O)r*g,uG' );
define( 'NONCE_KEY',        '/{gD8)f*|7vc Cjeyi)4q<S;{DBiLu<3D[E>LQp>TvBz190S 8fJWL,L3U>eb$><' );
define( 'AUTH_SALT',        'aD=}~)Me Ai4+H ls5$+XCakYxiQIf k=JzL0{iNZT&y!.FdrB#fH533e/n6KcI?' );
define( 'SECURE_AUTH_SALT', 'qu,_tx]7so=HXoz{47:.o<A<,itjWE$5VTtZ(AfYZDqO=,)^0wek,Z6sKL}8%aHC' );
define( 'LOGGED_IN_SALT',   '|B)$dTdToj3h-zVtH(+1*$z6=J Sww?.@q*CLYj@UegvaIgk Oj;},Lyc_5z#[l@' );
define( 'NONCE_SALT',       '+Bw7[xg{1&0GwG#h~aBQNU]!!^vYgA<5XQUkmeIF*e~V;jaiwC_c!|HC9Qd^Gab;' );

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
