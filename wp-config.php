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
define('DB_NAME', 'coral_alliance');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '+|pRO5@?e-83T05=C$Tu0R/okl}RS/BLHw|NiX+xhy+K7v[naBZQPq8T<StPKqYK');
define('SECURE_AUTH_KEY',  '?75a>y+;bfCqoof$HYztiwj{^7Un5^4aFCD!WwhUTeJ[!!1jK7+R~1>l}3UB[`jy');
define('LOGGED_IN_KEY',    'F!T|-(-VPO$2[TOqYw&^zsu>7kRobc:;a![iKEJ7<@*6l{k`~!L[c(>.JN$P32+R');
define('NONCE_KEY',        '1co!<[7U(:.*yB;cqYP^|*AN)=N#|Gl-&8Pbe&Zl6}fjPo3KfboG1_0~++2Wt]M~');
define('AUTH_SALT',        'e3!RA(-m_-|YYD&;!7rCjar0;5[oYY[m{!2Q71Za{|4%|,3bl4i.2+rsO|kU4fXK');
define('SECURE_AUTH_SALT', 'qI?(Ul!J7`NG(lD[D=TVRKd!aZ2&TyJ$&5pk~-X(`H1kYzvMX,v6S],FMZ2M824W');
define('LOGGED_IN_SALT',   '}E[OmE9BaHNcI1}nXEjc->A;ZPc&zPj~5Ubupjhtl M{62P[:LWsgrfjE1MLY+RZ');
define('NONCE_SALT',       'hS)=>*,T/!EXk69dyl?9y3bT<D<}1;e8Z7^Y2rvS<%b)L-;n+C,o2;3H*&{7X}3j');

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
