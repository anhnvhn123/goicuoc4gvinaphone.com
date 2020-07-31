<?php
define('WP_CACHE', true); // Added by WP Rocket
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'goicuoc4gvinaphonecom');

/** MySQL database username */
define('DB_USER', '4gvnp');

/** MySQL database password */
define('DB_PASSWORD', 'ksy3aDvhTvfNBvs5');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'SKj4@6zfPlFhM0l|dO{)^PlwSL-o=pAo<wC%|P6ota|3~[8=u2c}6>sd6l;]I4%^');
define('SECURE_AUTH_KEY',  '-WlMbzxI s]!YLr|vT=`X+x}qKpgY]PGN,pv:!nsG_5_f*:iN5Y GxEk=Y07n7xF');
define('LOGGED_IN_KEY',    'g?uzz;NoF_,L{]7)_8n&_|~lN@qc+1gr2X]qO`i >:,L&yM^ 8jM4?X0y</DdW`/');
define('NONCE_KEY',        ' IUmyL<ri%R[2>4M]>nw)iJhmoNm!,oCEg<V1W?m^a6->NH2R.h`hJ Abk$@cx4T');
define('AUTH_SALT',        '0%4f=BHb$:L&G3k5sZ?o2pEU0Uwn tQX<KgQeH1-_eJj/-wEk`(85[S42/}RP}.g');
define('SECURE_AUTH_SALT', ')dK|40$mS*doL}~a1{R}DKqTAx+zN$Wul<QuHbMbnO4Y>LX[TDiFWw>Ok*8DDao.');
define('LOGGED_IN_SALT',   'WSLFg*n=Dl!^O66e.q :3]X1,NxH0jK6o{uq&)($7c&Wah3^}@4}&Wv8(q7Fw?>/');
define('NONCE_SALT',       'y^m2C8zl8Rdj~C$6bNpEeq8i2<G<NDr}vpk2m=GV|xzkJ;]0(bTFOOR?XYFI28al');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
