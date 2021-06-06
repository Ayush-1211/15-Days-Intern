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
define( 'DB_NAME', 'myblog' );

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
define( 'AUTH_KEY',         'uhRkY@p@a ?VZSDvo/ciXi3-]SnwK[bbIYWK|xj0&{qH+z`a(V^p+Yx6SGm&u.Jt' );
define( 'SECURE_AUTH_KEY',  '~,+nyYO=WQX6F8enPlP@vxvLg^F_A#xJO~o1jv-%U;~w+<fG$N>Q^^aObl6B~Cx#' );
define( 'LOGGED_IN_KEY',    'c#_xy!Z,dNg] OxX?r#N1{?^;0`r1|r50s: &nB~q)88*=_~:F]d2UJ`,M)2pRgs' );
define( 'NONCE_KEY',        'Vh5B,%p.7~h*-qv Vf[IyE.b{R*>~.>/+kAm=eG/a9fBc?Le`eR/h&J26=Wb>LW=' );
define( 'AUTH_SALT',        '.WCD-Gv0C.PlG8zS2b7>#!A`)B`D92:n`KU4{qEfe~sxXvRW+J5kv*Z[k;),Pl}j' );
define( 'SECURE_AUTH_SALT', 'NIj|LT<5yPE#DvIa+] JkxG(b)wE(B,oml|!mAhPG6&dQZ#.B9oDK3y+;Y[*;XMP' );
define( 'LOGGED_IN_SALT',   'e4q6jBjxJhUE<}JM:VcvK7^K$-N,5~%M+qZy`Y|Q(b%L6S0c9e)P{uU*GrLCMmu^' );
define( 'NONCE_SALT',       '[dArc(Z/nLs)qv76wk%-!g;q|-5,hxL{[Teu~::K7<:|Z!;giw%XLEdV0O3m,f6E' );

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
