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
define('DB_NAME', 'wp_js_course');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
 define('AUTH_KEY',         'lp*peYk|MQ(o4BFw`3(Vapb(MtdZi,<@pf<<eHrAOGk]NnRV#H/Z|4O]e9vZmGh~');
 define('SECURE_AUTH_KEY',  'R][xxqiW4/5G+mH|wXtl@qqt_-%8 ];j+)@b{|TfYjp}+Ztu -OVv|e,KJ=UTWZL');
 define('LOGGED_IN_KEY',    '&}nT-iZ6CoGa-c2x)-GgG+<oKQt,6^fL[=]Q|1B13)U4oYal0cAJ1@JJp#Vucr[p');
 define('NONCE_KEY',        '_&[`z-DsUJ&eYJtZ<zL-]#v5IDNC4SCT{U@CTOnUb#(7Js>l.Ga-p3_;55x^vS]6');
 define('AUTH_SALT',        '*7!2fN/@@,gX`NcoPN[!x|/LjWn5X;f0W(+_9H&ZVN:]JO!--:^.?7PBfF?MrX+&');
 define('SECURE_AUTH_SALT', 'LLzx=-]st`mDd#|k%5APduCQC*q(%GWrCQIv+3-Od6I-hKj33F(l#4TT*P5$2g9C');
 define('LOGGED_IN_SALT',   'DRvc-)?ATxp1iDGn|6`QX~70u}~g+trf8bVXSb+TVUHd-u>-{X:q-K=Gof9+2>pV');
 define('NONCE_SALT',       'j^`@JMcLFDo0?$+>9$G_YK^jM~[6|H,&H/23TxIYBr/J5[U9)p(a=4c(Dr*A_4{Z');

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

define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://localhost/wpjs/wp-content' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
