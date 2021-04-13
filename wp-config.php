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
define( 'DB_NAME', 'lab-theme' );

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
define( 'AUTH_KEY',         '*Li#8W9GE3,#d48qsgcn./?3v?@@8!uJQHf<5;Mp>{d1_+u)@%CBU,rD]$a[`V}N' );
define( 'SECURE_AUTH_KEY',  'Ml@#!~x|AqtuZ%Ntz1{Z@7x`hC5QA&7d|nM?4@?NRiE^Kc[]hB<rF*{G#u~G-3f#' );
define( 'LOGGED_IN_KEY',    'p~q(}gp*USuD#E062_$_+ TR~_bg~yNU[^s5YZlT]c.gYR<SH7>nG-AN|Wv_oUJz' );
define( 'NONCE_KEY',        '^1iF#oIkDam$FsUR^o%1Ep$`^F!CLwd8`X:*>xt{WeL;Zmkxd=XX?R3X=<=z$h{|' );
define( 'AUTH_SALT',        '}]!u$5C;]-OW<,zB||}M7|}Q}e%Z9:asFk&IykYC>vAt-mwZF0%}e0>Et?=l:n[a' );
define( 'SECURE_AUTH_SALT', 'k3xY?{p_&^YaMXTbLVEb.o%rqFi;~jrw`t(6+]YYwCgr*Ja113}C|P&UA4*P+klC' );
define( 'LOGGED_IN_SALT',   '.2H^B]{_p&{#-C+CkK{p(k6w#?RJ_F@0#alhsVD9b1c~%1Z$hku;A0-[K;g,i2}5' );
define( 'NONCE_SALT',       'ONOlX(PF*z8wb*da$|u?Q5l!$Q(R,?RF.ApN/^f]xw2rIZ_J&ijjHkeU~y=SF@6V' );

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
