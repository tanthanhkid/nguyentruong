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
define( 'DB_NAME', 'nguyentruong' );

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
define( 'AUTH_KEY',         '|0s(5<sAmtU)asJZ&IAGQpnC(pUec9&B`m$qro&L%o>D:0rM.7KOWUZ;Y?[z.>M)' );
define( 'SECURE_AUTH_KEY',  '.je.Z;vX)MXFK`b?q]7R6nB]A}mo|WkJ*O9@X$)EhZ-_h^tb$~} 8},v2+rVhsc1' );
define( 'LOGGED_IN_KEY',    'mOARG~1q4TI.90bs{LeT-mr4_ORxPR}=Qa_Kq:|J>(gv2~%RAc99|naxx?7jI%y2' );
define( 'NONCE_KEY',        'C~I68~4I,vA%c$$Y]TZ %f,(*)(iEo8%li/ft?_v%Q-C0F0bb^yU4effo$}Pl>oX' );
define( 'AUTH_SALT',        ':K_n:cTN;Te8Zz+</uc?`jPU B:)/npY4OmZAF(pWYbSN+]v|Ll1wi#=zf3sN^KU' );
define( 'SECURE_AUTH_SALT', 'Y}Q@zYNjREfk^h2#Mz N8G>!vm<_1, IMSF00aY,tuT$u TV^k;(pM2kwM40~qrn' );
define( 'LOGGED_IN_SALT',   'hw19%+]PD}e{,;LYZCVR$ljH?}9b2zG*r )LbPXaBr9%ujwPq)s<?~^A%~zBL<J8' );
define( 'NONCE_SALT',       'K*_dg}[;,]GAH=;zTZ-{}t~O[*@8MI5YJuzetN%*r[uo<yAQ,1)iqs==`mal2-6*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nguyentruong_';

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
