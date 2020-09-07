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
define( 'DB_NAME', 'travellersdream_db' );

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
define( 'AUTH_KEY',         'dvN3J/[}E]WyKKmLAErg}pB1Lu=wsv@<BmT79G,}5[Uu]O2h?oIr,6<jjjzMlbog' );
define( 'SECURE_AUTH_KEY',  '@7CKUbO2;2%Ns0*T1QwZLlVeK!rYqfdac_p2f):-J$W{n:a/zu&DI_f!mkjk05&R' );
define( 'LOGGED_IN_KEY',    'zL|W|on:fi:eSCqF)0O1zc[r )$pQ[b8zn>v$0)EY35UVR~<Fkn}RUB1|i}(ZbH@' );
define( 'NONCE_KEY',        ' C#tAStQ~sdn?DxN>[gLjM$v:u#vKVgj.[.2u-|oxh@hHye_}qU&53lG7+c{,9ag' );
define( 'AUTH_SALT',        '-^>,ymYo4<8<`fS-xm=^AiefOS G3wi,*X:x(0)^JejuD&B #{%O$&C>#x7&Rl O' );
define( 'SECURE_AUTH_SALT', 'S g~8wk6ViPKttT*3.#Tmwk[VBKU0y{Mu(^%wqjcPn-OueQlea}aIkXP!*b|2St6' );
define( 'LOGGED_IN_SALT',   'KQ[|%8YYoxokZuT3HLM o6V]!|Oet%c&~:FUtY0FOj]|.a|a` w>90o2(g<UI5i/' );
define( 'NONCE_SALT',       '%DzGy6sk&SULJ;+n$NG}$by{<}~IB?/qRla5tcZjtL5%$5?)OV^YEoM{oc1J!!a]' );

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
