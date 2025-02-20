<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https:
 *
 * @package WordPress
 */


/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** Database username */
define('DB_USER', 'wordpressuser');

/** Database password */
define('DB_PASSWORD', 'b605d0eec5e281c8');

/** Database hostname */
define('DB_HOST', 'srv-captain--radio-demo-db');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https:
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>`siEK@zFm+M*j.2OKQcH7uazytU:kccg5SD8a>$UKG~[>EY[-NJzfBt|L: `jh!');
define('SECURE_AUTH_KEY',  '}Kz#D)iiv$sAbtU(lbUaS+s25+^134Ry*$g(Zh+2-[z`3|8JSK21B4Ew:P#n^Yl@');
define('LOGGED_IN_KEY',    '(q_=l:_E`25m+8]+72h4o+W.~:[uM$cJipP8@-@b>v~VLS&=MiYmUb[Kp0/AQD2s');
define('NONCE_KEY',        '4zqG -l_|Ra!@-5k`%fT-=p/|L-u>5?VqOzJMX1Z-7,#|MQfR<0:V#CA2|OoQH5{');
define('AUTH_SALT',        'UG!*i5SDQFW9J4VdU4TcSN+kXcw~b|0g|=D!TG-3@<v~Y1~ihDC1Q?cYK0Md6V4x');
define('SECURE_AUTH_SALT', '*Jj0ENW#1:|-b?Zb!Gvw`cE$0S<Y}:IpfO(Fmh&MW0I_&rCt|I&8Kh>LSy$V`6tm');
define('LOGGED_IN_SALT',   '&=plY5[lE13^]h+#^$t*.o(.@.Dd>-3(%A]|KExm5p!EE<h@Tz57#8=wam[(7:bQ');
define('NONCE_SALT',       '#YyB~H;c>dO& OO7|LF{aGyn+TTU8k&H}PN-`8-aWI:=7I<:qP.i8gOa@SVf3IOE');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https:
 */
$table_prefix = 'wp_';

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
 * @link https:
 */
define('WP_DEBUG', false);

define('FS_METHOD', 'direct');

define('UPLOADS', 'wp-content/uploads');

define('WP_MEMORY_LIMIT', '256M');


/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
