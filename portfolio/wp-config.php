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
define( 'DB_NAME', 'portfolio_bd' );

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
define( 'AUTH_KEY',         '>.rO y>H-(=aXkZ(!sR:lQKw[&cf&SpfOIDyRvHIyON(_cFjg8MZ1ySa^{xEE0Mc' );
define( 'SECURE_AUTH_KEY',  'zXer?vhb_ Q-fl/thDQCk!+0(pzrrzm`DXzNGQd]^Z4ZD RfRe2eqN-R6653)-c}' );
define( 'LOGGED_IN_KEY',    'u&ETL[J_SO1KZ@S;x[AFk-25[HlEl]^?qHnU1j-uu1kC*6MSQ@3ygb8!SX:`[`|6' );
define( 'NONCE_KEY',        '2*Y$EdFo`+^zG~::37W/KxvF)1eH<B}wPMF&Zi)6AXz%DlVY5Vgx`hkRSoM ) h<' );
define( 'AUTH_SALT',        'b:_!;@RL9GV/`.NfF>btT(m0)0&e0jXB-_:&;@*M<)5QLe})35SA+1Z^ca7g9l~S' );
define( 'SECURE_AUTH_SALT', '@(L@HE/rDvDmSv*,cMuu?9<@o[049G##ar-2|hvUBscDw_D{!X HhE(IL]^rB7<!' );
define( 'LOGGED_IN_SALT',   'YfrJ>)4zO,$r::>6 yQ9juTn;JpWXh#TH(aiW9z{v?(Sg7XT20~pQsS#ZI<@t$oh' );
define( 'NONCE_SALT',       's4ZnwC.,klB[W(d+X8j+X;8]V91dsN^!TAj&foS?` U5KBR#@(d`%om>~haQX+)X' );

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
