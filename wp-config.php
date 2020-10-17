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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '%R!AtNDTzK$lMF;[n2]RgH2)#UsB|TR},6J#HiF8C~Tf}HhLd.q RY}%i^SQ5XFI' );
define( 'SECURE_AUTH_KEY',  'yDj/_<g%pe?}#9LWl/?SU;^,`~*&]P2~3N7>7Yb)l+AVdr@08K,7>KP)bM+Twzki' );
define( 'LOGGED_IN_KEY',    ' A#~KBk<BW4W$^s~(c|{]A{1wB(?.JgRHY~Y};r9q$D~uR7-t]7MnTI2t-8vj}-5' );
define( 'NONCE_KEY',        'b(;s4yd8Sg028+a7ik0@Cxz=m8B3>z{(k07PLyRi#QR*?EuvSKb(2bg3j6^3{#0G' );
define( 'AUTH_SALT',        'U+xX`U+mUd>}((b?hB)ewXtHk0`].<0rbZ}D?!TR>rhTTwR:^O%!OhR<T0AjRW}E' );
define( 'SECURE_AUTH_SALT', '&9>Q>pvroC?tYyD6-@>#JRTyPy[HH%a*EKuBuA-h#~i;JB[&`1dH=bm-Ia&@UJT1' );
define( 'LOGGED_IN_SALT',   'TBX+(<:-1KI&8TF+V2A$-~`#(`4P3h$cDvqjkKpna$jYNzc<g<T=7o-5eHTeLQ0$' );
define( 'NONCE_SALT',       'lG*nPApmm/5<7<J4?N;o)U,0A^)9sHU=eu^[.<S2gS=[}7hFJ-y5~t+-v:8FWeZ,' );

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
