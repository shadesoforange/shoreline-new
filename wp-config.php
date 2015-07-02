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
define('DB_NAME', 'shoreline-new');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'oranges83');

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
define('AUTH_KEY',         '&)&ldfs>RKgM^E9h-;sK5lv|};-P-c^Fj6h9 mVnx[uOIplm^/pRb*T?`OL5Mo@>');
define('SECURE_AUTH_KEY',  'Q_fFD-G+]%AkFn!V?}T|y}zYa$G(|{bfdji-9;Ds0cBIw:]W-vwqSd73rwC$>dG,');
define('LOGGED_IN_KEY',    'zGl+H6D -f3+yH$+@PV;C)5bgWL[t8~K-rv}Y5p.K>ymP3>FHBm9w3/Y/_5f6Hbz');
define('NONCE_KEY',        'h)cb>(YjH-@[Jt=.DdC~A0&?Vah[MwCR!_6lOZ(Mn%[|1RH|NHo;kwON=R?|w`Rl');
define('AUTH_SALT',        'OXWO{>SKuq_LuE$3,+`]g&$|QwF;-p~{9$+fTb,$l&Cq;rVlVAI(XVrZq=F|KVG/');
define('SECURE_AUTH_SALT', 'GSfP156R>ax1F=Q*vJ]>LA-qSO~ru)@~LBH;^~tjYF9N@t6@SdNv&~H$]ospGLf%');
define('LOGGED_IN_SALT',   'n)JhwR?^VD+JyS9}fhH}/9]XR14z9NM4K7fiOF^}:5(|/JjWMaFP?)z9yiQc%Wg-');
define('NONCE_SALT',       'Djg@YGEs+.6/`)/ U{Q++.O49|xrnR!wqi/A6+ N*;~9udDlu+-!+TFt)@f;1Xz!');

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
