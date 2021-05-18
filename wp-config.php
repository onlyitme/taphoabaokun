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
define( 'DB_NAME', 'taphoabaokun' );

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
define( 'AUTH_KEY',         '7)n^qD2Bt&?5-wgN| $_JMDTfuFRhxHydtw9,i=bi!gW_;;6,4WY2YvF/;o7iJ*R' );
define( 'SECURE_AUTH_KEY',  '$ylGXT2bX8N};l;6/Oz-1VQ-Ag%^XjXTrJ(KZHlrpeG,)Z0FQ5BWzNMB@&Zyp`x.' );
define( 'LOGGED_IN_KEY',    'Taf9(uj[zHSM5HlvfFV*@ 8j4*V@ze]cKhGMk$iHU^p?9-QVwIu9V-UGC<<{zHWK' );
define( 'NONCE_KEY',        'z$crEmAe[`sZ%0o^$Tl)IRQ(Zz8,/CE.tGIu)uacE Tj$`r1NVGpOM$FHgao{Xa0' );
define( 'AUTH_SALT',        'I!Rr/ PC:=YWx@d#Y:%Ex[Ru|o~(to}Vx,X;fza1XB)&HHVkk*T#9zG8&?up}}oJ' );
define( 'SECURE_AUTH_SALT', 'I@5=g#|zb6DC~uIVy`m4q9p|mfR^^a)ulY8p eXi+sqdRT9hC;F1*`]9F`QB`o^W' );
define( 'LOGGED_IN_SALT',   '&)-ONyM9t{r/~+ KL_(2].~h,_.p`:v:#7,j4N&wTS4{4]6aZ)4NX:{5gzr.TyYI' );
define( 'NONCE_SALT',       'k+|N^CmFAuEu%uN.8R&:EqMZlA9+K6&v3aYJ+C=)wRXVC?hx4Dl<A zqj[IBk;7E' );

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
