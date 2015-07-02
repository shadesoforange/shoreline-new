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
define('DB_NAME', 'shoreline');

/** MySQL database username */
define('DB_USER', 'ianmonk');

/** MySQL database password */
define('DB_PASSWORD', 'oranges83');

/** MySQL hostname */
define('DB_HOST', 'ianmonkdev.db');

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
define('AUTH_KEY',         '(e[BkS[|@q[E%@b`,(D6syBJ~A-U7W|:;s:*+r=3Q@^*@C]ED.[JVQu8>&#LOh>L');
define('SECURE_AUTH_KEY',  'X@<IU$l_xxJ$%GcL]>D-p/|5Bw;hKffig+{)m`=Ni6f$W2+C3S0sw^D2]1*C(,11');
define('LOGGED_IN_KEY',    'd`;KHt+e)D-J&QInwl@ [N{KQ7]%s_5a4|sl8Ce(k:9%:S^V:+XbJp/Z`x+49 u+');
define('NONCE_KEY',        '|:fnO/|cd.` S</yU=r<DhbUn@9 5[yF>4_v*b2{-o],ezDxkAyL#2eiZoxuVUL ');
define('AUTH_SALT',        'Z!W,()~5W*.oK%B*an.gWGZ:/OP)Z(L}1+]h%5V(,$[J2(wC rpc_IeFhjfutZI)');
define('SECURE_AUTH_SALT', 'T<xq~ik%$Q)/0D3j^<}wWD  cp8f{g]a(XPH!nhP&-u0`@S-}}7Zdz)v2-&@:,OI');
define('LOGGED_IN_SALT',   'XtVN|#O+_o*5l->DKlg!aJ9*H^mFaw8WSSLk5<MDqOt{*g<[{QLIaZX$,@MrG[D0');
define('NONCE_SALT',       '1H/8cG;&+Y9+T_.M;2#j|S<-}yPCndu!Gv;)-kt +uyGVLHH/1NdjX^?!P(([14R');

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
