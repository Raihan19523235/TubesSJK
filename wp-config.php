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
define( 'DB_NAME', 'tubes_sjk_db' );

/** MySQL database username */
define( 'DB_USER', '19523235' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'r=JUT2!|b3PTDy0(=?A8So_}lnri<?XtXXP_cj/RCfuuo2]6(inF=QT{l2*4c5xo' );
define( 'SECURE_AUTH_KEY',  '3RyW_V^TN7-6#xKnmI&cx$:4W]=yss_UhKOKggQ($z5[Z{C:1dn^zH*3k6gBnR7w' );
define( 'LOGGED_IN_KEY',    'M<1O*X,mw3sdaMCJ]Lrhb|jJpt!ARqiRB-_2CeGQ-5k+|Jf8yy9.TJyysrfS4>sq' );
define( 'NONCE_KEY',        ' Tz1?|vNV/aVi<|`^Aq5Ck$]u;YS?{/@,m# ]=5v<30*c^.6*O_nemD{n`-HFG#t' );
define( 'AUTH_SALT',        'H~k#cTn6%Fo_Gua3Y0[j)7.G)$%yGR8];vTsOOC86:;=_,m^+=@`% f44r(R2rVl' );
define( 'SECURE_AUTH_SALT', '6GxwyckBA6jl48xh<W9n;`8Blw_4!/# @t+,xC</#/[kz:R8oZ_E`0J2zl7F8$^W' );
define( 'LOGGED_IN_SALT',   '6nYnVl/xV]Y],ALAnq=pB(Md5U0-6a.Uh3WWt0|hY|j1gi_z2.0F-Zl=|+Q=&+/e' );
define( 'NONCE_SALT',       'q>8;~:sln=)f$G0Q!2pWOyLXA<USruPs@+ -/A#BSsp[c}i&78?%^)Ot~*z^]mSs' );

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
