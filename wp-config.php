<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kelompok2' );

/** Database username */
define( 'DB_USER', 'kelompok2' );

/** Database password */
define( 'DB_PASSWORD', 'kelompokdua' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<dfT%6 NnD8ZX?%4e$>8M=g#CdD=Pu,;G$~n{i`KMu%dm.AEsvnX.oZ}G$t~6~SI' );
define( 'SECURE_AUTH_KEY',  ':;4.&1|IAybR6]4,3EJwBL|Ok3I4jh2jS2yCavrX% A}s3U$p*H__qYC0_nMz2_>' );
define( 'LOGGED_IN_KEY',    'Tm}t9@T)!wnfaHPk;>%2zEMf;(L>GgWam$xb4bQ`2pULE*oglxUmzG9v44K6C|z>' );
define( 'NONCE_KEY',        'fJ#]MbXKIJ236Sv.Wn?nJ`/gV}VI5aBp|wWk!+x5{XcdFIzJE_t!<]w/+MLyrG_M' );
define( 'AUTH_SALT',        ' (?3u_8[a16*SO11A_]U8gtp%*oh+kwAW&ImjTEF?j_m-OQU|sCv[CK!6)kx:&T?' );
define( 'SECURE_AUTH_SALT', 'EXaFqq|s~U*.v~0G4RD*E5mHgD#^iZ+:m72=XTtE`A],J`!x#i/2u_{fv<mMykM3' );
define( 'LOGGED_IN_SALT',   '9G?Cy8J=Pno(OqwdFCDDm=,OH{xF-[^e+jEffOG>/lYK}$sKR+6gGCnQHCs~h*7T' );
define( 'NONCE_SALT',       'V,?>@8xRL?jY)>!)HS1kw2_oRCnBWrD8Cc09y%fmhV>zV`x}%!T~u@@2SioPNtTD' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
