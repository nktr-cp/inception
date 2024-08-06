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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          '{2Zb&^[@tq] 3HzEe <*e!k7uwbpA-fh}:cZK4eChgIQfb:d!A`/ytFRl.lL=i/h' );
define( 'SECURE_AUTH_KEY',   'iu}qTE>Ab^f{Zx#cyaC%D^n`PvU7Lm;O}kz?q8+~`O*GUMNA6;[&U]0bxgPh!<aA' );
define( 'LOGGED_IN_KEY',     ')vdLobDpqYR7@rxS65r0dT#>G-!y_<m}gLLl_S(B5wE_9JCyd*%3@k sD{;m,|?[' );
define( 'NONCE_KEY',         '5}^h@hGR+bV=T;u,21xk/QY)h}oDD-e!5ggLnN.FR|DEnv{`!W#wAyyJ2/XZLB=-' );
define( 'AUTH_SALT',         'Le EnnSMietJ+Egr{8CBk_09CH(|4O0{3K5!,OPqN?5>dr`w*f,r$}JK@V8emy^w' );
define( 'SECURE_AUTH_SALT',  '$!meLR7*!3j1*}r;W>5VSO~,7!BeVE3!/)_2a3ZqCgWGH<FkZH|}!Noda1|)!?Ck' );
define( 'LOGGED_IN_SALT',    'FiH$^W~/(&RDJQ Y*_J.H/4T7M([[y:iZItYC?V5tp8ECXMS:ER^MfFHrWi4]PFN' );
define( 'NONCE_SALT',        'bai2Ke.lYXXm5XG?L8~FULqk?$0y;AkG=93k:f_-V6T:+T0:Up8nvVr<CS$`GITl' );
define( 'WP_CACHE_KEY_SALT', '4;]E{%Ker1j~<46HzR6VM)Yg|J17- 6:E<MAq:@+.wY%xYt8_CGWX`?6obB2C,dX' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
