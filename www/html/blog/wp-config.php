<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'test-db');

/** MySQL database username */
define('DB_USER', 'test-user');

/** MySQL database password */
define('DB_PASSWORD', 'KCBuser2015');

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
define('AUTH_KEY',         'fHA_)eYMZ3xvQyZZHc^yfHoDQru !L3bdYi$V.{4_5:~~3P%s/M lp/e^.Z!usrP');
define('SECURE_AUTH_KEY',  'Vhs4awSf+y`a+P`x}3(n Z`qavA|&!+ IW:1&r},fQv:H7N+Ja9+|vhg>H21i<cd');
define('LOGGED_IN_KEY',    'Yxj[/YdFJ7)cCnu;1`)F`quEPA?v;T]ofH34s&y?&RL[|UWlIBe<f{|jV_(X@t&f');
define('NONCE_KEY',        'nJ6}ygtwF/`#sz=PK5mh.@$M>o%V>;(,VQBhm--YZE1%,y-z*S935m(/U9zi1Dw^');
define('AUTH_SALT',        '{[Oo>P_wEehI(1S,1Bf$/xV1~}u&y/tp:~uPF,()p2+,_zq%V1qx:k6UtH3kKi4s');
define('SECURE_AUTH_SALT', '{X2O7%*.;zp+oE>`C8h>Xc9 tn/52Kde& K%|rT/JUp24+KTAe_Y;U2wc2-BPcNR');
define('LOGGED_IN_SALT',   ']q<Ylc:u|gg^Y 52_OPG.n|!o5qvMwkx;e%W,5IuX1A/$KCaFmvj+8}|xxE<W&8-');
define('NONCE_SALT',       'o_N_pgGF)dAPxg-zrpmtd#4oa|jWZi-=7|]<yj3VlGnl@t<>~yzCJrN&8D{kr(~D');

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
