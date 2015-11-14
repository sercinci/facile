<?php

session_start();
var_dump($_POST);

if (in_array('item', $_POST)) {

    $_SESSION['items'] = $_POST['item'];
}

echo "Cart:";
var_dump($_SESSION);
