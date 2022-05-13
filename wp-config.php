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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'lJ5oxko,>T8X:iT2xRU8bf|U>I6r+[37;ix3< >LAKh~94*gIPkZir}Fj>3<g<}X' );
define( 'SECURE_AUTH_KEY',  '+v71qNC@DeQcamJgMiMaWs^{%Ui~C}&RS=SyOe=O*+Kut$>7m=?KV3E*qQWJ@x{z' );
define( 'LOGGED_IN_KEY',    'SyZ=a`.`w ?00g`L!Bq7;EMfP>rV<952s~v ssK_63Tq*UV-o)Pwq2V#5{n&mCMk' );
define( 'NONCE_KEY',        'T|VZ8T)^4r0kv}wK$bx1~stpTcO_M*{(ryZk0aK${Xd/J#,?Y.^K+~8lVz@VFBD;' );
define( 'AUTH_SALT',        '!Ie[R3p?HH!(p:sk[!*Jy#YK]0S6>$|`2H!~.hVRb}_v77Q;`bSsMM=i{Z[2LA)m' );
define( 'SECURE_AUTH_SALT', 'tL2VdskKyh~q>?ita-9G.gz{E,Qa[B!VtEbN)Ap,D/V1[,p uMI1,Sk|VL``t<LM' );
define( 'LOGGED_IN_SALT',   'Gv[<[Ci&.b0,Q+N6q?|_$Ur~pNE1w*4W1hCWujlt|xviu0(yS>Q?<iq5K>nRCS2w' );
define( 'NONCE_SALT',       ']`>gk>Y0;M3S6|waLu#$4ET=>sg5nO@FzkGMz[K(W7M_E`tt^L8m8lC*e#lWZIb{' );

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

/** Multisite */
define('WP_ALLOW_MULTISITE', true);

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/wordpress/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
