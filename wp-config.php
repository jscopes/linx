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

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// ** Database settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', 'bitnami_wordpress' );


/** Database username */

define( 'DB_USER', 'bn_wordpress' );


/** Database password */

define( 'DB_PASSWORD', '0804e9bdbd394744593b6a1875bb32d7868ac90bbf0520ca394410bc27d3edce' );


/** Database hostname */

define( 'DB_HOST', 'localhost:3306' );


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

define( 'AUTH_KEY',         '=>oLCb)-FrnF;7$fz1cMdmdY/qnaFKr_/#7Ce;LM{Bm]NVm8J,ub`|kz-HN{:5xn' );

define( 'SECURE_AUTH_KEY',  'QF(^`^mMoY}VF`~JO%!k?fY}S-wdu%]&fG=>U,<8V^cgZ.+il}~:/Xq%fU>P(PGI' );

define( 'LOGGED_IN_KEY',    'P+@2OaRf%H K$fZx$@eT?8]* Rx/%u2K3,/U]Z-K%_kS PNKUnF;7N{!vSE@V,A+' );

define( 'NONCE_KEY',        'LS/R!s[&CkbsuzAe4H(>{w tDgZ/i?`MuSW&,gV~m0y]V}Yj1Z.2=R0]?%A%QdJ6' );

define( 'AUTH_SALT',        'x4l``:[-FBJ/aH<%@V54#0i=nWz=;:|p$SE@{i[s1mz?`lrfR<&Szsa]LU5ykx-' );

define( 'SECURE_AUTH_SALT', '6Xgb(bOl-;Dt1*<i`+hr;VtlWV`z>521+%`K&tQbgdo|eoOC}=/D`I0&.6c$(KrN' );

define( 'LOGGED_IN_SALT',   '$$<5powHa}rDSFEZ]nmYA[$hy2>*#6(0jey9C~IA&(hN YPS v6Ww2iM`DBCA]=y' );

define( 'NONCE_SALT',       'srM35%D[jkEP]ihp9jNpo<[10Ar3?>BJ&80sCyJb!GW<E%iH3bt=g^yEv-wrRb.&' );


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

 * @link https://wordpress.org/support/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */




define( 'FS_METHOD', 'direct' );
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
 */
if ( defined( 'WP_CLI' ) ) {
	$_SERVER['HTTP_HOST'] = '127.0.0.1';
}

/**
define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
**/

define( 'WP_HOME', 'https://www.linx-security.com/' );
define( 'WP_SITEURL', 'https://www.linx-security.com/' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

/**
 * Disable pingback.ping xmlrpc method to prevent WordPress from participating in DDoS attacks
 * More info at: https://docs.bitnami.com/general/apps/wordpress/troubleshooting/xmlrpc-and-pingback/
 */
if ( !defined( 'WP_CLI' ) ) {
	// remove x-pingback HTTP header
	add_filter("wp_headers", function($headers) {
		unset($headers["X-Pingback"]);
		return $headers;
	});
	// disable pingbacks
	add_filter( "xmlrpc_methods", function( $methods ) {
		unset( $methods["pingback.ping"] );
		return $methods;
	});
}
