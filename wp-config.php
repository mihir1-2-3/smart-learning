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
define( 'AUTH_KEY',         'Gc2RK4MGBTW0NA[Zgg`lV~Ui,Cn$]9|:.od.p Y xIi87!...MuLi.`O{jq}lH7l' );
define( 'SECURE_AUTH_KEY',  'i5oN.|8#r {u<}yj_o#<7fQ6TXHtl1Fo5JYn&x<&$WXH-7HdUre&+4n;vavK9,Pd' );
define( 'LOGGED_IN_KEY',    '+32flgh;rm7-3*L!Pk`e6TN{D~EQ^qso}3/XLH|5lW*ZDV<4FfR6yCeWu{:f0V0%' );
define( 'NONCE_KEY',        'k9cv%q+wM(96fsmx7u$*zpu6:)!MBY#b>F:sSa5t]BLQ}S Lb r3l@]V5LA_B*o0' );
define( 'AUTH_SALT',        'zrtFEQKLoCnQvoFh:z`U2_pfFva kL~X_GvtK+(M9JMC(Q5=r|YlHhcQ.+WmuoPP' );
define( 'SECURE_AUTH_SALT', '~^v@KTvr|uhfN(guy5$;5p,Zc-d]hUAMFC[4xf~@ZL;1$3{/P7Tu<R5)ik^90e k' );
define( 'LOGGED_IN_SALT',   'TDvm&0_ i]A~2t}j&ke&3Mr:0LO-<ylZdx@v[;YL$C4ddQ~i,9.?6E9?XOxREyZn' );
define( 'NONCE_SALT',       'sS>VG0x;I)><aH^6n_La7N`W5^=|5eBt?XH5sz{cm;w 1-:GCf<c/g@G720whlY8' );

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
