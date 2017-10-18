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
define('DB_NAME', 'wpAngularSpa_ii');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'kamal');

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
define('AUTH_KEY',         'vbh<.!~*Q#Jm?Ks2%dsU&3dK%NBRoFI/LG~]pt+|%OQ8(_E$y:ADfN[2~ahNM,T]');
define('SECURE_AUTH_KEY',  'yQLLGLV#=sgTpM~)A$JF(/,kNtT53mDEK>WI. &)o$V-K-b>gq0E yd^=5f^oebx');
define('LOGGED_IN_KEY',    'pGV2jA_`:auqIYk47ko?033k%)q~`*iE(6gJlqWR!g{$8]N^?b4qk{^@.{PxamG/');
define('NONCE_KEY',        'J/;&a]{ZK41.Vl$LU?_5HWGRFt$.*=]BvNOa<G;osPp8Drl0A~LH/{<g3R#SAx.B');
define('AUTH_SALT',        'sS0~cac?x:SprpT#OJ[c;N }H,M3XcBK&l(S8iF*4B9MmHG)s{)%}!<vAq tYDku');
define('SECURE_AUTH_SALT', '/K1 :8=n|dAu(<p,Xai!S|tTzPi]K4JC/crh=AQn@S4[s;D($EVret^~Gr_]AG`r');
define('LOGGED_IN_SALT',   'Eyc?2z7dc?I,8/7I:A[o[Bg(2%Sp> l@ALbq|.l&v7IYEEWq%6V1H*h3iN2U{l*Z');
define('NONCE_SALT',       'Zo,rIKv~$FVuFlpmN*=uC.0w[H{-w{9uT93B:x<N7UpTl=>Y;7hpAMON2+W,@2JP');

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
