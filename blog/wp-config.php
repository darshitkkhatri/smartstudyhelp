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
define('DB_NAME', 'smartonn_wp835');

/** MySQL database username */
define('DB_USER', 'smartonn_wp835');

/** MySQL database password */
define('DB_PASSWORD', 'bS[9L3)bP1');

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
define('AUTH_KEY',         'rjbnucwjrvn6kmhemvv5cn8xmnqrklldxfp76hmwp2niqaqxtcmybsefk4dr2vz6');
define('SECURE_AUTH_KEY',  'rjb11o6ccvec25wtd08bx8p6vraah5wslw9jgqdbtd8kcju5jkw2qorcnjhbalij');
define('LOGGED_IN_KEY',    'kp4h7ja9iinika99sbbg0hmr95v2hxuux3cea0olhcp1vfxnzbjrohglasfsrkif');
define('NONCE_KEY',        'kdoskoklr2nec7t7f8zk4ozfobuuzof0asoluanjamqnyx5eg1uqlhqcsq1ggeko');
define('AUTH_SALT',        'fzlsukbwcwcvv9mp10biyhlxzpnb52qkqarxpthfclqvne1zj6ouofn3mtsrwvc7');
define('SECURE_AUTH_SALT', 'xo1t9vlpmeh26yi9zh9rvygky5mbtxwgqbozcccsuowkyuofdksprqdkiedb3grh');
define('LOGGED_IN_SALT',   'yvmsrejivzjmg3ayqbdumadfm07xmf5apa3llmrkom1eryjajrfsng1vvys2ht3l');
define('NONCE_SALT',       'ceqo6wnpzzcretgbqg0dqsrspdwm1fwapp9zglebbj8vjsrxohsr696or4fq5omo');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpdt_';

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
