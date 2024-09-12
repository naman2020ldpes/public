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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'jGlyXXR.o^4?| 4])7wODsoOn]bcO2Jc#n}C|(j<K%U3g~&h3GUOWiHhLw5jR|xG' );
define( 'SECURE_AUTH_KEY',   'Lw}G0QvdWV>;,iFw(9!3I|?C2Ue~~b1z`9BGFJ#1RO4T2np=+`,$7vk.wmt?>Vp9' );
define( 'LOGGED_IN_KEY',     'dw4xY<<bcXdwYCf<ZEY@OsvhM^kVEhiDsFGRHn{A}UszQ::e2{+8G2Sk7#xI>u7&' );
define( 'NONCE_KEY',         '?_?^TpAf@8h tCtx|w@y+TtVgC$[F`UXLhKhz2zK(0E/ARw(xuy|,vs,$!PKp;Jx' );
define( 'AUTH_SALT',         '(f*oh%QH)C1yoei/wwF%R~IDc]bzNB2D@e`[5r@4s<IYs@g5TZznLbn9P8F&h&N3' );
define( 'SECURE_AUTH_SALT',  'B&vO;U`9oK<$?-$5+kn|:kDJ=8voGmkV 0!zqQV}P1U&WV?Dei`di[<LxUU6cNB1' );
define( 'LOGGED_IN_SALT',    'G7VELQG:-h3*/Y19SV)z8 e;EloRn$/-uZl7Qhd|I,HBy+ob=PhC*4UJulk.yhm/' );
define( 'NONCE_SALT',        'z,_(vKi<$%wY->3{_,j#}:l;$Vt9M_[ZRlBzS`wm|nWn&(X^?B{~<F-I3_c!sya:' );
define( 'WP_CACHE_KEY_SALT', 'qiKGS>N8c33Wr&xlb;tplh!W,|eRew~+iC30z$EiX;ppRUm)>l#~fO,%1x*#cYdA' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
