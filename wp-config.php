<?php
define( 'WP_CACHE', false ); 
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache
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
define('DB_NAME', 'fqvnmdpkjp');
/** MySQL database username */
define('DB_USER', 'fqvnmdpkjp');
/** MySQL database password */
define('DB_PASSWORD', 'VT3XXxJdRg');
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
define('AUTH_KEY',         'VS#$pd_KS8cp BxXNo-dc<uHF(2+EYiL*4+daiNDPDPfnqo9pG`8y4f60R&0zyO>');
define('SECURE_AUTH_KEY',  '-bh7s8-7i NfB YAP?$I#E9)pLa4lFE@|rMbrBr(nL5d7-0eU9Q8~:{pw9h%W)Wx');
define('LOGGED_IN_KEY',    'wcgK,-97YJvi5pT{4{X;.Y?rRK{}KDf_~>@0]7-)T$lv;gx!yQ}>kiL[RYE+#Q?6');
define('NONCE_KEY',        'd8pje6<t^O|7B]+f6AB<eyV99e_k/dK%]J5S$^,x9-Uv ~-:ZN J[])L:tMWw0I.');
define('AUTH_SALT',        '#4=O%1UNel[N7dTX6#9CgD1iwOXF$Z0,)*Mh]PG*nX:{w% sfg>Y#]4G@cN4J7[<');
define('SECURE_AUTH_SALT', '5g#zHrCXnTgDg?I r|G!;D|~8xIwN$]%00+KE0[q1CYQ^!w8cF1egmIT4Sk 8?De');
define('LOGGED_IN_SALT',   '`9ps`AJ7}Qrs7+pJU?hM{<gI[Aop7+g#q<%u|:6w-!K-xsz+:.5Pn~lMf~TzCuBY');
define('NONCE_SALT',       '7eoT-Y4{ hlyaPOiUA$2q+x(Z*K4w}*x>bD7E|~==M6c(R+v^W? yhCqtF/#YZ/J');
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
/* Change image path */
define( 'UPLOADS', 'i' );