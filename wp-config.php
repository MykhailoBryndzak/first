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
define('AUTH_KEY',         'irpRU[3P36 Urstj#;ol4P26bc  GdhT<m]e$#q`? r^^P{__@>oY[`jr+8+5X: ');
define('SECURE_AUTH_KEY',  '|.I:yLL%>1jt##h$9rBLuCg.8N>(tQ2+Kxrp[s=B<XyjW7IVjDDcS0FDOB$bnI,!');
define('LOGGED_IN_KEY',    '}z}0;#YE]&T-E_<~m}`^~NmH2UzQ0PJ__nn>bJ1#4[e1_*((yR:R[4/} $|6-gWw');
define('NONCE_KEY',        'uC3ql@#,>>JONzLaSli}yEN$s%>t[|S:m 7j7dCQIpm/F,E2aboZ/0/&6$ --?/U');
define('AUTH_SALT',        '&*9up#hXGyU+FA-%z1-=MsAQJfuy9hf2S6rzxmLBENT|UGE!O`gK_+W9RR+<n<6)');
define('SECURE_AUTH_SALT', '8=mdTVbYO98)-w`FA-UM.L{$8[jZO?!rc=1TU+X0$]Sk^x)BYh(]YHvHc<Rbd@Vg');
define('LOGGED_IN_SALT',   '&>O1v>m|hZWE1S^{e2JBH~|#jvpk}T)fS0hjt]`9IO_6AIHGik}:=/oMde8{nO;H');
define('NONCE_SALT',       'B]&`C +giYF?cR)=e|UWB]3`3RHm^!#};U_Wq|/$GnB?L_9mW?h4P^^IPS5@)HK/');

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
