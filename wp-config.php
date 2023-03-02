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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\twilightbakery\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'twilight_bakery' );

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

define( 'JETPACK_DEV_DEBUG', true );


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
define( 'AUTH_KEY',         ' dAwAW5bMUZq#<[9 lG} z*bN)L2ZCL+HXX~$y_kMJTZL9=].p5xf>0CMNqh)us2' );
define( 'SECURE_AUTH_KEY',  '!/zl:f<TwP!@Oxn0TI_pcvR>P5ieJ1c`6HMq&vS$jkop0Jrf6%Y}g>nPLA9$RoDo' );
define( 'LOGGED_IN_KEY',    'o&Bt{T2=?skRn3ko]MqZ|L_%cCZYI!75ax1%#)I>@^]!&jXk9Oq&lb)OIaG}$ HB' );
define( 'NONCE_KEY',        'iEj|Y=V1)HY.Yd&t_3!zvDT0) ;iY__yY/@t,l!_QQj#9J4DZcH$W961~)Zr#2[}' );
define( 'AUTH_SALT',        'PYqiSmq^fR>6)1*Xc{O&m?UMP=5<%3_L^W7)z2:o@nu~T8I<JBg@>FMVC|R7HC~H' );
define( 'SECURE_AUTH_SALT', '5yC>+Y,t9}Nxr+&z L!1jX@NK5Zwk0+!o*+]W*:AWS*22(Ya bF]nxTh0htyB}((' );
define( 'LOGGED_IN_SALT',   'Xnw-~iC@!{=ko`*LAe[IBU4v;PDAlf<Gt5t]>kohPpp0}#rN3kcvormEz-LQZxC#' );
define( 'NONCE_SALT',       '!uFcf,TS~cft`U/fqQGx4-%&h]uarP//rDM4E/TwslnA,{29EY.6pNo:lk?/cmNR' );

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
