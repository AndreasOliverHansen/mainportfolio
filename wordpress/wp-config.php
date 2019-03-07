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
define('DB_NAME', 'mozel_org_db');

/** MySQL database username */
define('DB_USER', 'mozel_org');

/** MySQL database password */
define('DB_PASSWORD', 'Abekat1234');

/** MySQL hostname */
define('DB_HOST', 'mysql72.unoeuro.com');

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
define('AUTH_KEY',         'X5r&abEo%)&H&tBsECyYi(oa#)!1K^*TzUEchOK!Pc6fSp0O*Ipg#dje#%r5zc*I');
define('SECURE_AUTH_KEY',  'zQqt^b0EPYWKDGgpW8wAj9xxp*xn7BkosN(GyAuIEyUrS(9WgIBOZ(3n!rnxyZq2');
define('LOGGED_IN_KEY',    '3mjwOEdFigGjB#UcRyZRt&Tv8OchIaZishISoZiMEb(bAdY3tIL9j)ZrTrSCqgaD');
define('NONCE_KEY',        'hoa1Bny1KOk8g@Is8!ej@VwctHFt2n^gI&h5rB8dzACyeMWuLiNqKw)BAtfnD7P0');
define('AUTH_SALT',        'jLmN4G^gF*Q^cpnxLdAf^#5Tz2wTORQnEVVEGPNRmFEqkkAQ^WI7*lc!0G)J)3^N');
define('SECURE_AUTH_SALT', '%sZRA!4qLSSvLeyz2x(38L67fI&saWtmpNO8SX2CmLpBFb2zBPE0wF1nO#XVORLO');
define('LOGGED_IN_SALT',   'G^cfq^Nf)zOuYoRYQk^z%seDuhbG*LcaX*fze!q5UFpR2eGcJaKtop(F@xIdD%zU');
define('NONCE_SALT',       'Qf*2vOY@Saqy@)5dkZOKEsUC0egyG#&sEXgTqnzg!WOtydksB0knfRB&NB1ls@V*');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'clk_69b46aa17c_wp_';

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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
