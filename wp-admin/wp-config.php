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
define('DB_NAME', 'tarfand7_book');

/** MySQL database username */
define('DB_USER', 'tarfand7_book');

/** MySQL database password */
define('DB_PASSWORD', 'F*&c$ZM$u0jl');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wDU{zuh9MhaG^-p.;|7XQ0ItNx I#0-@uV-.p^A;N%/<:2uZ6U2din>OJY5yCRUl');
define('SECURE_AUTH_KEY',  'H`:7JF$1PK_w(PUN^c_10=RY:x2G&cUGXmbR5U8R9T2QK6+Fp$c?s~~<:l{v5t[w');
define('LOGGED_IN_KEY',    '6d%es#oF{jHK%Bg/O929M3KF~~le<}G.waXh[BqX}_lwJ9Shq}4erAaZ{i%P|N{Y');
define('NONCE_KEY',        'euJE3K6RZkV[?yyhtr[3Iot%z|SjRwf tLB/]&0m^2dUIHJ`?tEFj}5gUEq)c|!m');
define('AUTH_SALT',        ')5p7(Z}l6-:W12!1#tb1zUo#0[V~P)sHurmRbH>@ckw.!$fU+d*Ep7A9fW8XKa>v');
define('SECURE_AUTH_SALT', ')4Yl=9j#^7y$K/H,tm`$&h]8_l]T%}G9,Esk{_>HWd_Un]0HLsJp6Qxi,l&;Q&z~');
define('LOGGED_IN_SALT',   'LeQR8l~n:^^<#`$^}NYV z-IF8R,<Rd%N79f/?-oxt~%~n$!?JI._2n?AwI*<ptQ');
define('NONCE_SALT',       'eld+b@XNp|4[%#(4N^Cq9^z iE5L_{-Lu0C@JZqR>< uh7#l5b|`Atq@aBB[kob@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

