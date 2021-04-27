<?php
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
define('DB_NAME', 'flashyfl_live');

/** MySQL database username */
define('DB_USER', 'flashyfl_dbUser');

/** MySQL database password */
define('DB_PASSWORD', 'OHD}&VDeJdq-');

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
define('AUTH_KEY',         '5$d<!qgXAtb*2^~^MJ!YW,F?,v[esMn:AK8+10gb#7WBcz!zyj#YY nYNuk(tS%C');
define('SECURE_AUTH_KEY',  'Tu@b34p6.XE6n,YHTxImL:@(oBa.LcM9!d4tZ|LSMo+hI{CBBiA11Ao7nvh?5,CB');
define('LOGGED_IN_KEY',    '{~m<~4ocP<M}irFPB4h9QwinZ2UpLt.`5VKsU,]s*+D$J_eKder`L3/=-pZc2K b');
define('NONCE_KEY',        '3`hd{k;2[Vrfb^hTYO6Jp?YCuG}2mP2%QtYw] ;C02^Vx:^yJ*?7r{<4RU0fP2T>');
define('AUTH_SALT',        '1_DtIxVJ`7|qqZ62#[X@!n5AHq<|(HTHqNX>@V+`]Fd [UX1:fj+ MrJaHJMrJpk');
define('SECURE_AUTH_SALT', 'PJ{B*%trg,T!Ycy,-]ED3@zS@(bH/{1IL#=dG6mS5D,ssg*yxr|ERISl%&l>!:dT');
define('LOGGED_IN_SALT',   'uF:T8f?~9W%;0MrY[?bG8y,p}+vN[B~R+Zn6w]LHliU~-cO>oY|;E<JPCy7).0_p');
define('NONCE_SALT',       '.4DdS$|s|rrWgjDNn;L?%EEp0zLy)4Q#`%bFMsQjj#Bh+>Zx(Fx,L9.s#z ^P2w!');

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

//define('DISALLOW_FILE_EDIT', true);
//define('DISALLOW_FILE_MODS', true);
