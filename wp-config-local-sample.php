<?php

define( 'WP_HOME', 'http://localhost:8888/projects/workshop_cattolica/wordpress/' );
define( 'WP_SITEURL', 'http://localhost:8888/projects/workshop_cattolica/wordpress/' );

  // ...
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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'workshop_cattolica_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'P`?h{x1~%nbMuB9C:8va9DwCC+wbcU%M2*(}Xy@qcWiG,6()%B%|j+!&aujOyVS}' );
define( 'SECURE_AUTH_KEY',  'o}!:4W6dGB:a$eaA.V!CGf!dMI6omHMxu|PgnrbioVu!|DfCH+fKT%@w>fiq5OM;' );
define( 'LOGGED_IN_KEY',    'u<pxX[= lN{XD{{&rydxA+5A.R6puPu-X3hpYZJ|`<!H[4W6e|-Vv{y3>VfMf>nj' );
define( 'NONCE_KEY',        '4s6vP@SKt(2xrLW+ACeZK@%vA1lpkd+~/1Z@2m2d=d&qqi1XkZ`JAT%1Z;< !z`N' );
define( 'AUTH_SALT',        'c{Y!rz]R1G.BobVU+BF$x]uf L]G`.[$q>[<zVo#Rb])3Llf2._?y?A]b8BCmATC' );
define( 'SECURE_AUTH_SALT', 'su`hJRwUC._P}N>Gba6p :JH1BSVkT:PmehJEw{[a}w76dMUNnEgNHcVA|HH{+p5' );
define( 'LOGGED_IN_SALT',   'FbGj~p?2m&;A8eh.>nr`:~}/r9=nZ:v8.IjOS?1DE )~91>b`d?g({UOlY}5+$ZY' );
define( 'NONCE_SALT',       'yJm>M2mw,j$|s>{U4wLmR&mz}rv:6T%<n/`MNFGRS`<JT5a?Xo}8+lId<Zu&j+LS' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
