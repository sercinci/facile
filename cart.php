<?php

session_start();
var_dump($_POST);
$data = json_decode($_POST);
var_dump($data);

if (in_array('item', $data)) {

    $_SESSION['items'][] = $data['item'];
}

echo "Cart:";
var_dump($_SESSION);
