<?php
require_once "controller/classes/getenv.class.php";
Getenv::getenv();
require_once "view/classes/view.class.php";
require_once "routers.php";
require "controller/classes/user.class.php";
require "controller/classes/store.class.php";
require "controller/classes/products.class.php";
require "controller/classes/order.class.php";
//require "controller/classes/db.class.php";

$session = new SessionSettings();
$user = new User();
$product = new Product();
$store = new Store();
//$database = new Db();

require_once "view/includes/header.php";

$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

if(preg_match("#^/store/([^/]+)#", $uri, $matches)) {
    $_GET['store'] = $matches[1];
    $store_data = $store->getUserStoresInfo("store_name", $_GET["store"]);
    if(!empty($store_data)) {
        require "controller/store.php";
    } else {
        header("Location: /login");
    }
}elseif (array_key_exists($uri, $routes)) {
    require "controller/" . $routes[$uri];
} else {
    require "controller/" . $routes["/"];
}
require_once "view/includes/footer.php";