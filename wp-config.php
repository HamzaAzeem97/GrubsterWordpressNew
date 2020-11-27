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

// define( 'DB_NAME', 'grubstar_wordpress' );
// define( 'DB_USER', 'root' );
// define( 'DB_PASSWORD', '' );

define( 'DB_NAME', 'grubster_wordpress' );
define( 'DB_USER', 'grubster_admin' );
define( 'DB_PASSWORD', 'G619F4e04@' );

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
define( 'AUTH_KEY',         'I3eo {=};8+s`bN/x8`Wn*U:{9y(ds(w/]f%GAdTasq5A^^NGD)`/7:wL`(#VC0f' );
define( 'SECURE_AUTH_KEY',  'w`&02|x41HQQq:c?f8EH6~!6zi#v1Q|H@eW-*? p.?(Y<.Bg)$3(oZR&%;.OuiA}' );
define( 'LOGGED_IN_KEY',    'JboYCuMR&;^1V7FhEdqr4A7>]QlY4T?*yQQQ^LyT.*1CwtAyv$h:L6hH,iW00s~b' );
define( 'NONCE_KEY',        'wnOd{e:xTIl?~V G}EGEb6I:Ym+}3IgG.KQK 8[E~G6coe[Y36MgZ4Wh_v|KPbID' );
define( 'AUTH_SALT',        'joaPp8EuyRkM.H&=Q<f57gj2juk$aAq&1g[9C_]t6[XiX%Zp8v+r9@3Vn)wVcQr&' );
define( 'SECURE_AUTH_SALT', '|($_U]]+x7-?Y6@$C<2KFbA!wW$dw4oV;q|<rWzUN~FM6+rd)2.=?eL>E1@Qv&]3' );
define( 'LOGGED_IN_SALT',   'MqW%uNa-C7)cE+U<n>$Bec*<Z}Tb(2%P}&Urk91MF}1]Qya7tS)x(<d[</tBLh9c' );
define( 'NONCE_SALT',       '&-iiSXl.XYY58+As*RRP`jzn]haIFY)~Du6!niBx]{0<=qU-L-CfOlgHtt!Cij{$' );

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
