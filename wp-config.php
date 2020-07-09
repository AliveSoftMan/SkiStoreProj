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
define( 'DB_NAME', 'wordpress_test' );

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
define( 'AUTH_KEY',         '^-@7l!$dXHp:VB_2$)np+=^;WmfwUf1??rzFzmE9Iby{G{*-~?4SnN-&)fZ:IgN8' );
define( 'SECURE_AUTH_KEY',  ')z;Or`W!woNG5:5A:$=Q>)u6>KyMEC0$iuyshb]nQ^Tn5j13h%9(E9)s1qqv%#Bq' );
define( 'LOGGED_IN_KEY',    '&t*d4gs`oY.V=Mu]ri9qR6=],G#~K|5q{kf~Wa7S~3~9(Fp|5`=o}LF|IZ`#}PWt' );
define( 'NONCE_KEY',        'ikFg[m)H54ue UR|2U^:(a@tMrR%Z2b.k>TT3s*7/H6=c%`YaR=9Z;Rw*>K@7>[/' );
define( 'AUTH_SALT',        '$6I*4lI<*wD@i!UP!c:OacFn(QNaYJph-xnYEnhVtB3Zc[ +D!s.A06S`q`I%Fwf' );
define( 'SECURE_AUTH_SALT', '#c1A%P,h}$u~a+0f@IeC]c~9KHV!@&!PxbZ](p}WjbDU,&*.S$I]w+.zpQ}:kpVw' );
define( 'LOGGED_IN_SALT',   'cXP]wXXZO6QJj?,3Ft| lb_]N&*QD:VQd5@:5_]VoWE8fThta;F!W/_z8tJZ:v=E' );
define( 'NONCE_SALT',       '^ZR?u0h1E 3_;.B=^s}u.&L{biibO[7d 2$?EfvL*T)i(4WkWbV.~*!GPP&S)_wj' );

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
