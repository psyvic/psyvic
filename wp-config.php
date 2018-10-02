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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'vd<_E#uTT]rb26KYOvvPTtc1m2C!Kx8p)kRbQ )hj%gjd9O~6t02`EqnC8 XTS4E');
define('SECURE_AUTH_KEY',  'W%9^mdgeMUDk(H`r0}1WD16/_)G=*5M6zZC|0C;zv8JKh1zIzlX2;UrtA3L/>lT`');
define('LOGGED_IN_KEY',    '^ =!}M3j~%-Lo>_(;% *9%FOo<fVO[{-Gm4>9Rt9gU/(]/QfW8lPkg@m611VI~Ld');
define('NONCE_KEY',        '}6(f4,3oiK[Fc3<)oK8k##<&Yo,1fuN)^/hevw,kU6^}VCR@fRc|X*sA0&Ee+LX^');
define('AUTH_SALT',        'yvWwrIDpUKS_24)vZPmK^E7~C03~)hCM|6Fk2eC,_s13-ufvC#$3,J/a1.JGmA$*');
define('SECURE_AUTH_SALT', 'Od.}e=k3s+6MC*HtY{z;(%P[GSAZQl(L}rUaS9~7~YRutj1e3X&F^?F$Sn_okr=%');
define('LOGGED_IN_SALT',   'Gg*@}XBoj%NIP2TA .zBE*)~T-pnXzz+^5XM`S)?/T51l~w,E#@|T}pvj/99CD`Z');
define('NONCE_SALT',       'PALV<Nd#<zb*8yiN4y<Ej/>HySx(08jk8[YEgV#y&xD>(R<hfG~UJ,(K3GrC`&p:');

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
