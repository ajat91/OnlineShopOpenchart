<?php
// HTTP
define('HTTP_SERVER', 'http://localhost/duar/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/duar/');

// DIR
define('DIR_APPLICATION', 'C:/xampp/htdocs/duar/catalog/');
define('DIR_SYSTEM', 'C:/xampp/htdocs/duar/system/');
define('DIR_IMAGE', 'C:/xampp/htdocs/duar/image/');
define('DIR_STORAGE', 'C:/xampp/htdocs/duar/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'db_duar');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');