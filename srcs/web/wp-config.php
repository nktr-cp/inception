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
define( 'AUTH_KEY',          'x=75Bht5#Eu.0Y)^q&$ol2J1`ny%POadN5Z6zKc=AVj|dth-,$Eja1L2:-=w3^#T' );
define( 'SECURE_AUTH_KEY',   'jCgZo8QZ!1*JQe.<l$-g.~JA>R;6^7N*-CHa-[j2:K@wCSIaPAi0Q=};D _b2!Hy' );
define( 'LOGGED_IN_KEY',     '4n4&^@k3z(xBn:fY}AltAi>X-XAV:S)>-lA[_Isw- ui*Zcb51EYD=N17(r=s*#a' );
define( 'NONCE_KEY',         '`gI~Ge]JRP;)g.IzJ$<B/G)Lu[x23x^,Z42}~Pg#q2Ql-*]$}S3@S$VC:@T8 0*h' );
define( 'AUTH_SALT',         'cs(#gMPBd?vz/E<^%YDQY2_.{.m.ePI#*~,qry|jY:jq[0a|x!coYW,Ht)CIb4Kt' );
define( 'SECURE_AUTH_SALT',  'f}n0tqbTCIG09}zXWbt&iP|E&:.?9eKhB;1`@Mg[=7NVi[dt#HF(F8ekH`]C1X@B' );
define( 'LOGGED_IN_SALT',    'q_}m,Xsi^.CQKU?&[2[)O]ytZD=>k~sG93~An8@.&7[{fXqZH]BV(-^c[1]Cq$3c' );
define( 'NONCE_SALT',        '!gyAnb*7CBAe2kk,rrVo:B<3t>f1Zc ^gS^U3g,l+Ud=SpwP:Ng-JM+A~QAy$9DJ' );
define( 'WP_CACHE_KEY_SALT', '}?Co{EW!-,@S&wy@w.ZEV6mb*,qdyA+C4kNjftVN4AP]+z_*;&4Ol7ebwS)H(7uc' );


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
