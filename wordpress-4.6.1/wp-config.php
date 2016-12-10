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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'bootman');

/** MySQL database password */
define('DB_PASSWORD', 'xRpfXzjtIuQmUKax');

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
 define('AUTH_KEY',         '`iCc[O`-U% kjGA+lA5{C1Dh_<70>yZ/#-%`pXl_[Xq!4?Hjs)_z@.kQkW{-T+~K');
 define('SECURE_AUTH_KEY',  'w-VmBWf9y>6#`#ZI>9S~!lG0$*4X(*8oy$vAjvy8jHdu%8yaEiuRTEb-`Zda{p].');
 define('LOGGED_IN_KEY',    '8eu(@4UC72S>^|yuz$-$w6p*j0LFD)$lZifm,:6`n~+HbSHZ=k8O/P`_9I-Q{h9,');
 define('NONCE_KEY',        '9_;?}Xq1#hE+U@4~:U.GY%-Z0f[~}fjB@KUJka/Qd_x%RD:ze-6p}lxIC-I^C7Z`');
 define('AUTH_SALT',        '727SN0#-r|?I7Vsxf.ULV/-|]oED}st-&D$m6<bhEoqx;< %&%nVus)R{9A51U~M');
 define('SECURE_AUTH_SALT', 'H3rP}KB2.y^.|srI#| 2<4(,>{=[&x?WW^<aL)v^DE39hrH%kqkg{F^2GyD-D*Z2');
 define('LOGGED_IN_SALT',   'E8-_-=u@?}7I^}bCQVI~gV2g)eMnIO8s(y6ha4@/*#q-Si4w: gS+yo%,^@l-q}U');
 define('NONCE_SALT',       'gmLyaI-2TU9*|_x!qXf^?kYPL]7!Vun*KVMgM7fG.cE.Qc]Z[ts!IxyCdp]%28*?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbbs_';

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
