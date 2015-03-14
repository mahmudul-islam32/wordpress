<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mahmud');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'OM*qzeQjGI@,#K6Ln;&<%J;0S+QeP>g%OD|m_-={!}A2)i26H@JDTZ;gO5@F!dj{');
define('SECURE_AUTH_KEY',  '4<ROL+Sa,u6?H1BC+-h&[(x_+X-T|;hElwrA~xzXG;^Q5J6|_Y;YE3UmT^f:K]kg');
define('LOGGED_IN_KEY',    '{]fe$F7wnyul Q$eLj_uVA6-{YfJafca+k|37AO/g9#Oh>YqW=wnU+~F-ztP1+m,');
define('NONCE_KEY',        'F-/:;l-XG|`iA`wB<9YecPQ=u.``#S4y=bhd.gIg@@Ef}&(T1);HyV5pEEu[rLL/');
define('AUTH_SALT',        '>X>aT`$vVs+`0%]Uq$y/olpTa{+W`^1v=pf:D Ze|7O=ey4Y>oX*1Esm]WdZ}N1|');
define('SECURE_AUTH_SALT', 'Ru|juM(2k_`:@YdEX=]&x0.?tImk.26UI|T|,2z]T2D A~Zjp-?yw;$kh2ZwiIMP');
define('LOGGED_IN_SALT',   'v@OMx>E9K-SwG2K#k@+>bbj8Xf<&uPc9q<VQqS$#(nhyM/xN$*[QY$mBQqqG<K*p');
define('NONCE_SALT',       'um moK<n=RM1=$*sAZDWI8=#ctn>c3gNggA*j~om*I5rG;UO**yXuKdLm.Vk7I(H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wordpress_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
