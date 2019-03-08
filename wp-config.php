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
define('DB_NAME', '2019-veille');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'kvO<9*0`,x$YDdQk( I>X.,,wbNJq<b;`1PMW-[jAM>c -]P{f8`qKIK8@b`f>H8');
define('SECURE_AUTH_KEY',  ';l+je,iP.*}MoE 1inQ:NZcAdeeB~`+6&/%<I_3ol(!}WKg/JJ8F`(1%Y_J-e6HP');
define('LOGGED_IN_KEY',    '|NZb eWjAR:d>[AF5g]%a9{5N-s[zGXf(wq(w}4t8_K2V9#$e%Z^`!=e0M +EL+1');
define('NONCE_KEY',        'F[M4hY1U&szg} QFSIyxNlx@C8;Um4uVkl,I(CpuA?%~bN$Vg:bcB=/h`F>45a/{');
define('AUTH_SALT',        'bWmSs96) 1f)WS=%nI!>,n)](%?c(#zZ KXtIYx3}}{*y%`J[wlKnv2/`W(@tn]3');
define('SECURE_AUTH_SALT', '#F&~oZ=Ww*&xc-MA{M26MAV+(&_B[dallhbf{g;9]pP83AMkH%GaSE9EV6m|9Y{8');
define('LOGGED_IN_SALT',   '` }d%J_S{wFmdLc+oTOmr$Ef0+#kSHOU{:_iZbU<ziqAprhBDs6!e#S8@S5T;[3T');
define('NONCE_SALT',       '[)nSQ||2-swu?A`A4e-mC:[41u0@M:JB=[ywXx]4iYCK__iBI|0ulJ[Nu:7kmY@s');

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
