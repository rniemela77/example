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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'example' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '|UcC0wdmv1,l|<73(CE7Q%,+U30d7;,no$S~RI`Vm^CpnRPaFGLFI?27V1Q!0]UQ' );
define( 'SECURE_AUTH_KEY',   '^&@:? kax<zI2mpg}vnH5mqsQw1G7LYK:Qhl71d|2z!wcyg6A10JyL,3*q}Y(k{3' );
define( 'LOGGED_IN_KEY',     '.s_$`Zeaz[7zJ*kIsb0R^)n=Uhy?|@o2e>{)::(Qs#|G@PGq3DX+NFw=wl9ADy_4' );
define( 'NONCE_KEY',         'mvpWORc}$<w;&P<k9z@~`=sUZ9U2imz1HVusMdzFXHOPAa+C>xNiWx^K@nSFZ05p' );
define( 'AUTH_SALT',         '@i(=H2GWWp@#2pb:?hl]Uq8>)aLn*Uw!&_*r8Qk9::kC#SGs:) ^Fa?ItH.;eXka' );
define( 'SECURE_AUTH_SALT',  '7_#[Y0~Ii02!2Y-O1J*1iQ+@fS650*;oDnpXs$@5A6 ?|DE^?yz`QrV=F,~lm/Qk' );
define( 'LOGGED_IN_SALT',    ':yM4@=4HcDWD)T7{QBc;].08xpWb%D0bxSusO4_LsTegTBcfD4r;&DAE[Ur} I+i' );
define( 'NONCE_SALT',        'qUh$(<>J?4lkD6}y8hPJWmm.PYj87s;<IdLOP,G0pU1nzc,U;4/|&o4Rx([{!Csj' );
define( 'WP_CACHE_KEY_SALT', '&)7l:E-z~zx$R/4W4EqZ6;ZFZHYKi9u.E?FpJ0w&{ZE?&GHS?gHYBdN?AUiy0-S}' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
