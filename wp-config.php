<?php
define( 'WP_CACHE', true /* Modified by NitroPack */ );
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
define( 'DB_NAME', 'golden-haven' );

/** Database username */
define( 'DB_USER', 'gh_acc' );

/** Database password */
define( 'DB_PASSWORD', 'goldenhavenwebsite' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');
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
define( 'AUTH_KEY',         ' ;W7m=HB`|&_5GQm`OJ7Dd:lD1TU-2W7vU@HS/}F]S]p%s/7B^z*}mC(.MG,&I<0' );
define( 'SECURE_AUTH_KEY',  'Y/cy!*wp{e$::df37-py=g2v=kZF3}7@DFZ%bswi;,7`8Safe2<:6gqt%8?!7ui6' );
define( 'LOGGED_IN_KEY',    '2irGYQaVUk!&v@r:J*`X&5IfkMW^njb{U^c2AriBW<oUmvm= XetT|iBhSU !:zO' );
define( 'NONCE_KEY',        'a;:Lmb5SPV_&F1$)SO&76b hZd4=:]dF5SsqvsKi?9fH-@x<[F@`;],pWQ1WDUe/' );
define( 'AUTH_SALT',        'Ho*(@g=_U ?F8Q8m/t>??[P;T/*Me!WEz!/HF+75XMt>bZ qD;N^)aa(W 1q 4l[' );
define( 'SECURE_AUTH_SALT', '%mAh0z yv%0pZI|TK$#7Pk;Yhqj)bfW.%sizL5`gmg;PoH(QANOuG_HYZA XWNhA' );
define( 'LOGGED_IN_SALT',   'P4|N4t)>Z(X%_h!7d{F-]4Hpi2r!sm9q{0V>k~ZS,nHH9; !93_;}jROMj>_4z{Z' );
define( 'NONCE_SALT',       '!1D>~R31E2??:0r:9E|}{- |]?^KZp]Jh{nu1 Q6&B+cn 9h74jUOAR#]L)Ud`rP' );

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
