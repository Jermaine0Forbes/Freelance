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
define('DB_NAME', 'Freelance');

/** MySQL database username */
define('DB_USER', 'jermaine');

/** MySQL database password */
define('DB_PASSWORD', 'yurizan8');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define( 'FS_METHOD', 'direct' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'MS-Uge3yVSG`f%NjkbYq&y-9Y]5bmzFfy&z(}nm{|=2|TXY*8O5O5H#k0i-S1oo,');
define('SECURE_AUTH_KEY',  'J.M|;g^&$]Vse>k?GV!/{qqu|XZ_wDWW-ZsZ*4oQ-=s-e(5y;JzXI?^Z}#6F*aIJ');
define('LOGGED_IN_KEY',    ';1.#8Te/a>j}B q#{^&HFIw4yMo.a>}EaP$:d~K;+|]?|Y^|>^bDK2cGg<_==U~[');
define('NONCE_KEY',        'I=?,r401PoSeInEuxexe;5pB<G$LW&ynVui<-Sw4q){ks/Z<` .@gg6|&}POq++q');
define('AUTH_SALT',        'E(,d*K=-|<+6hq$h8O[-Z>~IZOn$8f!0hX9{lm!?v<P I3~9a?vPLZkh/_a!dAsI');
define('SECURE_AUTH_SALT', 'I4ocXc*|mTa?sI2Xc>_-7x+)H9W&D0w:^k;t)* CTI3X{A[nqax%1#E]g-_H-Me ');
define('LOGGED_IN_SALT',   '9fx 32}=j(L49?Yibt8N|XCwhF3qiE@vw)%k,9wSPsH1T(4H~u>eHvAi7^26P`~%');
define('NONCE_SALT',       '0$UNtR2v:e3c7}@MwJ| ajLF4@zKK }7xNR,ids,R2J@Ad!Rh]O4eyZc+dq>u<Y5');

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
