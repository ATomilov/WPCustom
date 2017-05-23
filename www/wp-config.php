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
define('DB_NAME', 'wpcustom');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '.+1{~Wp(4@D| LM@bO1_waF!Nk&.^ Ci@*n4(MPs/VvB;y9uPk2G xuOf^.[?Bdt');
define('SECURE_AUTH_KEY',  'D|3(TER+N27u8&cUb25|@Q9Y/+3+P1pUARAMv%T>tYdwoPzA .1qsryNmUlWru(<');
define('LOGGED_IN_KEY',    '.RWC0BANH$i5DN0!$EBj1oZ98r7$nFeM?]4nY9-d8g [Az0tU)XLbL>+%Hs?:Ly_');
define('NONCE_KEY',        'Aj3=e!:mU4DELXX5G[cDuiPd]ls nv`;+nsR_v7{pxHKj}]rs+z9$4t]}OxH*&;/');
define('AUTH_SALT',        '{  %^CNc)e##itMz~Yf$*QUE7.YJ4X}[b;95n8FBx#~w({n(aIaq|L^K6>2 B&FO');
define('SECURE_AUTH_SALT', 'jfo_7*A@0b)&F-FJ_2~,4W##Vw0QI.mf7:]-Te{HK,a]`O]t-BjK_)FLIZTj`Tw#');
define('LOGGED_IN_SALT',   'UJ,ou(6POc}#ta6{j]5W*CG-*rge[*>4WaHdG{1t9]Q,9DGA]&_l3GOMGG~A^~.3');
define('NONCE_SALT',       '?L2zXNC[:Z~Z UwCW$&OA`wH`>Isq>vc.<77L0UMR5l$Xu+.z<NgolT^K3nN{pvA');

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
