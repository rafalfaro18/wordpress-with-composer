Instructions:

- Install XAMPP 7.1.10 and create wpjs folder in XAMPP htdocs folder

- Clone this repo in wpjs folder, if it creates a folder move everything up one directory

- On the terminal cd into project root directory and run:
```bash
composer install
```
- - On the terminal cd into project root directory and run:
```bash
npm install
```
- Move wp/wp-content folder one directory up

- Move wp/wp-config-sample.php file one directory up. Rename it to wp-config.php

- Edit wp-config.php with the correct DB values and after:
```php
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://localhost/wpjs/wp-content' );
```
add the following:
```php
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
```
Copy wp/index.php file to one directory up.

- Edit index.php at:
```php
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
```
add /wp/:
```php
require( dirname( __FILE__ ) . '/wp/wp-blog-header.php' );
```
- Go to [http://localhost/wpjs](http://localhost/wpjs) and install WordPress

- Edit wp_options table change option_value of option named "home" to: [http://localhost/wpjs](http://localhost/wpjs)
