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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         ']<LOMXb]=&Zs +*VM|s+RqqsP/6^0e!]M(XhdVH3~nz3u3Z} s@=N7/_0LyR[y`#' );
define( 'SECURE_AUTH_KEY',  'Bpb^yA11%?;wk>Jz_%UG<ckW;}ALGB0$w&S{_OAM3a&k^rq;V}/b8l%+|F dB]#I' );
define( 'LOGGED_IN_KEY',    '%3 )::B^kK*t[>t(#C54S0]Rs}%]$x}]dN71Az-Lm[EVyp))$s&8x2j#|-K>@[N(' );
define( 'NONCE_KEY',        '%P!?V,}b`h^^d=ec#SW);7f!DoK2&DHp[Ror@chQE_fCM_)FB<zn:mHoQRO.(&t;' );
define( 'AUTH_SALT',        '6:p?}`nuxc]3L`%;.]^{Ve&BAkBs]08}{krIW3msu<=t,g,4HYQLAg65FtF*`}My' );
define( 'SECURE_AUTH_SALT', 's_`%h40873wQOt>xA7;jHb792p4>GKW+{P0yYdF>OFjn<L+Jv+K;d4$Dda*,tGDe' );
define( 'LOGGED_IN_SALT',   '<HP8SB7QT~2>DDGQgT7!3X{Msd:/p6T~3V2~>`ay[-3fE;3.2>t;vR^n$v]M5`wq' );
define( 'NONCE_SALT',       'vH938YnKO,T?6$RsVd$/se_r=vWjtBosx<psD[l<M9k/qrL!q[}$ m+F/!={ @7#' );

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
