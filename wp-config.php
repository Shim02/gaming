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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'MHko1GDEp8EY!+DxI/21gh@c%nR2OJ%b8q|BN=.|Utirfo/7ma>|:2ynGSi<A5ct' );
define( 'SECURE_AUTH_KEY',  'MAUK61.^Od@w,jP{_&Z&P2@]JC]H/4*7:=6d.zW2{)6+;gHZRNBDaY|ffF|!it3i' );
define( 'LOGGED_IN_KEY',    'wk2x-?F]/@wR0u/?+:jmeO.vk(xc*#q_2h{CGo{np:&Ykit|iBNWL +!9;7<P4[I' );
define( 'NONCE_KEY',        'hFc^.:;Oy WxCsRGz|+4~I|-Kwb>$iBYy6lHD/:3Y2{m+Xr>>u7~lL?.8U45Nmhs' );
define( 'AUTH_SALT',        'w>x?eJ=#_y> #Mjx+ VZ.;sj39Fp>QDZNO=Qda}&0uq>ef++7rq6V>V_~mh`.x,=' );
define( 'SECURE_AUTH_SALT', 'VLhFY=Lrq?,yeJY~%ADMRRyixp<b 4m7Cs}x|{eI787S%u%8~ifAH6%6Zuju0Kcp' );
define( 'LOGGED_IN_SALT',   '$HkWU,$~Y-f kp7q|5HN$~_&IAqFCpl6sDG7+k.k}CBIm`c?.eG00l gcnxd(F[t' );
define( 'NONCE_SALT',       '^i9zP8gv+FdWTqzW)B9-&<mWMLgse_^ND:W^k5!1`_Qs$P3Va{Gm5dHfHTKixKK9' );

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
