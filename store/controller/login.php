<?php
$message = "";

if(isset($_POST["login"])) {
    $user_data = $user->login($_POST["email"], $_POST["password"]);
if(!empty($user_data)) {
    $session->set("user_access_token", $user_data[0]["access_token"]);
    $session->set("user_id", $user_data[0]["id"]);
    header("Location: dashboard");
} else {
   $message = '<div class="faild">
            login faild!
        </div>';
}
}
require_once "view/login.view.php";