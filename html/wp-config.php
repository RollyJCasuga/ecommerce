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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'liveeyedb' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hRSP<]n9OD9)Zvn33~u/ynzrct(@i3Y:RpeD{Co.x^2@l5]l%s |Id^|l-}!]^aG' );
define( 'SECURE_AUTH_KEY',  'Ma&7cC:QCpEhhyLaE)y`uGHp61^DxIAFi?yCC)N:X*fW9lVE=]VMM0I~aRI6}cGO' );
define( 'LOGGED_IN_KEY',    'zNAj=sw|9>xy`tPzz=1*[st%,m,yRDrn[Aw@F#-]vYLHcx8we?3/A_;:<Xp?xV1n' );
define( 'NONCE_KEY',        'x~q2QNw)mUVJ2oA@XS:esi0LGIMQRQeC`AiC6`>?SETkfYAzA)U8j|l}*_R5B$bq' );
define( 'AUTH_SALT',        'GUUPI+T_/KRc@E#?2!zYEHp~>>|n#`F4`<}{l:C^A*mU@?lJ(R%^.!cGm%/)_R}`' );
define( 'SECURE_AUTH_SALT', 'Sw _g,D/a{<Bbw%|mG)OR?@y+~kjo}m=}Y/xvN3lr;3q?zf@4>lTo!F4T_!Lmrvm' );
define( 'LOGGED_IN_SALT',   'G4)jsJ4L/i6pI^Iz24!`OU@kP<Eb)YS-G]GE@)6jDE.]|?#wg[TcMxfCzVYeU>~C' );
define( 'NONCE_SALT',       ':%L6SyTpGc]bp,DAX4;XZZ>.0,OkyenNR()d#HKGe!ib${7-jw{rED>1AS%bM4ye' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ID';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'ftpext');
define('FTP_BASE', '/home/pi/liveeye/html/');
define('FTP_CONTENT_DIR', '/home/pi/liveeye/html/wp-content/');
define('FTP_PLUGIN_DIR ', '/home/pi/liveeye/html/wp-content/plugins/');
define('FTP_USER', 'pi');
define('FTP_PASS', 'raspberry');
define('FTP_HOST', 'ftp://108.184.71.172');
define('FTP_SSL', false);
