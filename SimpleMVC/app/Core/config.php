<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('DBNAME','');
    define('DBHOST','');
    define('DBUSER','');
    define('DBPASS','');
    define('ROOT', 'http://localhost/simpleMVC/public/');
} else {
    define('DBNAME','');
    define('DBHOST','');
    define('DBUSER','');
    define('DBPASS','');
    define('ROOT', 'https://www.websitename.com');
}

define('APP_NAME', "Simple MVC");
define('APP_DESC', "");

// Debug mode (true/false)
define('DEBUG', true);

// Bootstrap files (true/false)
define('BOOTSTRAP', true);
define('BOOTSTRAPJS', true);

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('ASSETS', 'http://localhost/simpleMVC/public/assets');
} else {
    define('ASSETS', 'https://www.websitename.com');
}

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('IMG', 'http://localhost/simpleMVC/public/assets/images/');
} else {
    define('IMG', 'https://www.websitename.com');
}

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('CSS', 'http://localhost/simpleMVC/public/assets/css/');
} else {
    define('CSS', 'https://www.websitename.com');
}

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('JS', 'http://localhost/simpleMVC/public/assets/js/');
} else {
    define('JS', 'https://www.websitename.com');
}
