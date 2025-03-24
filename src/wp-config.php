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

define('FS_METHOD', 'direct');

define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); // 0-15
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql-server' );

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
define( 'AUTH_KEY',         '&/80p2]Ya5BwUmqS$f+0IC`! cc%qy5mhw*|pJYu06p3UUYIo<avvTvPnV<W};kG' );
define( 'SECURE_AUTH_KEY',  '~E>(dSNC5fVxpxkU1G<^4TT`Bz?5; b`C%0q-5o/=-Xo3QHpXb}#pIo!Aq9{^r|W' );
define( 'LOGGED_IN_KEY',    'KKXexDAG$>UU4rMHa9]`IvCgKEiSIsix~XZCd{#I*+ckZ g>oEfh<M#Yh;[`7Pgx' );
define( 'NONCE_KEY',        'XSrZ-hj3qg5$Y[tx&E^ag( Rwe19VJ-B+1_l|6_icCBz}J/F2R[b*i6$pC.Wrb&/' );
define( 'AUTH_SALT',        'a8nxPAgeHc>xcQ{ws7Ncy!rnsP$_r9:&BZ 4)1Oj_$DMUID=z2dPPge)n]{c^eGM' );
define( 'SECURE_AUTH_SALT', '@Q!AK%bD|= 9D(B1e!wK@vX>{)6C8B4zquy`kDOT,j3RC-Q?uBP4%kr[)^rrfcAA' );
define( 'LOGGED_IN_SALT',   'i:yL~-2%mI|Z<#8 hJDXlV5riHll&5>dAH0}yT1o0a}Z{@$t[~YfFoV(A~,>&@(v' );
define( 'NONCE_SALT',       'rNDKUp1qO) $~9ZJfDOWp,]+x.V3_J0!^E90jXN$#w2Bs8rNYEzn1,,0$na9U;J|' );

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
