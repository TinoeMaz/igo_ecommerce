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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'igo_admin' );

/** Database password */
define( 'DB_PASSWORD', '{superSecretPassword!123$#$@}' );

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
define( 'AUTH_KEY',         'pyUjmK;[CqE=[n51Pv`V%hidsu1!:G]Z<l$G LHFnuiu$p;lVVPKEv}5.-[VtNf=' );
define( 'SECURE_AUTH_KEY',  'L:~icUTUr=11oLPJK$_RMc[@/}x(vaS55!4.IVWBQl~$Z ?y:)$Q!-&]-saIffW0' );
define( 'LOGGED_IN_KEY',    'iqcP{Y@@g/6ydkr11~G(0=72n<Nr%9~`A/r9.C#2mppY9*K=N5<Fbx_mP3 2o2I(' );
define( 'NONCE_KEY',        '(G?kIN 9I>pm2(wD]^%o-N/A9V{OI8@?)63Y{VxL1Y4?{C8rJx&8=~IU*CGzBgx(' );
define( 'AUTH_SALT',        'cE!7uEn*5,&zq^Y:SWwk|?R!$rC8zNtJrS&0PuSK~.>3|^XE?g_@S0H^NdIb>X:+' );
define( 'SECURE_AUTH_SALT', '4-~48F:bMsxfMf;Fi5hlz[edSM_/Bb06[3$7hMXuF`u+<j$IR}KwQzuhSL3<Dl}2' );
define( 'LOGGED_IN_SALT',   '>FM<[H=FgJ[.c{xvk 6g!?{d*xdNvKKFJAu8Om|e6nL}]ur<vOZX27h5Amq>fo2I' );
define( 'NONCE_SALT',       'aR?[zzK#(^fs@dnGBOLGf!QU3YY2 /vz?C;Er]*QbLP&9bV=&ERVW=P ^kSVv[Gm' );

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
define( 'WP_DEBUG_LOG', true);
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
