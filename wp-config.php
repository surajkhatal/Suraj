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
define( 'DB_NAME', 'Suraj' );

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
define( 'AUTH_KEY',         '@ xVR* xzgr{R=xpET3r:r0QI<&hn??gWC:|+ 1)3V(> t [5kLTLMP*zY%jH`6F' );
define( 'SECURE_AUTH_KEY',  'Tl=6p+zFgf7 mU:zZV;o2g^kG*$M>uX;BtF` I94?[H8T~qr*r#~OX]xO1fL|x#H' );
define( 'LOGGED_IN_KEY',    'Qc*>&,*2[JEDoF8/_}pW[P0?D?qzE8PyM)}KW7ow} .z2&Dt`itvH1#;9nmSw6&8' );
define( 'NONCE_KEY',        '%uz:i*mHV27{{4f|?TS|;EX{%7%fUZvnh1JyCSr!6M+yf0cO89v)qg]f;Bh.mGUd' );
define( 'AUTH_SALT',        'Yb:5Ow86BWMx-IXt*=mSgzw}*<bcE0kr{WWefBeF79L/hR*nq@<RhWr(;9m5+IMx' );
define( 'SECURE_AUTH_SALT', '!V1Gmo]$?LkhJ<Efy8AoU`4]0>~c3f+$)g{b{J[pb wXb}*1X~h1eXjeNCja? jm' );
define( 'LOGGED_IN_SALT',   'zmwm4~jF:$b+`PMxkQy=x}*;R%!L3xtE<#$-ZI}Cx2hD&KB)]*qkjb+9cm0LN,9^' );
define( 'NONCE_SALT',       '6$|s[/6CYEV[=7~K5#a2JMCM&9k/sAkA|M6ek.b#ol_i6VA-I]EZ:JM^iLd<>@2M' );

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
