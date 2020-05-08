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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dc_bubble' );

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
define( 'AUTH_KEY',         'nT2H|&_b%c&?[YuP1J)Fkbt0g39ySZ.M~p@taL H.D3.O<Da>iF?/,<RfqZq#65}' );
define( 'SECURE_AUTH_KEY',  '(GG,u(^mMI8)9jBgSvH!qRNX1z.NOT.Bk}4Nahw3L7!JH:Fwxvr6Lw*Md~98XGOd' );
define( 'LOGGED_IN_KEY',    'L,F;Qs+}nq3E.y{(;aDuGkd)5#6Io99ndrT+:poG2!9Q+@pf-q/z+PA}ehVaQ)fG' );
define( 'NONCE_KEY',        'ZiRBHm{_Q2;0&)kK^8#:#}6_5[6XMlb;w,FdIAH^qrOXPlw{Z=yo[uSOH7+xFEZ8' );
define( 'AUTH_SALT',        '#17++ymxAM p-{Q|,2kWIp@~we3d,IW:?.xecA}Gb0#i((Lbgg^%TSd{r5=iK~pG' );
define( 'SECURE_AUTH_SALT', 'i#O94F}m-$&LBlw3WstE VR18y0X9[G|#`iqT)`39bXQ<?6o<=NS+R9?vNJxLj3#' );
define( 'LOGGED_IN_SALT',   '|i4 98l^r|jVY/b$sBYJJSLS1[/H^_xhPm)m<GV$LdYZ`{_Xic6ko*_N5ZGz0K~N' );
define( 'NONCE_SALT',       ')dggfJ/* l*zcT@T43[tEpP(p?b($B{1CzxLOvYp6JAgZo,2{(>dkX Q#>i,;wgu' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bu_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
