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
define( 'DB_NAME', 'royalcrown' );

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
define( 'AUTH_KEY',         'O0wE%%8>DA3!Fxp8Jfc]*4stn$]Bx(XDAG]6i!MaK<YbtLTCHDaYs (?d7_A{bEj' );
define( 'SECURE_AUTH_KEY',  'uGkp;4b^+q[IBR#aWG`6,N$Ts`{7:di-DT8O@usMKLW{J1A18YVqxi~WLSG}yYfM' );
define( 'LOGGED_IN_KEY',    'I6~+V_khwbfx=5l);a}hWCPS`&$-!m@,$>8,o^Cmcodk58Dbnw_Lv/XIbP%=kjmB' );
define( 'NONCE_KEY',        'Op[(bzP`Ak<Dt/-soC3xy!r?Q1b,Ixe3Y/,Hts$Cv,kMFy6_xt#qrcy86Cw4Ec|M' );
define( 'AUTH_SALT',        'Qw*>s7tL <=dw}}IiApL|q>j3aL2yzEwp]Or?}2#xavNr286~GX4tVbUx/]5b#am' );
define( 'SECURE_AUTH_SALT', '9!gi,=OOrsz1P #cqVYj|,h.6bVs0p^$`z;<6$28R E/#KG~IVUzU6AU^RCW>d^r' );
define( 'LOGGED_IN_SALT',   '<_T=Dn}y4xASRSkBB6;Yy&<h@~!m=T-p(L$#n|ld*+Z9nYe#2.^@0v.|(pkGWAYs' );
define( 'NONCE_SALT',       '6W|1g!GiwCdVQ@L$vq95l&1M/2dFkmf%?zLN`2C`^o.^z9?2?$]fw]y4H@>bx~^W' );

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
