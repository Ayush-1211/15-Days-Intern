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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'p`g;5suUpSNUoRCC;%YTD%vSI^_z9CQQzNp[x5yKa<#y6rmf/J;G<U>C<f?j@.lv' );
define( 'SECURE_AUTH_KEY',  'wj-@&ofIo{wM.gVP5up9MH^3:;-GWqd&y)}eT |d?k>0d+[{XCG&|/j+]Q%l~[R$' );
define( 'LOGGED_IN_KEY',    ':{*8h|Y/WIf=%|=6wVh6w{]^)6GQ8hK;Hkc=Mei7k0[25wfO?_7X+]{uLMNM(kK%' );
define( 'NONCE_KEY',        'd?hU$s#X#hGjq;*)MBo eb}g}i}$]ZBOJC#IR~!YL?yK|>1C@nTL-NQ:sM0NmT=q' );
define( 'AUTH_SALT',        'e~9V]#sg,uOrp)Y;(2?e{@;V:o`Z fKow$L6w<@K^X~d!3C0SsS3VaTnBbXinu1?' );
define( 'SECURE_AUTH_SALT', 'orHfpDJ]hJEnErT6= AS!JoXrr){pwx)vtJiRlAMIcWE&AbVj9X78Ec$5d5;tw{.' );
define( 'LOGGED_IN_SALT',   'bgyLtSm}mT2,:YVG|ID8{1MehGJ-o-@Haep3ktMuc28QeRdL>A/FtM.f{-3mU?XP' );
define( 'NONCE_SALT',       'jEI7ZuOlrWg|D#?,PzT)wJ6y>$t#d3^pEbA?dsw>Na|UOR`yo1Ad1s`#bO9aCqP)' );

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
