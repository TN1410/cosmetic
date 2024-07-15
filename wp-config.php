<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cosmetic' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '0z&62)ekW4)cp1-~&j  abju-]<>hl2._qpDz57cq>2n~CTuh.A<I~{M]Wn<#1j(' );
define( 'SECURE_AUTH_KEY',  'F7^uJYC|Q=A6XwBjZ`^P3&TT>G$Pkc`KcBY>e1O=Ug>0iMW@9uL,;qgU4iH*vM;r' );
define( 'LOGGED_IN_KEY',    ')&^-?EkvTS`.2]EVawnS;lSJE55vPKpkMI^;jhuO-5{S6YPuk{RVAjH{LWU0m*rk' );
define( 'NONCE_KEY',        'Cve2tFd4&;cEN3j8PE#bq9:s}; l^}xZj{LAcW|0^y({hppuilnDXvC$E0:RmAKF' );
define( 'AUTH_SALT',        'bAM=yQ4+:sx5+Pq_`K}z%[QXEsZoVU*!aE5rR8038EO_EMJCL~X l0f aM6So{_C' );
define( 'SECURE_AUTH_SALT', '+v^96>/kVtP+l&xr{/^$4_q+1K_%j&>C&%~Ajeq4#lSD!H.@lMg3~s{tpkazc$Nm' );
define( 'LOGGED_IN_SALT',   'Uwur#UyWlJj(uROyE[N>)D4$7DC#5EF(Yb%$ pt8vAs% {y9cBn:feO2>YGKeVM<' );
define( 'NONCE_SALT',       'LZ]{-[: rb)O$}XXg^hl&am{,sY*g=.&0 KF@.%/u%>mcD4v$%z:mwBIQNk9~{r)' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');
define('ALLOW_UNFILTERED_UPLOADS', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
