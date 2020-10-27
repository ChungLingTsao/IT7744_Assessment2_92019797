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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'ksZVQs(Y@(c{|:Y/!WahGoY{~TgRcMDdO)Z}QubB]hX8SWbY0=1. w!F?<}G<E*%' );
define( 'SECURE_AUTH_KEY',  'Eu|qn!-WTTbw]8h!&mPJ$*ViNCe30(zrslpSuyvM=1m[~_@&tR ^~&P0}}o6 6tb' );
define( 'LOGGED_IN_KEY',    '+VQ,&(Fptt9S^dG*+Uc#}JQK_#s4wF@vB1pBUY+7HIAns4c=0)iLcH`M:Jj7$[s`' );
define( 'NONCE_KEY',        'gAkHrBxlm.pI9:!iU>._at7C0<<%e;PLj{jvpX;q.XTWHcJ#_cHc~%ocGl#L3|h2' );
define( 'AUTH_SALT',        '|1$jrlH&bEq! !zZ%M]N+5Un&C{2}~4x}v]!8_gLHxY1E<1.J(,.dZt:NLB6PDkq' );
define( 'SECURE_AUTH_SALT', 'h[waNK%R77k,7D[em3=>+=:F]52G/2p!Z^G4R,#mR*K@.0>U/eN%VS<|luY]A(E8' );
define( 'LOGGED_IN_SALT',   '2gfU8|?/D3e9rZ@P<S2BTYk5r*L&Jgmy7pdCWWwK0Nxu$Tn16~Ao1(WsKp=~yhc.' );
define( 'NONCE_SALT',       ' >RzLr: ww.~~QH?Q`x+wxa*NG2fSlcfSKIGk&L_2<kBtDpsj6a)+gARp]|OY%C2' );

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
