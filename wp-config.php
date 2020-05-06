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
define( 'DB_NAME', 'shopdongho' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '_0CAp1/+ <:N289cxTJ+bV6aWmwfBIem{F~^pi&OcMEr4RPJAbY1kD)m(Fx^z;uD' );
define( 'SECURE_AUTH_KEY',  'w(/-<MeV;<bUF^zD ~;Uu>nN71GlD_}6pHc{>G:F|^.q,?1w*SNpcF:6gg)6}BVl' );
define( 'LOGGED_IN_KEY',    '=K#NPu:>JkF!G,E~ul>*_01^7G<-r6G}K~%EQrV$g52C0Y(l|do[#=HJk/:A4OPy' );
define( 'NONCE_KEY',        'C%<IeEJQDHB&TVjQl9qX7~.,j!opR6|0}k$+^ j*sj[fJ#>?&3vHlCeo^bvX,wsk' );
define( 'AUTH_SALT',        'HcsYPj@W*S@l5z?d+T)#Sq3a)$#0lGt,dV~;kZooE<5am5aB;.TY%Y.!mnQ>InW:' );
define( 'SECURE_AUTH_SALT', 'APQ@t_Cuzlq,ZW2*>VEm{?X~Tqi9Jf{}m%uQ)5+OHt$f|DAJh/yc^pT/Hf5+_0x ' );
define( 'LOGGED_IN_SALT',   'D|gi.qRXJQ`l:my?0jHUVY>Uihx866^R;W@;K&VEgC`/8A_=KV?cV0%80m.$,xmh' );
define( 'NONCE_SALT',       '51$/$I?GBP2A!J6vS]uu/<Hn(z|O+}F[c1jpTc^ ,nb~S>CuoG!r=W>EGn;)%H$F' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
@ini_set('upload_max_size' , '256M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
