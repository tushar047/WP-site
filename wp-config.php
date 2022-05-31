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
define( 'DB_NAME', 'WP_db' );

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
define( 'AUTH_KEY',         '>wi5K7g6VW^~2kgKKqBUDq.8%_3&T4bpcVIn[O2P-CX+8y wer+2[HRU-<Ilj-Lp' );
define( 'SECURE_AUTH_KEY',  '=;zTI9suT/}cgR}CGNuO.Z{z2IB/-::=V_71$!O8N{z`JpGW~u8 Zc:j$bV;Kd]-' );
define( 'LOGGED_IN_KEY',    ':.yL;<o02kp+z}m-C8`j{3/7&Z#Arg[eHa *[]Sfe?T/{ &WId9Hg}{-&?(c_=jw' );
define( 'NONCE_KEY',        '-j>E.,.c.79~:S$3m+#>u:t# %E1c;)*Uu?.oG5M+!kwNJOUIQRZ+G7[2.rWdx,0' );
define( 'AUTH_SALT',        'AR}9x.18XJ7[j^G2Aq2`4u4pAXEhICG{BLa3FV,SKh.Dq @f!LGA2=?M%`)Q!Mt=' );
define( 'SECURE_AUTH_SALT', 'Ac^C3cHOEDf[lpVT)JTuK_#q4|pe9$]-U!wlroP#giCuon;aH^(EE%9q_0a91P)G' );
define( 'LOGGED_IN_SALT',   'eSjxXv$JM[sg1#$Sl|r1X`V]U3Nco5>-AOJund=2-(mBy#txBm{=PSGwnPyqij50' );
define( 'NONCE_SALT',       'zNn<6;V#}V @Eug|N91Guuu4-yPOI<i`LofKQjtLc:=Qzqgf#`fZ~?{qx_< CF7[' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
