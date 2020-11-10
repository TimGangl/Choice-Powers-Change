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
define('AUTH_KEY',         'Wqo7jlLDYwRYMEo7JJSdji09jnk89XYYJj57CNdxCnPQoRt75kUqw9hc+jaYcwGZ6G01Ypw2aGmHJNmg7hrPbw==');
define('SECURE_AUTH_KEY',  'YI+5Sm8ZMtcwhj2yRet387a2WyI9a/XtWLrTbBKYmZOMgv+sy1P6yCqiG18x2qAztFvPmqJeZx+GdfpcDRw6Eg==');
define('LOGGED_IN_KEY',    'DX3Yv5Rbev+AQdkOFgl9xzWum0lpSVck7np7AWhr63FIarfIEMsc6gKwyRfZ7glBzAcwm3gpqBAYm9sMvt4cdQ==');
define('NONCE_KEY',        'jXBh5bQe5Hw7JRA03Q5tmpjN7xVAuZ5Pc7fY9HUmc0jOuEF7/hUrL8kpZRyjMMVWfBGxTZesM3+EYXL51czpfA==');
define('AUTH_SALT',        '2lXTFMMr++VYvj/d/jA1sU0kLd9Pw6xBR3Nx+Ep3QrkKsUMHDI5/jd0cnyjcB75ieRTY7ZP1aE5Ml1d/+Qthlg==');
define('SECURE_AUTH_SALT', 'Z+UU6zYdH/3fMoCioLJUnhJt/B42+XnGnGmYgKbKe6b6nVRwvqhf+8b9gkLekU1XAWkF13oV/5/CHUye8LILJQ==');
define('LOGGED_IN_SALT',   '1KTK8Sy8bwwRzdnfFJvxJB9rnuCjg2BjysD/NDMTqeybUlulyVrdAoQiN/OsPfOZWd26q78DnKhAsKLxqbSUJQ==');
define('NONCE_SALT',       'UmAG3ceZQyy1PsVPXMt6xXNFY0DsKCmUQDlYFHDMR/ApYXCzBb75p7dYmf6XXsygtDivS1eU9xomHyxbBN7oPw==');

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
