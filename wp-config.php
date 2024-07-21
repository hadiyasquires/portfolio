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
define( 'AUTH_KEY',          '7@?WbJOg8)1QF}b@=!Ye}*8@V1Jgfq .+qc{Y@:3UNr<Na90ozXs1b*Ix2=tSmMn' );
define( 'SECURE_AUTH_KEY',   'NZM$gF/VO6!LRxbl@zob7HJ4%xOJwI rqhvZZupv%FmXPA2,<c(k%Y7~Z8NW]AR2' );
define( 'LOGGED_IN_KEY',     'pKR$u,e<iThW_in7z&v%3`wq}:kO6f]q93&)qj4+!XI=[C@r!aQS~br..L-Gs5T`' );
define( 'NONCE_KEY',         '1pb;F.z7n8-b_!vwpE3W}{Ac(G0?g#(ifHV,10Knque,<X?(lc>nN&#CILEumToE' );
define( 'AUTH_SALT',         'J+b;P/D/gp5,{C4gC%U]R!FM@.s^<|9v=BC!g_r*/*~J]khQ;*]Er2[?`,rM8v8m' );
define( 'SECURE_AUTH_SALT',  'ogk#/R9,g[yoh(J25C*+SLpIowT_@%l/Rhj*FIwHg?k#x5pP[j:G7P9dNtcc_GdV' );
define( 'LOGGED_IN_SALT',    '1Sa|1&y@*%+|&zf6(y&e:i_|nS3w`YLItulDRYnB6imm>EGMb^c}KV$[;3c(k+F/' );
define( 'NONCE_SALT',        'qLxQ@>Nu~CUf@mB`[n*{S{Gqc+[!Vd@ikynu9.HZs2^#h[;T@dBFTi6$5lDFq,y_' );
define( 'WP_CACHE_KEY_SALT', 'Sv4Zbf4mR d}Qf/k`qH4$y@#AbT-&fkd(kkacz[g4|ZiN1iACZ?-~v#^Q7%|4-sm' );


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
