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
define('DB_NAME', 'mysite_db');

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
define('AUTH_KEY',         'U;9A$yz%ls<RcG8B87,qeg$Eb,EehkF}Z=(FROI-SCL#N[W$5C3%=j|hDfD#T@:@');
define('SECURE_AUTH_KEY',  'XghhuGd`s|51Tk29Z9C;}/gkXAi?JGs.rBX@z*Nl+qI@-L:L!V5>$ :-i6St&s#p');
define('LOGGED_IN_KEY',    'FcdDCl3DUK*~}i{A]bB{uri,6w`u)>oXI~]zJA|Kd.lNm3eiIW(^7=#[QQ37:z--');
define('NONCE_KEY',        'Grs,6ZX+_(qK[=mvxJqs@UB0LQ`8d2Bl+wL#25!%^Bgd_^)oc`_Q<KU*Ts7nCK90');
define('AUTH_SALT',        'WyW@dQnl$m2/RQTtW2/9LMx38LQDkATM{TlJ%;9 s_A.BO%L]m7]$3J^1]-DKiob');
define('SECURE_AUTH_SALT', '1YWA}tb(Ws>u#F-bKo%&riS(y|j@j;IPpJG_J|V[w[ANc+B+XrY3XN/VsBqU1ZC9');
define('LOGGED_IN_SALT',   ',<;}=*1HSM.T>!<$EDGV*l/6-3gEu(&*!@N8$,e@Mu?_x|4VygG_KUY:T2?_?C?2');
define('NONCE_SALT',       'f[` =YId`ch^od!Et:4|,;Sxz|=;9BDKqA-9;Rf>ePk->s[#5I28$T)hfSNKlpSP');

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
