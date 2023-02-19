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
define( 'DB_NAME', 'first_wp' );

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
define( 'AUTH_KEY',         'smu8:bCWHRDY0g_PJkerR+^&Wag^RirpHR=5`rI@^,O8y=VOrhYY>B8JE?5gL9;&' );
define( 'SECURE_AUTH_KEY',  '|Rn(~bq1g0mLxGa6};Rpx]&VV~TiWf_J{.eX*wj`!1%Q1l7 O5`kOkK1pj9_mcv)' );
define( 'LOGGED_IN_KEY',    'n3L][`^[]!|furuRTy33BrPN<7GUw V>]oD}:#ijr @pi2,U:Hna:R@v+/v|o[K/' );
define( 'NONCE_KEY',        '|NQ3.)Ad86e~:.s>#l2:#w<GoNd0wMS.SnNK?u2H)G1[6CYac&4-XtdR 5kSRESs' );
define( 'AUTH_SALT',        '^!]ow@{M#IYUP< 2|4PP/.(C34c?yKT&X)dyVx% M.gn$G 9G|}XQ*29sZ8bw&;?' );
define( 'SECURE_AUTH_SALT', 'PBv2$6zP0R>MW,_3%{{+1`J9-_)swMnVH0^3tF O3oB0lF:9sL@DAG-#<$Rcs m5' );
define( 'LOGGED_IN_SALT',   'S(|XiI86c4B*f(XOV`&r^_J6o)}&#3=xlUiFW2J6_{:$*;2~]lK!iNu$91Xp:#hG' );
define( 'NONCE_SALT',       'o^VN Y08*-tY7w7@bcnRtC=JRL0%/}O~ux+q*%^;~D,Rzf^z@U)O .d7za+{<tH3' );

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
