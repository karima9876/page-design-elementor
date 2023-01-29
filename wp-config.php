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
define( 'DB_NAME', 'practise' );


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
define( 'AUTH_KEY',         'dIMxV&|SzTYbP$~]m-VQpKJMe.r`@f&}$,ydDuDFdE{;NPt},ZenQ!RX@dz3}twz' );
define( 'SECURE_AUTH_KEY',  'i]r=yHewR?>TYef/jql_EBC#]o=wZ%(jc:-AuS>7M0j)Zia8D[2,MNqA4/rE^e4l' );
define( 'LOGGED_IN_KEY',    '6J!28sHgwRbq(0D9./d%wp+E(u< p)YYE s?f~u = `!Nd5LK.S4yA<F2(]|xQgw' );
define( 'NONCE_KEY',        'B8%mnSp[dINi+t*9Y2:jqI4SAsMWEKSda=_I@SB^DOB]|@$fF5GneJZg:V!.j,(x' );
define( 'AUTH_SALT',        'M7^@>&~79a$GN,+js]ddN>?.GHTBG*6YDi8/jC_3[@H^lt@aKwI=i!H8K5v3OrEF' );
define( 'SECURE_AUTH_SALT', 'EQRAl-%q3K{;,Gy,pRsd*fr:;CHQBQ+n9%l#C{D3^#VBO0mennH!w{nFdVO8i&:E' );
define( 'LOGGED_IN_SALT',   'p~6vog[@<E* s8&({Zd:$1S@/F(<KQ5`r5uD}yZbC]P^0u5D B}]hha6.]lSV-%-' );
define( 'NONCE_SALT',       '.#k%CtfNrLfnl$3!nG]$bM_)C-B{y,ZDf2vbrlH cxxeal+^MZAGM5Ep]YRUD>#/' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
