<?php
require_once('db.php');

//SERVER CONFIGURATION

// DEFINE YOU SERVER NAME
define('SERVER_NAME', 'CommonTicket');

// DEFINE YOU SERVER IP
define('SERVER_IP', 'hypixel.net');

// DEFINE YOU KEY SERVER
define('KEY_PLUGIN', '9Ngw9e8rTD9GSns08DGNdxfgbN9fh9');

// CONFIGURE YOU MYSQL DIRECTION
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'YOUR-PASSWORD');
define('DB_DATA', 'CommonTicket');

// SITE CONFIGURATION

// !IMPORTANT, Example: unixsystem.com.ar/CommonTicket/Ticket
define("HTTPS", 'https://'); // !IMPORTANT
define("SITE_LINK", 'unixsystem.com.ar/CommonTicket'); // !IMPORTANT
define("SITE_NAME", 'CommonTicket');

// REQUIRED YES NOT HAVE `.htaccess` CONFIGURED.
define("SITE_EXTENSION_PHP", true); 

// ICON OF THE SITE
define("SITE_LOGO", 'mylogo.png'); 

?>