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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'o3e~&;:MGwS*@*=i~K}8rXgy];COD`{r9htgVq0oSP7$1rI6Eg|alA);g|E=M(&T' );
define( 'SECURE_AUTH_KEY',   ':XIMj}uDsB?oF@hzaJe6WZnxL q<$v_k.dtH|Gk=&_+Nv!<;FxI`.2zKE5*Jf1~+' );
define( 'LOGGED_IN_KEY',     '@4SL+7c11gAwP+iCCE8C9UksP@SrlUqr>]pS8]~K1n2&UnJW>v[d7xr6AhsE+8Fz' );
define( 'NONCE_KEY',         '-^4f@0R^!$>C}yf#ShBVu[mQRb}>ED+p9,pxJ@hL[#|z/g0 g#klPdBQpH&/hA/g' );
define( 'AUTH_SALT',         'WIx@]Qy.kCV_G[qV zG_vQN;@s~%ee/xp42sQ@wf#&9Uf?1keL[6jIWy)l/K|n:l' );
define( 'SECURE_AUTH_SALT',  './O%#,-v|x|qps-&?ERMx2$>Lxba1sXzsQA/N`(ST-n$UYnJ?BR.W:QY[<ob{q:3' );
define( 'LOGGED_IN_SALT',    'm;IB-2CQ$-X&$WjtYk6HnhYez6y%c-b/Y/RMM<d+{>>&U6%6D&[gqB!yKg55)%gY' );
define( 'NONCE_SALT',        '#p>}$z&B6^f:dnte(7}5O(fCuqIV}WaC@2T5ngrqRgq(nXbfZb{1_Q`m?9sH_Z`K' );
define( 'WP_CACHE_KEY_SALT', '[nQbK#doa0Z2=R`R+c`*P.T =%Q}KNHKj7d7Q6arg6{~$G3yo$9$J&c)x*+ooORK' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
