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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '`QTUe:a[qw@N,`P|{J)o~V?U_cd+x0{tpTG-]PtK|q.5mFwfyE!N3*(K VL_&rxv');
define('SECURE_AUTH_KEY',  '-eL)#j0|QMHnd<.DG2ydy*]k)|QA4 tynok/^%e?:+p! ^yY9 ZzX]v?j}cn9#A:');
define('LOGGED_IN_KEY',    '@HJ PkWhq+9ieFg4tu*K5Zsg]gc;GMTClwkhIi5t+J([d[tC})Em!r4k4x^P!nB_');
define('NONCE_KEY',        '64]V iKdZn.uUziXTo`.%kvmj}@-%Se;79FGF}g<C-_|A5>z$FNCE2h0}yRqf%$1');
define('AUTH_SALT',        '&C,>TL#iXADb[=Ud13!}p>&ols~JH[vvDSN|iQw-(/D[RRa$, :Y&y+gN<*!1w}`');
define('SECURE_AUTH_SALT', '9RjtB|0^9<KpH4/kx4TTkzP5aX8FE7~f!n^9-mom ]]ud`(!Ad*>~>XErkIU8I8;');
define('LOGGED_IN_SALT',   'F[u(b-(^WfFOr~jGHJe&B!q:|sKUc5nG2[oZ7t7+(4*4T)[?M-~+F*AaT_y,$n+^');
define('NONCE_SALT',       '&$8l7XKd@K~U%[Gu8IQ!*^c:[b<x3FW^ij:-YqB,F/eJeSvulaqE#6,q0e|YnMh7');

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
