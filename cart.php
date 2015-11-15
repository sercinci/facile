<?php

session_start();

//$json = '{"title":"Cereali","image":"http:\/\/img.tesco.com\/Groceries\/pi\/283\/5050083545283\/IDShot_540x540.jpg","description":"Kelloggs CocoPops Cereal 800g","category":"cereali","prices":[{"supermarket":"Esselunga","value":3.1},{"supermarket":"AuchanSMA","value":2.99},{"supermarket":"Ipercoop","value":3.14},{"supermarket":"Despar","value":3},{"supermarket":"Unes","value":3},{"supermarket":"Conad","value":2.5},{"supermarket":"Carrefour","value":2.8},{"supermarket":"Penny market","value":2.9},{"supermarket":"Gigante","value":3.2},{"supermarket":"Super Elite","value":3.15}]}';
//var_dump(json_decode($json));
//
//$itemToAdd = file_get_contents('php://input');
//var_dump(json_decode($itemToAdd));
//
$itemToAdd2 = json_decode(file_get_contents('php://input'));


//die;
//var_dump(file_get_contents('php://input'));

$marketPrices = [];
if ($itemToAdd2 && count($itemToAdd2) > 0) {
    foreach ($itemToAdd2 as $key => $item) {
        foreach ($itemToAdd2->prices as $key => $price) {
//
            isset($arrayProductsPrices[$price->supermarket]) ?: $arrayProductsPrices[$price->supermarket] = 0;
            $marketPrices[$price->supermarket] += $price->value;
        }
    }

//    var_dump($itemToAdd2);

    asort($marketPrices);
    $_SESSION['items'][] = $itemToAdd2;
}

echo json_encode($marketPrices);
