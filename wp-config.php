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
define( 'DB_NAME', 'rtspedia' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '{ry%;w5W1hZCDAqb+fxZUVrV]}xuc`amnDV6ifIIn={e}cS|eksS/mLSf-lI7xMr' );
define( 'SECURE_AUTH_KEY',  'CK(TW!S%TThO2VSwgjDnF>o_3B/VtO|-i9+,7#[zw.v3@*FE/+U6ZHBaCzF8CEs#' );
define( 'LOGGED_IN_KEY',    'oxVQULCdb1rYsiMpbftvD;Je7|.XfDb}aZa4v&%&C5)%97i8MC6/)ghW@ foyI|X' );
define( 'NONCE_KEY',        'BiJ#ApVJM,,;#rXA[6iBHH;!CP,{<{(Px8vO?=J]Fzh6&UQYB^18Sf+aIH%02yG.' );
define( 'AUTH_SALT',        'E^/6Jfm3kQE1a2i/NO%uqIk~u+-%$50fgzp~+BW1pR1PE-my#MsOHyejGCZQViQ2' );
define( 'SECURE_AUTH_SALT', 'w}Dn?eFl5sVE^6]A[i]y@HC>!b@t59}b`PET]J[2i14=* WVSfbea*2Hi1nqZq|E' );
define( 'LOGGED_IN_SALT',   'fz1d-57u=Lm(mXljO1KXPM%E`l~f:~:Xy2KvUba(l)j(??m?Z.%v)M#aR-cBhV6b' );
define( 'NONCE_SALT',       'Op-m?T64.S6#tHck#:hZY$1uD8=>Fwg]|dK.=4*:=,z&7K-H>X^y7A5MX;[k/m%r' );

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
