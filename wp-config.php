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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bd_osacsc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`%8(Oe!*A~H]D~+2,POBXGQ^8KBO8av)aHXI `4q[x;CiTRyo${XV%&!9C,oy^*T' );
define( 'SECURE_AUTH_KEY',  '%jtMy n}f_%8<iJ)|B(A,|ruN>sVX}KDJUcM8neR`p+A,4b+t!)!S7sA`NTggjb8' );
define( 'LOGGED_IN_KEY',    's3XAC+4yfax1,Bi<J8 Pd,%S8C6,0u--0YJqG;hg8LiSkwi#sH@?LJ`; +:lS%[c' );
define( 'NONCE_KEY',        '<_wY,~:qGnG4[%zw84E vEIR7$W^Tz75^4U9N1~GS,#l<)X*`E-{km75G;>&zRbj' );
define( 'AUTH_SALT',        '5s%YawMkOFE:32l5PsxA99+o`fetqlE8(R1xj13r/V97JYL)d-OB?omT2|wX]p)m' );
define( 'SECURE_AUTH_SALT', 'oN]@nOkL>aL.rB+i$%w!vA 9]UE:![9G9}l8djgb4gL*i{uB4MRGr>oCqOz.YtOU' );
define( 'LOGGED_IN_SALT',   'CZn#2h`,S371,id)+!!mbH?oDYPU@erCb|5}97ib5m)@i= !>C_>H,gu,xszN:xb' );
define( 'NONCE_SALT',       'HkwtH3B_p@-s.gj]g2DTKkj-(-^X!_]is9/7i$$py2+hojNZNaNj>{R{JOTTP%Md' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cev_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
