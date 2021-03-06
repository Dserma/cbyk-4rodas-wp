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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '.K^_!jmcC;M!OPC.M+Baj2u8rnmJn&6tjT&?&fr|E%fE?J,wUkp22j K8%xT1md7');
define('SECURE_AUTH_KEY',  'K&YvO.kmIq1./a*Ez1mozq+7g;qiXBK4ms[DI3+ogS}^mg.O T7D.;Gi<dz#4&0=');
define('LOGGED_IN_KEY',    'K5nZ{ceN_L4=n[}T<,N]c!7.%1hp8w|1e@NYzK,i/3C]o1tow#l&U<DW4I>jNMu ');
define('NONCE_KEY',        'N7RFNohOt^$V2K,><vV|gspPwI>dhyW=f@+n:Ch0D3)U4tI[l$~WaBIvx$DYUQep');
define('AUTH_SALT',        'BL:xFT`@+BoFHD#QrE-qo6$9N9ZY>}r5HjTy4v-oHSN3WKDLD$fu`GjraB=Q$Fag');
define('SECURE_AUTH_SALT', '&%$1~/cA4Q?Phk`rdO0O6V+QwgTUFZicz )t6N~|TtVhBf<<fmlBoD(,C)nmHs@g');
define('LOGGED_IN_SALT',   'WpgoTi?iad^2rusj$_E2<W@paErOnO(}^-6vv9?7u(dqHn bGGZe@99GXwFDlHwQ');
define('NONCE_SALT',       '/CA!DpL6VHU)EgXJNqt5nnYc~:>TzkDs6r}`!BD8<^T0d?~+N;EiCW.@y8-MBa#7');

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
