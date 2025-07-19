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
define( 'AUTH_KEY',          'x.{4[1=c4Lg06K7]CVL7G?ad6|csFpVFdF4.856$uas5NUp./e)hpOIk<*mVWvE*' );
define( 'SECURE_AUTH_KEY',   '4N[&1<cHPDq268;T+1mi4sj:5m0x*ZnDm`B$*g9q(#U.K0eE}[2^>,{B]OT9TykD' );
define( 'LOGGED_IN_KEY',     'w.yEYoZ7fg[G..SdR9ODo8nr=e)0honOcV9v4CySEF~uB{Mj+wjT*x25#B3/e0+N' );
define( 'NONCE_KEY',         '@%%7]RE~OvC3K&:yn,lb[<E ^2@*ZU?/fFEO!_ua057v62w60q@bkQR#L#oq,fvW' );
define( 'AUTH_SALT',         '@@sj1%wRP|CmH&MD4Ak|H>MC<[@#G;lj/-]M0Cx~@m2TT1^$Yey6W0pgyo>=S<0o' );
define( 'SECURE_AUTH_SALT',  ',:)=&&(B+Nz,]waPsd0L(]CiA8doovmAf}p:vLQ1lNEBz?pgppsrgdCZqvS8<,fg' );
define( 'LOGGED_IN_SALT',    'hZ7YUU:^9IL?*]jU|u%]/C_I~MSmpO}(L16|)Yg{T-A!`Ce!|a1j9B>aySKC}mI+' );
define( 'NONCE_SALT',        'g9@+dXu?Ieaisn(X9p^mP Abp3N:n8$Df1FU3tQ7RoM,e]_yL7$Z#yEuiLQVNq}i' );
define( 'WP_CACHE_KEY_SALT', '{}*Um~PJd9@JF9(%>R}xKh+Y$J{F-C:>wCMn4F!V$){w2%OT~H4%x+eHe2T hYgf' );


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
