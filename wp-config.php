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
define( 'DB_NAME', 'moderna' );

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
define( 'AUTH_KEY',         'qEb<sTdqNA!+2YdSmU88A@KT2>Z{Y[779<E=S;H%c<UwjQT~om!S>>i(3d;#YK[!' );
define( 'SECURE_AUTH_KEY',  '<sTPuy9%[dEo7!:V|m|,CT3jWnMXII;>PvWe(:8FLz-3-xB:MllFQ[HC~|->ll0V' );
define( 'LOGGED_IN_KEY',    '#_AGt&yz3|10i_koU(Bc5PQk<8X3|:*kFms0#!-t=nl&rT6C0bx|.E~B$`44MF^h' );
define( 'NONCE_KEY',        'jWn.@l.L8M.`MLN%u)WP#8@en@d:zd!Y6FH<@buCE*CO:j+U&RE2vok=bXf^w Gq' );
define( 'AUTH_SALT',        'XK:!k}N`=1@6bpLq _S&Lhn_m*J8q(zy.c~<,V:KxOE$/&D@y,. RIC1j_N|^u6o' );
define( 'SECURE_AUTH_SALT', 'm:spw2.hnvVC%9![Nn(Gr&MHb#KjdzI#?P.^n2kHA%C)**-Cvhm.T .<6>TX:j +' );
define( 'LOGGED_IN_SALT',   'P9iwTgE*cLB&mhvwbvCi2S{8Wt^cs|^f%D!0e)P0`#q1EN_cBPsXTXK238k6n/ME' );
define( 'NONCE_SALT',       'H`nu24]e$@dJ|k+0$}A:U;oewY[pzI)0zF6:yYr65tf^Qq* SgjBn&,sVlNm>V$/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mt_';

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
