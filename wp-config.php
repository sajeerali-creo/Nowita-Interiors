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
define('DB_NAME', 'nowitainteriors');

/** MySQL database username */
define('DB_USER', 'nowita');

/** MySQL database password */
define('DB_PASSWORD', 'nowita123!');

/** MySQL hostname */
define('DB_HOST', '');

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
define('AUTH_KEY',         '&XRZows?l3<d,hPtv=QcaWhS-%53EXw,EQtp[5|alY9Zc;36`^B[46*0)QF/FtkA');
define('SECURE_AUTH_KEY',  '?oLXBRnFZEJ5cX~$L4ME0(,M5cd$tRe8q$!ovlvYjFE%zf6W0=L0`0rlPB}{~_U<');
define('LOGGED_IN_KEY',    'mm@NRFb,QKO1HKJf{(VIFNW:];rG>905 xT6-&LW#u &2fAi7rHI>jp2K9rNRzSt');
define('NONCE_KEY',        '|Wp]G;yhO6=9PA%5><I9*mfaj(nwT>*X4dhT_NUA>S8oi@*1}=6L*Mvg79Xj$%n_');
define('AUTH_SALT',        '.*:S7AuX~OQY{!:%j|L?VWc~s}#fV$YD]MFNwO{FKd.<Vp*1nZ@)4e5)#pcq.,?Q');
define('SECURE_AUTH_SALT', '7_!3qMY,w^%<Cy&I,8x}p_&ie$;tO$Rs(5bEP&RZSi $U~>pz2qL61pS{R4KES4V');
define('LOGGED_IN_SALT',   'I&=gtVkd!6Wg]eVeE;@}{#$x&~XHff$TV|-k0{D=/d,}_N/a?>4LWWZ>yjDkg{/D');
define('NONCE_SALT',       '(C#ug:H9|nA_ +aF3hQ)q8Ids;#O.@Zci#+xSSN=)I ]KUnRwf#^u/jE_*:1a&S@');

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
