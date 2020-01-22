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
define( 'DB_NAME', 'cherrykingbc_db' );

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
define( 'AUTH_KEY',         '*Oo/uJI5RL^MwR8H|F`q7y29#3+yuJX7I,Yc.gM2QT$`b,rgq^S.pkj=K6F1=Ky+' );
define( 'SECURE_AUTH_KEY',  ' *^D`^4z]Gyd)=d|o sQrq^e3YQkDblF*pk9,0[_mmU$9>o?FTGtq*wycj%hFT+,' );
define( 'LOGGED_IN_KEY',    'hI3H~u85n|w(FCy&P}RzKNy(<<CNw;D9`op?G5k;*e|x UKegkTbX8r]g5_oY<JJ' );
define( 'NONCE_KEY',        'ax[;K8Desbn|jDa})+g>@(<:Z`l2`{Bd-+P3LZg#~2BMLDDv1=ucUwM$b|8~JJ U' );
define( 'AUTH_SALT',        '1EE},,$cwUo-zO36#-4@~KAS|Kj6Ddl) uV~uSJ{m~-UBz#+79PV :S~Cx-$varF' );
define( 'SECURE_AUTH_SALT', 'OPvT0kRU4DKgB`AUtIe8-M^$6~(cKA0]]B5olQQ@=H[1|1b24eZm#?pp6^>.+[M<' );
define( 'LOGGED_IN_SALT',   'Op+R)0|$1%7ShdLi#l;j Dfv>S{gF?6`q2$6)nms80.EF|>]}c0JT[tAaEtNQ|cc' );
define( 'NONCE_SALT',       '8o&gQN8f`2%$8|bQ@0XWRs:[ts9e[)F4gQ6GiEIl_R3+}Uj|sc7O$1=NK7vUk<m.' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
