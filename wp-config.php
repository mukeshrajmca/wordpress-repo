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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         ',lx.=+a/kTD!>X-o}3a(:%{;  3`H<zS[4Tw!#>W;SF1CuYgiwU2mm.odc2IQb@K');
define('SECURE_AUTH_KEY',  'm}tRn2Dx|8-5lQX%.C7>tRgv$dx2aVJHE/#e0Y,Wt<2J-YE>/cZJIoCMTR.T0tZN');
define('LOGGED_IN_KEY',    '^g{!71mee8?>k159wKa}$zXR6D{vcNfN~%M$7:HcJJT<8:^?L7pJHKs.`Vcuilbf');
define('NONCE_KEY',        'MHGe]hkLf*puug8+S@SrPDAgzQg(0!Em1~-><J,OMZ`?[pSTQNEhbQWV(i09tGjt');
define('AUTH_SALT',        'Cq|~d8bFicN0=TCq5[ya|IyZkohsmi7bxRzHk4*WMT|s]%!n%6`}M#+%Q;{EJwi ');
define('SECURE_AUTH_SALT', '])XGZ}v QD=V](?0!Sc/NY^sR1l`5;T>T2VPLEMPM.XOXITlvA&+#(].q_9]IAEu');
define('LOGGED_IN_SALT',   'B/^8ct32!j]!X %1-%mwDuj6<Q)/QKO!ehaqMNkoITFIsjvzE.vV}s~z:|=zip)2');
define('NONCE_SALT',       'YD,[n`x[fqIm=v/Jq5Vn%S-`kq6O]`yc*ZLE7:^/GQ/mZS:R>E,5ch!#&g`X2,rr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
