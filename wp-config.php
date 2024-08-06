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
define( 'DB_NAME', 'wp_local_db' );

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
define( 'AUTH_KEY',         'B?%1XIX+e)vJV|[OLYg$3Q@Nmpn|+ycmE}-[4]_}%Xt7M&F; 6y&BhGGXQ)r)Rld' );
define( 'SECURE_AUTH_KEY',  '-nqRIzJ,?xKwvl+,{`6Wl59s9TCHO:+VY4qzTckIHmgKK(4db>DV7Jnp%2nyB[<-' );
define( 'LOGGED_IN_KEY',    'a;`VK|0!JfR$GWzAH 3P784?U4H0.%<E&g.@)/.&sw8T1GJ`5E=rnf.>_%Mr|<l0' );
define( 'NONCE_KEY',        '83yX|qCKCf2&{~)GGY?+3hV{1e?o|#fu^->4{!GYXpQvx,f4gKsDH<CkNnvtj)7W' );
define( 'AUTH_SALT',        'OFwDEH]C$b$gb4%NOA 2}sP-ti_X`lM }P=D-Uo3!ETp9gS2IyMqP[m#:&BN&)$K' );
define( 'SECURE_AUTH_SALT', '1<f+/?^gv|D4%N..~odXKgm7M9w*.il)ugKE}M_n()tPY+pufYx.lJ2|28.`O+E~' );
define( 'LOGGED_IN_SALT',   'vX~.ah#d~4]V.k]XaoR2%Knb#F?PSPtT#%cXo[|cqiX/&rI;]JaZTJ^Qb+cbdE|@' );
define( 'NONCE_SALT',       '4o3oZ0C( ~,k@=p[7N:CKV0; EF,U%v,iQj{pfLLc-d7Yc)0nG>:2g;m61)x ekn' );

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
