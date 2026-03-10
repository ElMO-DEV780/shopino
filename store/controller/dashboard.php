<?php
// error messages 
$change_email_message = "";
$change_password_message = "";
$add_store_message = "";

if(!$user->isLogedIn()) {
    header("Location: login");
}

$user_id = $session->get("user_id");
$store_id = $session->get("store_id");
$access_token = $session->get("user_access_token");

$userInfo = $user->getUserInfo("id" , $user_id);

$stores_count = $store->getUserStoresCount($access_token);


if(isset($_POST["change_password"])) {
    $changed = $user->changePassword($user_id, $_POST["old_pass"] , $_POST["confirmed_pass"]  ,$_POST["new_pass"]);

    if($changed) {
        $change_password_message = "password changed successfully";
    } else {
        $change_password_message = 'password not correct or not matched';
    }
}

if(isset($_POST["change_email"])) {
    $changed = $user->changeEmail($user_id , $_POST["email"]);

    if($changed) {
        $change_email_message = "email changed successfully";
    } else {
        $change_email_message = 'sorry! email not changed';
    }
}

if(isset($_POST["logout"])) {
    $user->logout();
}

if(isset($_POST["add_store"])) {
    if(!$store->createStore($_POST["store_name"], $_POST["store_description"], $_POST["store_theme"], $_POST["country"], $_POST["address"], $access_token)) {
        $add_store_message = "this store is already exists";
    } else {
        $add_store_message = "store added successfully";
    }
}

if(isset($_POST["delete_store"])) {
    $store->deleteStore($_POST["store_id"]);
    $product->deleteSpecificProducts($_POST["store_id"]);
    $session->remove("store_id");
}

if(isset($_POST["manage_store"])) {
    $session->set("store_id", $_POST["store_id"]);
    $_GET["src"] = "store_manager";
}

$storeInfo = $store->getUserStoresInfo("owner_token" ,$access_token);

if(isset($_POST["add_product"])) {
    $product->addProduct($_POST["product_name"], $_POST["product_description"], $_POST["original_price"], $_POST["sale_price"], $_POST["available_quantity"], $_POST["product_category"], $access_token , $store_id);
}

if(isset($_POST["delete_product"])) {
    $product->deleteProduct($_POST["delete_product_id"]);
}

// get opened store products
$products = $product->getStoreProducts("store_id", $store_id);

$all_products = $product->getAllProducts("access_token", $access_token);

$user_products_count = $product->getUserProductsCount($access_token);

$categories = $product->getAllCategories();

$opened_store = $store->getOpenedStore("id", $store_id);

if(isset($_POST["add_category"])) {
    $product->addCategory($_POST["category_name"]);
}

//delete all products 
if(isset($_POST["delete_all_products"])) {
    $product->deleteAllProducts();
}


require_once "view/layouts/sidebar.view.php";
if(isset($_GET["src"])) {
    $src = $_GET["src"];
    if(file_exists("view/$src.view.php")) {
        require_once "view/$src.view.php";
    } else {
        echo 'stop no file';
    }
} else {
    require_once "view/greet.view.php";
}

//require_once "view/greet.view.php";
//require_once "view/account_settings.view.php";
//require_once "view/store_settings.view.php";
//require_once "view/store_manager.view.php";
//require_once "view/categories.view.php";

//require_once "view/test.view.php";
?>