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
define('DB_NAME', 'monste1q_doortjespanjerberg_wordpress');

/** MySQL database username */
define('DB_USER', 'monste1q');

/** MySQL database password */
define('DB_PASSWORD', 'yqEdAmUhU@Yv');

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
define('AUTH_KEY',         '#Si]zM80O~X8c_wCGD#T- ihH<[WrKk6R9~]/R*.~AsF [%,v,XtC.Qn)GDfSLzb');
define('SECURE_AUTH_KEY',  ' <A6KqQ!TM[L.35.L8lLduOw^CG1f<%^`MjLm3UIS!`l!Jft#EPn7<=Q08q={d%p');
define('LOGGED_IN_KEY',    'Z<kA~A{$<*)|//VFaV[YQoKE~*^Qpg{4[<y!!I@|ij{j<zScn<c^6xkeSORkS7J&');
define('NONCE_KEY',        '0(SeMgge( opT@2P!);Mt7FCF)8jIwfLJ/7~([8+/9/70u_:ZqG2x9ryvlwfy&9M');
define('AUTH_SALT',        'MGGn+6Z CG2)q>EyM{JB3#D?@TGW8&WJd=!f$.fGYLnu=H:Be$N0U6&vC.f+cnx)');
define('SECURE_AUTH_SALT', 'cz>uZR(;L_A($!2986QYl5zPsQ+%{PuCp(%2#sv{ -^,}DAB:e5LRG@`6?ZY7f&=');
define('LOGGED_IN_SALT',   '$L#o/O2^5i[i*Y[v|Q4qYNZ}p:}X6UTD*45#:9?;Y^>pKd_a[fa(,TwO6^{*e22{');
define('NONCE_SALT',       'i|yZ;1i6E{phX7fbCtQV38,~6-4wc+esnZ&V#%G3A|7&S?941r1WN_ZnVF:XS#nD');

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
