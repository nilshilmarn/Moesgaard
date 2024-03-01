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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '0SE;s|rb3C5??7m}SrkKu<8@.n@M3a-ADMCS3@.62Eb)5^dHkMNJp0D&Sx|JO>CQ' );
define( 'SECURE_AUTH_KEY',   '5{l^^$}iQo(R#w0WC2#OR;y&nhBu/<MQ[MQUc7mJOE$U__UMaaeGziteeD*]nvIP' );
define( 'LOGGED_IN_KEY',     'E Tton6bhnbK*.{` %9[rL`6!Q@UGS`I<$MHAhUvJqD;=(_<k6YrWWoEucJajBs{' );
define( 'NONCE_KEY',         '~hC?mA[HvKOMeGf4rm1phVeemtwSp%75Z&Zz{]WJzw5Ko[TwdX-V{ q9W;a}Fb%8' );
define( 'AUTH_SALT',         '5|cntHJ06vMweN}%i!*#-e(NklW}nh[t%+Vt&<QEtxIag/9%&6kTBCdYlQ+sD,Ko' );
define( 'SECURE_AUTH_SALT',  'N-@KlB&()*P<#x*KFVp~dxIFh5.ry44lKN<#TmD*C9b)x}+!(fg_2HSc(E~VmzoG' );
define( 'LOGGED_IN_SALT',    'B%UVgNod<utE=Nj|)x!ejfNH=*UR(U^On9sl=Zv#$lnFMDb2V%Ebz6%KXPBHvDT:' );
define( 'NONCE_SALT',        '/u_W~9H(73hK^eT.R!rb.;vn6o^oTVi~F]b5t>>X8k_;VTWiD7g|V$4[~c,[G3nm' );
define( 'WP_CACHE_KEY_SALT', 'Ei|J%jQ^r=gSa4<I;*YZ,Kr_tiV8>og*K?y>_V$9vYLDe##EWIPu#OlPQ[,#)/PC' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
