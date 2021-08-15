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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpresspw' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'TzOGUpe7:bH@[Py[7rM<gPHL/ZkxA-P(qE)Fr]<& #}JEylmwexjcQN2p1P9@yLP' );
define( 'SECURE_AUTH_KEY',  '93+~lCZ`7|f}*DKp!lW%rvC%<n,hLA^2b7qhkCn(qLSn0e09]mKW,Pa@}5aSMg-u' );
define( 'LOGGED_IN_KEY',    'Y!&<VCOQqwd^Lf-C}%-c2gt)C:E0Y,=lJ=jE|pfpsD@N9Y&Jh#BhPU?)h&]P f59' );
define( 'NONCE_KEY',        '3k T?HA{hlH{KH<{2&G oa~nRhTQ@e=w|hgZCL!TS4qZ>N]|;>d1mk n1J]y{bF&' );
define( 'AUTH_SALT',        '8mih[KIr2d@:J(|GLU)51bo&6]C#:fdahW+D(|rO_)b{b;AG6#JHR-Ltk-:nb$Mv' );
define( 'SECURE_AUTH_SALT', 'r60@B -)4#*E?9.0(v:K(LR,J>d&;.1|.VM2[?^fX|KHQn-J#KDA!Q}^7D1L@}9B' );
define( 'LOGGED_IN_SALT',   'z:AY%-kBf#i0N|;]iOZTQe7l*pi|&(B3c~6*zN5$KcKIu*WsV_|76}iLi|YwFbNY' );
define( 'NONCE_SALT',       '&`=tk6-tmRx5Ll5HLfb#g+6K:4@:,[GH57)/}T,DlL^%}Xi{za{>nMnf@Hf}-n*h' );

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
