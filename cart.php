<?php

session_start();
//$postdata =
//var_dump(file_get_contents("php://input"));
//$data = json_decode(file_get_contents('php://input'), true);
//$data =

$data = json_decode(file_get_contents('php://input'), true);
//var_dump($data);

$_SESSION['items'][] = $data;


//var_dump($HTTP_RAW_POST_DATA);
//$data = json_decode($_POST);
//var_dump($data);
//
//if (in_array('item', $data)) {
//
//    $_SESSION['items'][] = $data['item'];
//}
//
echo "Cart:";
var_dump($_SESSION);
