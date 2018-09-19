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
define('DB_NAME', 'wd_bikingtour');

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
define('AUTH_KEY',         'j1HJi BmBn`}9w)v,<N[:C2E!,U&&;(?eE[c3r*CjO|,/@@M[[7rVk^8T8R)ZYck');
define('SECURE_AUTH_KEY',  'bH~g%9t{s|L*FXmk;6&`*aOO3&mAMFqP.$c{wtd+Cd2ECLWz7t`DSHDSs33~$:>U');
define('LOGGED_IN_KEY',    'QKSIkK&$elbkKo_4f*KYAB=EH-mD3Q$:FO;S$ S4TbmEsJcFl4Ry~SOLacau}xL(');
define('NONCE_KEY',        'RsJiyd]a[{dF2``^YZY3V2%84pH1Ci|wwi2qA&1i10I]eD:X-:nc@LdV]R6%4`eW');
define('AUTH_SALT',        'e:e_4-0pb?`;VA,Z-` 8^g^/vGB?W[telb phvgWg4Ktk2UfOu_[}4E9aeGcJ@,n');
define('SECURE_AUTH_SALT', '7|teB?9y3gs<$}j0NI3wux[]M}lWQaQ=^1W8Mc9lA*Vd1d$SOoYVw`6y0nBs7FII');
define('LOGGED_IN_SALT',   '5qul.ICjbI?exl~[<DsI]+?RuQg]^;;q,FV0 ngb<bJ(-xhJcaZo$Y;Nc`hm26ab');
define('NONCE_SALT',       's@r=h#rT2([1?S_,RN(QFgejNiR1)T4[utb>2PN@w6QeK3l,x3l?^2tq>=+fD%/b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'biketour_';

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
