<?php
define("IS_DEV", false);

if (IS_DEV) {
    define("BASEPATH", "http://localhost/project/perfection academy");
} else {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    define("BASEPATH", "http://localhost/project/perfection academy");
}

// Detect HTTP or HTTPS
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
$domain = BASEPATH . "/";
define("LINK", $domain);

// Define Directory Paths
define("ASSET", LINK . "assets/");
define("DIR", __DIR__ . "/");
define("CACHE", DIR . "cache");

// Get the requested URL (from .htaccess)
$requestUri = isset($_GET['url']) ? $_GET['url'] : 'index';
$zgeturl = explode('/', $requestUri);

$controllerFile = isset($zgeturl[0]) && $zgeturl[0] !== '' ? $zgeturl[0] : 'index';

// Load Main Controller
require_once DIR . 'controller/main.php';

// Database Connection (Modify if needed)
// define("HOST_NAME", "localhost");
// define("USER_NAME", "your_username");
// define("PASS_NAME", "your_password");
// define("DB_NAME", "your_database");
// $edb = new mysqli(HOST_NAME, USER_NAME, PASS_NAME, DB_NAME);
// if ($edb->connect_error) die('Database connection failed');
$edb = null; // Comment this out if using a database

// Handle Controller Routing
try {
    $className = ucfirst($controllerFile);
    $requestFunction = "index";
    $requestedParams = array_slice($zgeturl, 1);

    if (!file_exists(DIR . 'controller/' . $controllerFile . '_controller.php')) {
        // If controller file doesn't exist, load default index controller
        require_once DIR . 'controller/index_controller.php';
        $controllerInstance = new Index($edb, $requestedParams);
        $controllerInstance->index();
    } else {
        // Load requested controller
        require_once DIR . 'controller/' . $controllerFile . '_controller.php';
        $controllerInstance = new $className($edb, $requestedParams);

        // Check if function exists
        if (isset($zgeturl[1]) && method_exists($controllerInstance, $zgeturl[1])) {
            $requestFunction = $zgeturl[1];
            $controllerInstance->setParam(array_slice($zgeturl, 2));
        }

        // Call the function
        $controllerInstance->$requestFunction();
    }
} catch (Error $ex) {
    require_once DIR . '404.php';
    echo "Error: " . $ex->getMessage();
}
?>
