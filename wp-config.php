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
define( 'DB_NAME', 'britanica' );

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
define( 'AUTH_KEY',         'HR.m,)xRdC9py/KAxb_il&ZSt/IN+bjD_DAe!x[n{{X5*t!R/l[mgrJ9D-,kDr)y' );
define( 'SECURE_AUTH_KEY',  ':yFw%B:8%V57ky)ZO>tY|QX;`&pZ^x;$-@r}TJ]Z2k[<8:g,_fLld&*Ayzz(ChhV' );
define( 'LOGGED_IN_KEY',    '7raqyz_b!wozat#>d_nPQ}/H` u)U)vLgyRwn7$c=p* A!j LJhszw@LCYBr-|Pf' );
define( 'NONCE_KEY',        'x8v7M.r?[qV9P!(Iq,G~OiRYK&uE ;b(%[mE4DE2owVct8lq{K!}Kj ,ghY.CJm>' );
define( 'AUTH_SALT',        '+;j%WOI?sNR7g/p,Wa_>atw`+RBs-0x-d?6pu`k.xIQxP>SMB}-S]>_IWbZ+(QK5' );
define( 'SECURE_AUTH_SALT', '<HHt}7y5UfR|5x(XC^G.[DfRY@A)1EL~G3i-b$<_q5/f?)Qi}mj+xQ=(6J.z57ga' );
define( 'LOGGED_IN_SALT',   '5/Uc~wd  8+r!?GD1hHSp&2h+4.m437w7<]$.=%B/,EN}75wKvg!FzrviTi^T~db' );
define( 'NONCE_SALT',       'h!o*Mb@Yy:,aX7D{!7d@PJML*$- }f.;f>ki1eU^VH2_S[hS}=zWSG([:B#+TaPw' );

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
