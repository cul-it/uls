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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'database');

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
define('AUTH_KEY',         '3borN^ r[Q}eT8f<eEF<QSWfv|nqXCJ/SBDsr)onnsd<]%wHPz9~pqZ?6.=Xmvhi');
define('SECURE_AUTH_KEY',  'z[uJv.5ddiOdk_SeAw8{msdb%p%jH+Yi8RW[Hx;7%U3)!+zaXc?zYwla*,)u+&C&');
define('LOGGED_IN_KEY',    'OfQPQySC2fTB(&6#dU3/JEKsHa#1,=]#v%,Y44g=Kyo7#kTI-oH4|Jhhs3n2<OqI');
define('NONCE_KEY',        'hBlj9}uIaB7ZV^=qTk9p3r_Yb8inxy?2;9O7~YO5*pV6Jt95r*Eua0;?S[>Ps`&g');
define('AUTH_SALT',        'tH13[wthrHknfi5/cx</TbB1GR&fA,-97DOdu<C1yldVQ<5Sth5z5u[I1d&.Nagt');
define('SECURE_AUTH_SALT', '$=R=?Hj_AI.e/&%VssuO.QHtuaKcD{cmxL}AdgO!e1}[z#_=lAb.Dp^>ZM[R+-OE');
define('LOGGED_IN_SALT',   'rL:mWG={(:`i]9w70ixx_p)(W0fRlc4<4,wPfXxVOqcni>&}ll{X6~Z&|qZOWE>_');
define('NONCE_SALT',       '}$uy[cv4h4oK~Z;+}O98-IWcpb@:O[xcZicRNlTW]dqO<LQw)^^_2@@6J=j*;(9;');

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
