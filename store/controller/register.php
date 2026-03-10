<?php
$message = '';
if(isset($_POST["submit"])) {
    $user = new User($_POST["name"],$_POST["email"], $_POST["password"]);
    $result = $user->register();
    if($result['status'] === true) {
        header("Location: dashboard");
    } else {
        $message = '<div class="faild">'.$result['message'].'</div>';
    }
}

require_once "view/register.view.php";