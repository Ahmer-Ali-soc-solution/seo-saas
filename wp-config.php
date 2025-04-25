<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'seo-saas' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b.BZW<l`X?yD(7^O|=MI+H9dzd!-K~_lV+#5-<_Qf!ERG+@Y<4OE_0.AV[7xSe5Z' );
define( 'SECURE_AUTH_KEY',  'l_YJ(a@H^-qoJhz=3BcV1$xaTI.X7V].zk/T7-tR;!uYP3#LmY9~$LF)YyPVAXIo' );
define( 'LOGGED_IN_KEY',    '>H-MkK}GD]j!^an8N,?8{C+ga25;lgox&i!SA(gjClOT^d!S-!HS3+u<S:i[~=&?' );
define( 'NONCE_KEY',        'JmX[r%FggDFHJ,hV1Es$~(@jO.u~;`$_7n&@Mn#1@MgH<)~,Q,6&zEE,IJ^P1N:s' );
define( 'AUTH_SALT',        '>7~$T_X$(wA[WI)!|/g8h/wP)h~0p*P8^_GyGl58D}><C+Z/r3:*(xaZ?(2wcqk>' );
define( 'SECURE_AUTH_SALT', '`4m/S^0(l[xtVS?3Bk [jsh$PiP9Y.wH)zLQaxuH?4$WU-cFTHC0`_^)1~%c/*h+' );
define( 'LOGGED_IN_SALT',   '#DA90hl}U]^2o350Uq)gLQgQF4>e`xo==5eL+&?lZryjz2&H9^;p<;``9d1}|V%H' );
define( 'NONCE_SALT',       '2^DI^ f#f&nmr(.5@ODio%S2vebyova5ZOH|OW_!b]%Yz~L#}<k/oBe):Oe-3cGR' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
