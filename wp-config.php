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
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\xampp\htdocs\projectwordpress\wordpress\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'projectwordpress');

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
define('AUTH_KEY',         'fQ]d|d.|+t=D4s]E?T02|}b0ValGu-j(1w:.3vLh:S-hR0]Id[j@afrZKc@*u|%A');
define('SECURE_AUTH_KEY',  'u03zI cZFV~[9K>Ru`}:[$&nLd}ssKGr0OB4zATVxAnecMi3zNhZ}nj6SgB|WS:(');
define('LOGGED_IN_KEY',    '(2GH*tuGA6T;VFnu-{735Ujt[d~*%U(C4(px3?$lVnv$z|Q2FH|dP-*1-50f*nyH');
define('NONCE_KEY',        'bL@~1t6.qh+OuF;y|2+K~B--P]ow-[%JL[2a*u6ttA#L:Q+hpro:mka?[JA{g`nx');
define('AUTH_SALT',        's|R|yj.s9f =6/WE$0]*r>}4(s8)(QXc>Lqm#)i>.oOah}KfRx/6n(sS5`8uTJx}');
define('SECURE_AUTH_SALT', 'JaX<-Z-BGR(uTg-%;9rO-a4,+-|%nP8BRMr^tYb>u*o$:.9XE.aR%_?Vy_zlg?o$');
define('LOGGED_IN_SALT',   '[)T[7lCvCH.?H^tp29pDf3,B~BqW9_6oc_<n+SD*mQQ|$$s$v^3bv;=s*P)vh_eU');
define('NONCE_SALT',       '=&AJ={7U+5BU8#O|88rW>?d$OOR~9&-|($t+C|T&:-ED=`g|gVenb|NYk32m<h3Z');

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
