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
define('DB_NAME', 'genesedb');

/** MySQL database username */
define('DB_USER', 'genesetheme');

/** MySQL database password */
define('DB_PASSWORD', 'Everest01');

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
define('AUTH_KEY',         'V%Yy0sdCFK@{.6EB+~@_{|Gs%@@HO,3u3pM#T90M5!-Jgi>;,zxv0>@ ^*R72O6`');
define('SECURE_AUTH_KEY',  'V-H5G!.|6mGF-[/n5#`sG=ckE%-5 vo5Q|[u@;ADJ )qPN4Lv,>y3_m)?Un.XDyJ');
define('LOGGED_IN_KEY',    'h-tKEe%^hE_ n?nvXvPM)lK2h[PnUg|6YtAnhbOG.]Y^MGc+67E.SRgDQjx%dRvf');
define('NONCE_KEY',        '+iUukVq+tt%c?<OJc&oN?E{TuWN$O0A*mM$oo}mL$<61;qKiFWQ2SIB8M3]_%3|b');
define('AUTH_SALT',        '2HwEl-*|KIKw<6NKwLB2^WyT9OoQUwt-1M5+n`w1crX!}Zlti:X#KVhEB|&FsyI{');
define('SECURE_AUTH_SALT', '-&W#dj_I2;!+gN3;0;+3cGl(]^pML`X=3Y&NKui43YLSGRmDzWm4_voN(|QJ/4]N');
define('LOGGED_IN_SALT',   'Vz{R!xHNWx/o)!$c3U&gJ~h>mwp#w^{()1n<(G9S?+/.aXz8Q<~G371UZX?;v++>');
define('NONCE_SALT',       'e`Gtq6-59P7]kxzj!&{[KPp0^F-(AWLjuqum4fFl]<nUJu@xkM#y!CHe`.$:]^!b');

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
