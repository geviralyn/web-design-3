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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'a`s`@M(hDkCQFlkmds5Vq2~SjK~SAm,.JU;CI/p{x}!.o0GtIs*,GMHb(X39)1,B' );
define( 'SECURE_AUTH_KEY',  '6TRq0f[.~c<2@{XyJX=PFafwk;kF7&tn1k31fC}b[:(*-xJOyRjMvAR3Apz6H(%<' );
define( 'LOGGED_IN_KEY',    'f]SVhu338(kD,!V(1)p!&LEg@dIg!@V1^ _7<?)<l$R#XAA% U|%u]3M=K67=?/e' );
define( 'NONCE_KEY',        'ZWu{cEo2]RdI4J>2~JhE-d$jNm+?.kalMhQ6#ks_YryT<VP@*Ia>P2U(0Tjf2t:/' );
define( 'AUTH_SALT',        '6fJmWntM2AZY57ZjPci:yl;R0%~,[@zw>hm1^_T5E>NWuj_EW/ !`l0^X6R6Lb7_' );
define( 'SECURE_AUTH_SALT', 'A5AV.u#HTvht>!(A*(vJEzpv4&] S=YkhCTyz9#N<[}E~~g~rmK6zFsUDZl)TP:m' );
define( 'LOGGED_IN_SALT',   'M{ 42)<M}C`r1>y(VKk;u#YLYtjW6S-%bLhK nC{`b8$xM0y7(XdesA={jMZ#N*]' );
define( 'NONCE_SALT',       'f>v){Vx4a^Zav$EzZ|IFYJOA&yc#(>ogjOwy=w)DMW+`>3?G@TOmr(1OlO7mix+v' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
