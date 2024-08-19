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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'e-commerce_db' );

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
define( 'AUTH_KEY',         ',?=]-@8?D!40r+kkAscDGfi=fc@($CAl(SUr4[[vV <!iO{*l&10mIKY-=@Cn3_4' );
define( 'SECURE_AUTH_KEY',  'E-l%hMn>CYt/t1JjY|Uv>*pLK*QvDqn=Gc:nI^S?RjCZf]=rIVl|N]NF]W?u.<%#' );
define( 'LOGGED_IN_KEY',    'bD>VT-]W:QLgDK8Su*+&F6JeOZa 49v7nu7_xnzO:&UEI nB;B]K!(+mVbu(S6%4' );
define( 'NONCE_KEY',        ';XqO8sQn/@DnD %XM3uue y;G& 3Ag$]E[<cjabLY#oFTcK)H{1`G,EO.xw%zp_u' );
define( 'AUTH_SALT',        '|/)GLY+]UnX&Hr=E_jN$eIpo*,>-OBJe]n^9Rvopkj$BGz5[!XI iSoBp?@eq6jI' );
define( 'SECURE_AUTH_SALT', '$go0i/X+6u dFT7kvQo7&~f(0k=hI,kr|KtcG}ja3U47*(Tbk00aNOk>olPl($A~' );
define( 'LOGGED_IN_SALT',   'h,=n*j0i.kO08g84L7zrk;jM)Fbj|Rh1LyuH|Z82SO%5.iMl~x<:(g2*r ez9*$^' );
define( 'NONCE_SALT',       '%t;Y_ x/OW,uO=JV*:!4GKNrVjfM;?/tf6n%]E>KKry&@(yF|l.[GQXR|42>$>!`' );

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
