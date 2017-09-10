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
define('AUTH_KEY',         'h&ng9[FUFxy$>H+HjB.rs@(nda&!1[+Hle_5~K,cx49=!ClKH AQu3Uzmn Q^cT^');
define('SECURE_AUTH_KEY',  'kR`rh:|EoN%L~I8{5ChCrP@ODqhZy%oU9U%}@qKhkH)EU.d:t.Mjo#7@}qc0]<)F');
define('LOGGED_IN_KEY',    'zG/S(oSM>_*G:EZ^(c0?s.UEY+jjn&?nA]M4i@Vv3&?pBK1B[zrce=AsD#2DOF5&');
define('NONCE_KEY',        'uabO4fI?~>U0vtpf&p0OlzEgv|*jK]+LQ>BYDmj_Vb Bd0ZN!TwZs9Na:)x^]nyu');
define('AUTH_SALT',        'P&(,M|ySWQr>iEqXUo0$ZtS3M55%IIg*%T9|k,8`;283(D=(m(A=t:GSDLj]l&{6');
define('SECURE_AUTH_SALT', 'TDvKmlWn`Y@+]Vy&p2YXmn^$hOFx Q[9OSq(E_`?d! 8A^1R1Y`yx~S_r2`0k(7/');
define('LOGGED_IN_SALT',   '9=4X^/7{HYZpkLOI9~nJd:_kZg H#R=5 `m6=%|R6L<Phk]NU,S2<tmiW90 GR0>');
define('NONCE_SALT',       ' cLs{(4Ylqtxf?Qhnv.~=QAo!_I+-zx,O[!!XVn61V{z`,Pha5p. XnJ*! n^j{q');

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
