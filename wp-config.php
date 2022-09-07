<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shop-now' );

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
define( 'AUTH_KEY',         'Uw?>>JUNxWX)-*CA=KKOsaNX$iYbpz`$6!?aI)%eH[#~eDo;oH|T.}W t8[ZB%_a' );
define( 'SECURE_AUTH_KEY',  '.5%/$l6ddxHtzcc]TSUP`?=cdIg|f.gv#m2C(no9Eum7]J)Le5ej7)&Y/P2Ny<,y' );
define( 'LOGGED_IN_KEY',    '8>8`~D&f$XIb0B~x*?%>I2[<ClNA[>U/*>TygKq^<%je#U?m8:pF4fxT8,>K$`#X' );
define( 'NONCE_KEY',        ' }3Fm16}=)~?n;e_j)Umwv^=$U:r/Y_3wJQS;8ls?7_>zHK8Cx<K9HH).gzA{L0:' );
define( 'AUTH_SALT',        '(7h}E63s2DGU;q2g9?%HaNY(i2{<g0_9y~S!Vmd?2VLHTkMmQK3noiC%+J6~yt_y' );
define( 'SECURE_AUTH_SALT', ']?H/pr^x62>t,<t>`3vZX]`</udGJ(;kj$-lY?#P4vmUrXoX*T^W0HSSLTfxOx4m' );
define( 'LOGGED_IN_SALT',   'OQNFfalS;2hF`I_CI{32>`&W<R95iJe)M~op(b1:%E6dj7oMQMzkeKiA-cb*Sj{p' );
define( 'NONCE_SALT',       'Y(/_6MH6I1)G{bIg|zK:)T=q}w[6f9w}3PYyH~3NI]|U%9NwKM:$#>]jd8gJsj:y' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
