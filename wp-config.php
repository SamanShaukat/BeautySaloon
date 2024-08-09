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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'BeautySaloon' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '/g8MSf:d|RCJlB#:V~aze{Ia^DT9{)*tjym@AIELbjcJY1I5*kfeV;M4>lWcTl_S' );
define( 'SECURE_AUTH_KEY',  '{:`@d=!:%uJl{j/0@?s4Ey:J7$oWDA0od9ie&gn+!v*Y>,b]<K;U9!1CY_2c~Uzl' );
define( 'LOGGED_IN_KEY',    ')%mPBSx=/,,f{{#n3HlJ&MpzJQ.=7(zqfek]+f3u?}y+L2slN)}X $?.Nvpnze^j' );
define( 'NONCE_KEY',        'I3^8N.6IrlPe/_9;cGb}b@V7Z6%+~C,fge}fElJsc%ukOrFCjd1jj?W:<p%7N:N4' );
define( 'AUTH_SALT',        '8fCkzZ$Q4A-PlIlZFx6HM`[M_sQ.3g#f;S9RKbB>NFZ`,}qJ|YY;{J A*1%|oWn^' );
define( 'SECURE_AUTH_SALT', 'ZhHM9TzZGNR(4C2f:q~dWj3On40>{u|/= n~S{q64|^J~@AYhtUr<L2(K8)89i{6' );
define( 'LOGGED_IN_SALT',   '^el.WC.]/~z?CR#jm&nB.)4!ig7zP%7X5w7|)%}YVG/a^Z~2Q6X2{y=AsabZr)Ks' );
define( 'NONCE_SALT',       '^@tE]/c|EEU(2LO$+Meq<.K(!;5&?.<K7c~?elEz(hH$<Q`uJ?Q!%e#w|.g.35 V' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
