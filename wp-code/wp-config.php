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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myPortfolio' );

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
define( 'AUTH_KEY',         ';VN}Bo;G#[`V;qfMCXWj|VEvLBUQl1`)Sc3By}?_|6$AiB*89azn%qp`etK#5?Zm' );
define( 'SECURE_AUTH_KEY',  'P-R4;BlE9C%O!=_ ts?w/7i/_{_[[z6N}3+Rny~AKzy{u1*^G3ZjRX=<F0!z$n`7' );
define( 'LOGGED_IN_KEY',    '6I zJ:Zn[[193_K}DsNY.VUtYy1n1p8CYo(F07Zs1Yf}+L|_wB[N{0l4Z%:)h^*s' );
define( 'NONCE_KEY',        't9/^]!v@5F=TqDy{jCC Ftd=sfXb#A68kAc]qEJQG4XL,oQiV43^j61P[U{Kf0,^' );
define( 'AUTH_SALT',        'NKEoK8a0GAXs$qX>#~Xf9Fd:(%41Cgi}GQHUSJ5aGh8DY?sD4IEVy9fvy[gS}t^y' );
define( 'SECURE_AUTH_SALT', '#C2crZ-<@xJ]106_wh+,U6b2|KvN1{Ef$1x(+%q8}u@IEVt][OJ-_2o-1coctaqs' );
define( 'LOGGED_IN_SALT',   'J1q&7L*~}pVC|_,l;i+72@^-G,PU^%[sbKo77smPFCDiN&1s9w=3FhfeNG,1,Y?c' );
define( 'NONCE_SALT',       'y0o1*jNm9s5_hY,v$F2$2n-u0$qa H1kC)<rf]PCz>a fmekWO]BJ4:;e^*p##t]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
