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
define('DB_NAME', 'santa_staffify');

/** MySQL database username */
define('DB_USER', 'santa_staffify');

/** MySQL database password */
define('DB_PASSWORD', 'time2eat');

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
define('AUTH_KEY',         '|_2k sr<X7Ey)/0~FN|fidtBKknnvy_;FQeQkiNNpP<kzw+2=kv`>15}+FQ+`Kaq');
define('SECURE_AUTH_KEY',  'YcuFxM9]y1%-tj+vk(]c5|FBvfcqu,|-MqL^`eg|v6Kj;Zv,rzp-B+5KN?]D}8/t');
define('LOGGED_IN_KEY',    'TJt6-lE4Zp_o501wS bBdIH3w~tVB*3,q[0[eucP6BN#%KC.&NCjYKn_f#6>IB(M');
define('NONCE_KEY',        'odV*+<gY/}g m3<$Vvm/A-ut8[01G!4)MbL*X6dd@r%)<P`7}TfjncYtC%W{#PgU');
define('AUTH_SALT',        '[TY0}$1&]m5B-ko5|`,rsDA$P6NbJ.clLHt 5#Co^<-]EZ&n f49C4`c^{|>&~]=');
define('SECURE_AUTH_SALT', 'fA/Pl6@2Ku9_9@~h/R&u&@/T9RaR%75b3Gg5OaXOy(T;[t)*7q%>C(H0R8t0F@3%');
define('LOGGED_IN_SALT',   '[Fy[rJ:ZL,ekA+jl,|cs&Z,c4#a!]Q<8,<g=-H`8=R: aPc}/$TAZ?RP}f_NiwDT');
define('NONCE_SALT',       '-?ImzKHf6Vfc4^:Es~`909,,XksxY@o#+Omt`kob8GY>pc|*|o>z*{WTb`7<#ktw');

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
