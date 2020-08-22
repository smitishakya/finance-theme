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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'user' );

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
define( 'AUTH_KEY',         '=4AwF5 j?xb52=Z%>8HWgqOoiw6u0kig0$&(m~8Kw_5i,1Z*vhMje^bfdp[&@yh}' );
define( 'SECURE_AUTH_KEY',  '&4vUDU.Y_rw2hKgd]f!4^1?%s29pW3c2>n$[pjj89;UZ-iVbAfpEp4g7(;uKR1%:' );
define( 'LOGGED_IN_KEY',    'IGq)TBXUs}<Jo)Fx6x:^$,9C[,QyRE5M1aS1BKGyKqg!KV8N)*URqE6`VWpH)f@,' );
define( 'NONCE_KEY',        'Q}pKWrPNl4Qv0CQEcsLedR6C~${hmoS+x,zVJHDvZV61~FpZNk1&3l2W2yF;q]I,' );
define( 'AUTH_SALT',        'B+6xE1OthvB/K>`xidd&Ssh,MQKkM=ve4({r~8x`hXBp|Tx:XVN+)%4-&oV_}R3j' );
define( 'SECURE_AUTH_SALT', '39*;MksR>1gK}rEhoyvsTQx---Nsf2T5#-Z(34QQ`y@Sh9!06p~@gkK=o>udm.Vp' );
define( 'LOGGED_IN_SALT',   'LECdU#_*Os3Ku4AX2OvtzP=e36_zi4VI^!pr]ZnvxAV$<O!sx?jVn^@zHg,DvJ-@' );
define( 'NONCE_SALT',       'oytdiC|xSNkbN]GHb{He1b9z}!%X2.;_!J)(|FE19f+n:RSD&R?=tRNXbtyQK9/U' );

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
