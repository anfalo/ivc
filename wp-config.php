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
define( 'DB_NAME', 'ivc' );

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
define( 'AUTH_KEY',         '`]PJ1YJNRX0A`28~fE3MfAxU1)>q&!WeJ:wYUIJ bd9ai#pA.mA>Sw5-W.+3%yv8' );
define( 'SECURE_AUTH_KEY',  '|+tPtNE]z)e$4EgDr*KO+/KIof^997DusjCT{mztQ#*I:4`a2G:I>Ak3z6`zONJ~' );
define( 'LOGGED_IN_KEY',    'cc+8=!&f!MwA-0$50W&-rUwz~.&P/WKezrwmAJgCK%%hyXz,AN-E*?affg Xy(=i' );
define( 'NONCE_KEY',        '?yGXYrWH<?JTz@W{7Gn9i[L]mKu#^Y}(nHS=gj4?F:(;X~ D@lX{cVy+-px*&ER`' );
define( 'AUTH_SALT',        'Fp!QmN%E15.sa)bboo}#DsJ5]YC;5f<xFt.Ydmo{=EU)7Q1Aw,c9EvYN$2]6yb*d' );
define( 'SECURE_AUTH_SALT', '#+&,PU0Oj~koVUl[X&K#%B$|:Khi[FSj<U{1/)l}^Q.C-8)ZTHeSPPK?lv.<hr|m' );
define( 'LOGGED_IN_SALT',   '0U{s/Rm41cet=eN1*Hp`@}5W2@:aItKx/KSHAztsL$PkhaUWex^L>57M7_SM!O_+' );
define( 'NONCE_SALT',       ';8PDIgQw]GO,+m=XVr_YH#}?s)@AhC>$GXIDE;`PI/y00D+x`%lq)1:tXU1+ur@a' );

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

define( 'UPLOADS', 'wp-content/upload' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
