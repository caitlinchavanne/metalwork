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
define('DB_NAME', 'metaldb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8888');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '4$bGgch`igm+1H#*zA@TgF zr%vM,TCC,1u7P?uLjt>$<aM~-|K(io!i}pqb`wxG');
define('SECURE_AUTH_KEY',  '/><8j++/|_+K2|&||;l_D<F:xvR2P |N.m5|ks.b@[sntfxRz:h>h,A-w$bEZV`s');
define('LOGGED_IN_KEY',    'xB|V][cA7zj-DK#f%h7w:t4EP[pe2-pxH$-Al#7(F?@5|#>OlyZ[J~smq-,+g^v ');
define('NONCE_KEY',        'y1FbRvXpCgRPQ#|j{+(,#-h,/2E91V|M,ux,F9wed|s-ENw-<w-h{eo||a&Rc b+');
define('AUTH_SALT',        '5dgfNIrp[j6Yce+<$<0HK6&*3@Ik^lH;3uWOAA}+3,G8aXpt4cZ}#w7bg![=o|Io');
define('SECURE_AUTH_SALT', 'v_7hk#$/^t1>/q9nNk{lVazn3-!t}OmrZw,|~,%}O}}k5CboWKnmy5;lTR4>yL|3');
define('LOGGED_IN_SALT',   'gOM`ekn^_l!K/OzI+CZi@j3L@Q>z#DgO;4AgdCdpzT~Y3%%?ecLM5#IlVb*sxcEf');
define('NONCE_SALT',       '-(.Mrp<7Fv,Y#r&{p3,I=3sWio4;eTU-5<z]oe-%x>p*9R^JwK)MEs`)(J@*FP18');

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
