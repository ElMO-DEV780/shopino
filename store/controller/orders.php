<?php
require_once "view/complete_order.view.php";
if (isset($_POST["get_order"])) {
    echo $_POST["product_id"];
}
