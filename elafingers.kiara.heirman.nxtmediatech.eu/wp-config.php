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
define( 'DB_NAME', 'ID211210_elafin2' );

/** MySQL database username */
define( 'DB_USER', 'ID211210_elafin2' );

/** MySQL database password */
define( 'DB_PASSWORD', '7p3P6dw4' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql434.hosting.combell.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'taubJpsO07AD25lcNK8BAW6sg8bZp3OsMAEtNqI0Lk45JOfR0QbvkmhQtNNSZiWQ');
define('SECURE_AUTH_KEY',  'z9vMzwBmNRyBCZw03a04mqxBvgdc3LXmbi1x4B3n39qV06EGAu09cQC3DgDy5w2Z');
define('LOGGED_IN_KEY',    'rorEt9hLOLwufF8Qrwn5ZYJMr6Faepo5RThDfW0FB5xCpupBEvtyjRL7Dzmyg0eP');
define('NONCE_KEY',        'EAkz90TNXDxJ0FdrmYVPVAzu9gozfEnHrcsnfGWoX5nHEy9EviKj6ocOmWeXAZjw');
define('AUTH_SALT',        'B4Kjd9IrjFXMoIWoy4Ch4pQXwT6CkftO1y9sdmJlY0am06xUZou99O7sfIo9WzCP');
define('SECURE_AUTH_SALT', 'PtPt7VC3Je1GbWq7tXVFwz6aNbor02MgLHNo0C0MRbpOlkmYtV87J7CBQQMw7EaW');
define('LOGGED_IN_SALT',   'tqv7oAuTCqgJ5dlNFZtJfygkv2MCvZDFzC5r6xzlCUXfNtiv6rSrQCraYrNezKn2');
define('NONCE_SALT',       'ISSd7XeJWg8Hwv5xAEPwBqdEYBqYz93sqW21DsmNOktgvxz4TCPG0bPvy7xnUrsk');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', false);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vitl_';

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
