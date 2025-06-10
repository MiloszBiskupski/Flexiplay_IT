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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', $_ENV['DB_NAME'] );

/** Database username */
define( 'DB_USER', $_ENV['DB_USER'] );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', $_ENV['DB_HOST'] );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', $_ENV['DB_CHARSET'] );

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
define( 'AUTH_KEY',         '%rMrx: z-4d=0?aN>Pznht`*Oo+9a~Rg[T&5iQc/sV(j!@9Wr8s1wg&/6TZWWX,9' );
define( 'SECURE_AUTH_KEY',  '6$U& r w!m_li^Qy]Qh0CSS;=XD#:;_ns~,Y&M@h.@;K(n fnTL,s4=qVB^HCaol' );
define( 'LOGGED_IN_KEY',    'gU2-m|ELa[[TAo?.,yRT~U|(c3ZFKI-.Sq|:b[xdO6]iIS,gX,6Tbk&MVUzmB4}%' );
define( 'NONCE_KEY',        'sA_u3lN=d1_ _&2Jt,IF=R6Jt&`ORl N[`%RUzT=tRP,F2]6UV/X*qW|Dx:zfTpk' );
define( 'AUTH_SALT',        '9m-L{|_x&4v<|nJn+1=_{1R=7fZ;H)utgW-+2mHkKxWy~`DEjWFs$FCil>qW{8w6' );
define( 'SECURE_AUTH_SALT', 'EW6B5;n:Fdl[ibFwbQrnjIA225S}@7hc%p(0yw[}^dP>)#wpO7e`l!<v~>i/b;;K' );
define( 'LOGGED_IN_SALT',   'hP^IU]2ADMTk=}bvn-3At-)6<Fb=_d*I4qR4uD)}DPCF056Eyfl>Y`8_Vbo<~YM!' );
define( 'NONCE_SALT',       ';x/hWlf{]E=_z29:DntUzD/0>JM&]3IG:nh;!~Mi2_#EBhZQzl>-iD=9:D1?;$O0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = $_ENV['TABLE_PREFIX'];

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
