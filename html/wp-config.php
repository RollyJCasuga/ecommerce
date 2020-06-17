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
define( 'DB_NAME', 'store2db' );

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
define( 'AUTH_KEY',         'Q_WB0H4;>ZULfH$y4wklrhsG~=*99OBQhf7:ikcyUm S4#YdRp]:GgQ/lnJzHyhp' );
define( 'SECURE_AUTH_KEY',  'M2wWQ*u~&d];G35|)uR45ovfKuhI%Jf>J:7&y>]WbM+UeB$Jjvj:dacl_7c8B$fH' );
define( 'LOGGED_IN_KEY',    'B9eQatxseCsCJ7;qW|&F_It#UujmjSblML59As#Nu<bGctTZ5Qk_wm@u,p<:P`O:' );
define( 'NONCE_KEY',        'Y2W4Xsbr|gi<ebXJYj:(mW{:!XL3g#vkCtc{mPrDRXs[XdUtfAl|n]mOjYIa_LW;' );
define( 'AUTH_SALT',        '8itvnD577]~|jsC 0Wzkl)/UX`?z$*Lw9((5QC|Ldy76O1OQuK6&&Q)6fL#BE oB' );
define( 'SECURE_AUTH_SALT', 'YF77P5eo8`]NWO~v(-ljXNaEYo8eI~]W6$sS^V&<2Anp^hY?8s&G94?2Wl-/|YcH' );
define( 'LOGGED_IN_SALT',   'sald9LS-^F[w+ BZ.lu{Z(]v-}ko~~9Y}.SM ZtqqK<5P2_U1R,jI3-YM1X%,hRG' );
define( 'NONCE_SALT',       'QD+jVz]&$G![2]^EZ+mPGCdjS+RD:?_Y^bAGX}=Oc[:!SQC{v7+=9SfBk-4SZn`+' );
	
define('FS_METHOD', 'direct');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
