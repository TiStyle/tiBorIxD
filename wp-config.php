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
define('AUTH_KEY',         'eP]+QV/=:1n,F=`@E/CJTMRhT*J5.c;/4r( !hbK](*;F$*:e(#J,?5$*7!)FYlI');
define('SECURE_AUTH_KEY',  '91O+8%Pwoep%LL!(IC=].wlZ`6SI^AaIN40<3`+rH#r!+yRauBg 8g2O;8+UeLkc');
define('LOGGED_IN_KEY',    'Cz5S4{~#5*/;w*oa|]<S6f V[<Or+z;UPzNluSSt+cdf|#BJ~cQlf&WRSn:kTvwt');
define('NONCE_KEY',        'D[*~!4}E?6l9$!{yJyEBq#a9+q):`pqjFmqd0!oO4aD!nN40D?a@7Nzz%s.0+K,n');
define('AUTH_SALT',        'q$NO76aZFMDh*He<.[18S6;{zr;|-D?giWM+Cgl<+AaPNe+Rj+TUO1&<a+>Lo#s7');
define('SECURE_AUTH_SALT', 'q:^L*Ob,L-3Pq9-V<Bpi6B7-6sb6Ze>;Jpdo8azEg8K3|b`DI5uj^NQxSKFvYwi/');
define('LOGGED_IN_SALT',   'baGAt]se`Y~lG3z0jg||WV--8yl,1/4$IS9_^8Ig)jy>{,EyNfIKA&YM+T%GT5r|');
define('NONCE_SALT',       '/?&.[Wg9U>5JEy&-98;R|~-hY5OT.gwd|V vYw(L7dQw<MdMq;LL$]k{ET$:OaI4');

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

define( 'WP_DEBUG', true );
define( 'WP_DEBUG', false );
