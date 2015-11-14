<?php

session_start();
$data = json_decode(file_get_contents('php://input'), true);
$_SESSION['items'][] = $data;
$arrayProductsPrices =[];
$products = $_SESSION['items'];

foreach ($products as $key => $val) {
    foreach ($val as $arraykey => $value) {
        if(is_array($value)){
            foreach ($value as $key => $value) {

                in_array($value["supermarket"], $arrayProductsPrices) ?: $arrayProductsPrices[$value["supermarket"]] = 0;
                $arrayProductsPrices[$value["supermarket"]] += $value["value"];
            }
        }
    }
}

asort($arrayProductsPrices);

echo json_encode($arrayProductsPrices);
