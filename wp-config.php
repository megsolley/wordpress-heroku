<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Heroku Postgres settings - from Heroku Environment ** //
if (isset($_ENV["DATABASE_URL"]))
  $db = parse_url($_ENV["DATABASE_URL"]);
else
  $db = parse_url($_SERVER["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

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
define('AUTH_KEY',         'qZAh_Ra:H{>VVuvPuJrf|fLNRBA!+9|Le(DKZ#zfw}l5W>O! H,FQ*N a3/71I%V');
define('SECURE_AUTH_KEY',  'u8$]y2vSFt?1ewdFV*.i|=87Y)MgDx{{9o 2!e 33#+-N4Otw?u~O;r4K=zOQ2LK');
define('LOGGED_IN_KEY',    '%| k*c8M1?`K;Qn$6};sN|dqYGw{m/#2WNBSB?KH/Ue4{q|_NW#(9nPa7ZniF2CQ');
define('NONCE_KEY',        'Nr.M=ENXhb3* Y]pEy(Hxg]FL?oZV~5mmF4ZPzXorC#QG$ZF|SVbSV.+..rLoeGD');
define('AUTH_SALT',        '7V>zF+tr{2pH^@-!VKnK=4UknY^[bN%1s2auQs L1g&4}so$nhKEo_VZ-Cobvz]M');
define('SECURE_AUTH_SALT', '+R4+hr>mR=TBsmXxp6a)TYc:L(uw>m02jVasU,+,^Z={K}@<*saCm:cI.RBs&`;E');
define('LOGGED_IN_SALT',   'M-hXy@1Q-Z$N(vRtzgifmdzGl5..q|#8CJW]-36]guF$:}+|0E]]bT1>+Ydj%U.l');
define('NONCE_SALT',       'xDq]%ka]4(BEUUo2n`()eB0M_=^pfw?)sfl7aj.QRf@LxT[-~1^o1mW| /PU{3[(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
