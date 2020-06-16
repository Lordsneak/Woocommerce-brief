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
define( 'DB_NAME', 'store_simple' );

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
define( 'AUTH_KEY',         '}:E,espKbhYJL*2(BSrN9s+W+okTw6JBmkpdWOKa+<dP_@4*29XrTA&Ps*loi=2?' );
define( 'SECURE_AUTH_KEY',  '^.|H6no3,<&*30fNSX&EDpKNGHzTH?ExdXUI)O=yLL=S2p7d {Q<*8 `IMNm]%5j' );
define( 'LOGGED_IN_KEY',    'fg0i(zlRv~jpHH`<B4msBdAZ]oHavgt]=5iPcI[H7n=99{_t9Jt,!v6@ffE2aekN' );
define( 'NONCE_KEY',        'hp87z V nC6k`RVE<P>>PUh()EF^KC#pIar2_IrSIR-K<@fh0.LTw.:&4>Vj5K=w' );
define( 'AUTH_SALT',        'p9chBvZ^>Nq0DquCQVf&Kgxc|Kj}?MoOCt6JB#[|fOlfX;utD*zM]qE(ETXiynxf' );
define( 'SECURE_AUTH_SALT', '2A3BslK|c3NBxQZGuOZj=@[JC}fJD]vSuJYd0r<V#:*CRF311^J@#nXBZkON2,W,' );
define( 'LOGGED_IN_SALT',   'lW2io*x0-vC~)3 w>j;uv.w$Bh}Mc=n+?Yi!9f;}tk/mMb,jgm%pSE},xfjV<+ji' );
define( 'NONCE_SALT',       '63/!<&q4EusA~Jd95sn1U*cH _AegAh aoeqZSM@3X -a++JW#+dSd1#cVKJCr7Y' );

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
