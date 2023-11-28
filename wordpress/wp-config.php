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
define( 'DB_NAME', 'db' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'nandhu123' );

/** Database hostname */
define( 'DB_HOST', 'database-1.cnurvtlaeiiy.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '`+L@g`@mBlBMt.x<,|}fOG$vhBTZ}4~4ULzXrGx@XZY K`1clzZQMEm=PI^<+M3~' );
define( 'SECURE_AUTH_KEY',  '-<&v`9FI=7q>qcVtP69.gv][ZY/M<P57|ci0}^wAd$*?7p-3Lc_4V/-C<}oC5o<S' );
define( 'LOGGED_IN_KEY',    'Lrk|:LM>!m[F5}o7(ml[+euE@T/HE*zB%V%z05q-SRmS:yfz7R=jN2A6MnJ+vldj' );
define( 'NONCE_KEY',        'l]4 =UL+vy+1sPlW.^h6J]bQ)-eI^6rLfDpzeUfclD+ip#qGvHVJ+ yzm1D^033v' );
define( 'AUTH_SALT',        '*7r$9Q#b37u #qwuyBP!u9bI;om{ef:_wGS#um:t1`_?<tu-MI*[}xT.Vcdta]R-' );
define( 'SECURE_AUTH_SALT', ' UcYPm~EdCt4JC40ZK`pSL}n^Op&$=qM8/v:+c^xgQ&+V;bMt+P.B%2j?.- )xq,' );
define( 'LOGGED_IN_SALT',   'CXm~]|+0mu]io$26f{HOH.csgda}a_LW@5Y~MXfo%~!LrBU8.W]Q~=+J9|#,&%}*' );
define( 'NONCE_SALT',       '-:k{^gLg}XyRUH{=@P(wG@W}g6G-igN+)?@] Ocw9wF8C+SUOm8LWRf(mfo:<t`8' );

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
