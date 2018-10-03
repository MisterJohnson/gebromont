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
define('DB_NAME', 'gebromont_wp');

/** MySQL database username */
define('DB_USER', 'gebromont_wp');

/** MySQL database password */
define('DB_PASSWORD', 'YBlVvrfyuIW09J1jZ7qf');

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
define('AUTH_KEY',         '`)e4u_i-h^A>;0,FA5dU@e/*dHp]?ywp*spET0w_!Ys,~se1=]lug9md@MDJ|[e4');
define('SECURE_AUTH_KEY',  '6xopqG<v:D%:H9cD%r5w&sDSkaK=$Z{{&.XVS&pxL1#Q3%0ozeLRDKAxf/ZmS@xQ');
define('LOGGED_IN_KEY',    ']ft$D$5 CqAB[oL7Qt/VssxD4)Hi)*HJYi%`^$dfr/%vC`Pivasi:o+#dXfkiW*y');
define('NONCE_KEY',        '?J+GZ5nc%L2Rx8rtt3rk Dv7j;(^Uv9N@B1,n9MDR4ZBZ<ImFGP.{mKpDT1}vNWl');
define('AUTH_SALT',        '*=*^qqO+!S.Kw:v-&[H>qZ+NCSQE ^9!s)_0&!D1M7OnZt333iQ,BJvgo&~0BU=]');
define('SECURE_AUTH_SALT', 'H[6okH_o#Wh_!T:D]Eul??$}n!{~;0*&8~j+$`I#l7{mti8rV%b)X-}7*h1_1OBq');
define('LOGGED_IN_SALT',   'GHuH<J)V*F*|}>x4!< <e%J(HDC<_|OymrrR~V/moBcV$!uk3H?hRkPMKBEH,mY#');
define('NONCE_SALT',       '@e*:XcQ+)iBOS*{.l=%TAQ[X7<5Wgv:k)sG9U<.0rhjDNT}h[cp{4CeO?%O5NsF@');

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
