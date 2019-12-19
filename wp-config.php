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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressmmi' );

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
define( 'AUTH_KEY',         'wvwR?DQg<<4&`8w:fQGt`)TeP&_ux}W!-sC7#1dB1Oq}il_u!2%)-w&~E1p8S%N[' );
define( 'SECURE_AUTH_KEY',  'xiyYSIyt>{_qr70YpYc2Tv+%g^NA{Jq48zszecC5gX~K3FOa^YA{^5kNE <G9|_N' );
define( 'LOGGED_IN_KEY',    'hc)63L2P2eRv,M5Wpk._jOJ07IS!na39E{@_=`d$V*}q{@]?{OQ/l(.a]<E9*`#O' );
define( 'NONCE_KEY',        'lLu=QPos rqcKRu::4Mx0vu8+n~t Y^,-S|/jfFR?QM37O!~<SnfUDl(Q7*> UK/' );
define( 'AUTH_SALT',        's!#u`Gs+aH(yRWGR;6CG<TX_hK[iw#.@Hl0-uHa~i8Tp[J%9i^p^OtzqAa5/hNCT' );
define( 'SECURE_AUTH_SALT', 'Nc7ti)mEhiS>[]40t.%Ga[Ovf@@3~WM{@H7[+%^-Rfr^x/[IgZfp}y*1HK0&P*OS' );
define( 'LOGGED_IN_SALT',   'qKKo?&zeqFPgEH+2d,]O274c4sFEG`~uM&HhN.f/A[L@[1L(xf4;lx7~}Gm8F)wT' );
define( 'NONCE_SALT',       't7Q^c>!#Lz 2c.l(oJ/*u-PnQ~`hH{o|JA&!zB(JQAmAskw^Xn=EMR2d3uVrKX&*' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );