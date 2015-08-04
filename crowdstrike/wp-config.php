<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cwst');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '6636');

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
define('AUTH_KEY',         ')#h(}0u{Vjk>r/CO+6pWn EK}D$Pt >2A! FL61ia&#(|+|kVERk`)-yrO#S#oQI');
define('SECURE_AUTH_KEY',  '3(_^s8|rr9NN7xfNu$d]tv5b&dvB~PTA:=!<y)?@4kd0}Sd2`:*Ht?E!E{m5)]z5');
define('LOGGED_IN_KEY',    'VK?k$09W7?Sl+iHgB:y}NM;>6Dos$9v7AhQu2AOso~n=otPT|*W|l5}Pr9[mc{9n');
define('NONCE_KEY',        'aly:]JrxA%hI14<EjZM`-T_0bxbq/Rinb+z2~8|)-kw+Z -MKRL~j=~EsKL)4OYC');
define('AUTH_SALT',        '.pAOX+EY;:]H}&1z6z#Yz1Oxh!-h!=h2msY9G;2B=HnoEMHUs1iNp]EZvs4z4T*8');
define('SECURE_AUTH_SALT', 'J|P/VpkN-WFC^)v#KUj<?eksZ1[}++y;p`MT(P&A1B~bN^.9IMNy5~U7pc6xn^4&');
define('LOGGED_IN_SALT',   'a|?#O uViQg8z=>U2i#l|aN%RiU>H|_L|DTfeEF*Q{Rhbs>I450`R40e5T){7f-U');
define('NONCE_SALT',       'a}eP>$+WZU^%U[e|wCCeNWpP/Nydob3Ife9VnGxTxfE~,6-VkokSx)5~^7DE{.$ ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

https://codex.wordpress.org/Editing_wp-config.php
define('FS_METHOD', 'direct');
