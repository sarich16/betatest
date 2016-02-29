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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'scratch01');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '74Y1jQE+UTr.|bv|jYkMIE&lLR`xql|hWiYVxIFL-|[T#WQ!<+5)2+/}w;k|*iA?');
define('SECURE_AUTH_KEY',  '}Amd5{]WmXsP2v!i,ZWD~S+;]X8;Pc n3[an][I{5Y/;x^jjS3+>Rp^3.R;e1H&Y');
define('LOGGED_IN_KEY',    ')xL@qX:PzE~$s#K-+h6Z,|gVM;Mc@f-LG-/x7^<)V:)$(tYhVmQq?Tep7m%pDX7a');
define('NONCE_KEY',        'n.0lo*L=id3_7XH=Dt+$P)!P@O/?0Zm7l^ b7s6duE6_<ksFzQeQgxUHg1)k>LmY');
define('AUTH_SALT',        '8lY<2g{-5`MK/m9[Cb^-e^|n2A|.~pc^35tv1f9K>9/(Y;Pp]mbNlw7m.hztc0Jl');
define('SECURE_AUTH_SALT', 'wv%$_GG+K&ukgk$5;{yf7{58s?%}pvXv1&&Lc:!t_L5&1.|7^yWB|phxtehl9.VZ');
define('LOGGED_IN_SALT',   '}v.|VvD}wJ~,lteyQ&dmi:>t<D[a7NM)H1H8Cm2ASK47N$44U?6QHPREwUK_E]NR');
define('NONCE_SALT',       '+%uDj7Cr{>Cl)7-tDr~[Z[re7d11mNiRXw9d6k^ZdSgy|x/.hTcs,zvL232^=Rt#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'scr_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
