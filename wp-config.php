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
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         'B_m7o)zv#g81,_yn CdNb)vRBQD8y+ML_.Xhl}/+ylMT5oxxwc|K)ujOjLo!Exc2');
define('SECURE_AUTH_KEY',  'zIaxX?QQO:BunV8pc*ZO+JF2wZIa<|2A_%a%w[{JhLL8+~Cx$:Y?S>ZOw&h=?}}i');
define('LOGGED_IN_KEY',    'NyZJW_g{-)[Xd{__>1mcm0MSa&/z)-[OEO)uqit[ hpN>{)0qCi0aMv_^gmz&u-*');
define('NONCE_KEY',        '`<YEcBy+Ft6bA48<]=S)M5VvR:Qbltg9u=Q[U]JhE,xF{:sz99>J_B8~}t%fA8|D');
define('AUTH_SALT',        'y7:-=#eAp0hS{tj_Ei_!th0z/|.Q=gqBK-YsjD.Qu -sZS+!Z%+m]-i(d<FEz vQ');
define('SECURE_AUTH_SALT', 'p`)95(e;m/^qjRn9c0C}>nw:CEvo~W6r9EB YV[$nuI47Norb}|V=)E}(WTCp.&#');
define('LOGGED_IN_SALT',   '`;HrM3-11?8gnb@~g<db8flE1}PH<zpa]]]x{m6mC;z.{$>i[:cUqE51Ej;!o$&V');
define('NONCE_SALT',       'b=A<4RLXh:Sj{T{2=qD}APwl7fYnrmz%NSPW0k?}E%Q]gF1g?uQPO0&6?[ZVjGP~');

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
