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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
define( 'DB_HOST', 'localhost:8888' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** define('WP_MEMORY_LIMIT', '512M'); */


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
define( 'AUTH_KEY',         'q5L8 0IX2-i{$$554_R/G.VtZgAl5`@?Jh:ZXC43v>0#XPa|vbTOV+MuYN~_1V6*' );
define( 'SECURE_AUTH_KEY',  '?6)O8KD~B]-wDb5^O&@.Eo-?r4rz:lo[PI!eUrZ?uS[~Ai;BDM$&,DG`lA0&e5x~' );
define( 'LOGGED_IN_KEY',    'o(ZF/f}9nP4J`s+g[o|(ppWg<Jk*x3&qy6_NQ556uT~+7bRLzM`EI0<c(aY$wBIm' );
define( 'NONCE_KEY',        'uD1du;!=kEv-p*|r66*U)^#*,%a3({5^h_?LVf|}Zi&ediX3;pAK% 4/74|a|XXd' );
define( 'AUTH_SALT',        'TGApM$u=k>!Ka?Y6a#eCt#[Lnu/%9InsD!ZQ!oUbhamW~6;PHtj_K2cxu`F!sH 6' );
define( 'SECURE_AUTH_SALT', 'CmntB7Dm{1^z}Kd*y1r]NhX6D~3ID74RJu.cNn$ol|hd)-]Ijc@G~O#|@S,G;#c=' );
define( 'LOGGED_IN_SALT',   'd /YGyaBWNVIKlE^jLS82*]/wn$+E`-nD,.T]P@M&I%m|tOP1wPD]0/&;jT%nk5=' );
define( 'NONCE_SALT',       'I-.WN/II-f(;v6@C(sCI:a?}T3lJrC&9l;ax@;/)xT{Uv=AN88EN s69-aEA$w69' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
