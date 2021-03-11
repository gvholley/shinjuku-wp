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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'fW6T1J35XE2RxNpqt4iiKxUncNlcWq+Lwo+2AePUYM53ChTT7p1fEIiINdJOO2tChNZ1Xj3vIQCeZwQBKBpAFA==');
define('SECURE_AUTH_KEY',  'aAkmfIEotGln+cEGFeDnbw1fwFPdrR75E0/ayf/7OqhHNLe/5iIyJnxQcexjRd+EcfK66IHHGn86tTh9F0/K8Q==');
define('LOGGED_IN_KEY',    'wWyKNWy+skBEuJH0aU6STi9yxqxcPepxoRzhfgrxhNtqtxY5Vi9tVaYHqk17tH578yMd/9pTDJEUVj6fYJ1deA==');
define('NONCE_KEY',        'PbaycJGGXwIWaiBodyIcnx4hiX25IayAJGl4qGYpmp8I3EQ4XVIVNUuehYIv4iFE8kO2nzh9zuRFz7h1c/MDJg==');
define('AUTH_SALT',        '/eOyI7zOZbnEYjlNvpKHtRMLniFPRUcR75prqn4sAgo4UvRUiDV5D6feMtBuVukgbel3qQug9DRZPl9gJu4xZQ==');
define('SECURE_AUTH_SALT', 'lmGGTHuc495MqZK2tCSGqrfmSs7/Qx2ywy3myLovqnViRx9BhxLdUxO5Fxe67oxfmBFIigY9/0VyBO0T+5ntIg==');
define('LOGGED_IN_SALT',   'Am6rOnYBeV9pFob5j5pNCpkwKvEybWXzWDyVZhIRQr8+jhMUG7riBCcGqwLrVJ+SkBkgnEwQuBwv2tBh293J0g==');
define('NONCE_SALT',       '3+mrvriY1DcUN4xNltkUa9hA8OxcuDtSfbuzQ8agFQGhXuF3Ba/7lvfR5qD9nTMYtAqSN+2G/Sna9zdLBCPG6Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
