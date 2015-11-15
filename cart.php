<?php

session_start();

$itemToAdd = json_decode(file_get_contents('php://input'));
$marketPrices = [];
if ($itemToAdd && count($itemToAdd) > 0) {
    foreach ($itemToAdd as $key => $item) {
        foreach ($itemToAdd->prices as $key => $price) {
            isset($marketPrices[$price->supermarket]) ?: $marketPrices[$price->supermarket] = 0;
            $marketPrices[$price->supermarket] += $price->value;
        }
    }

    asort($marketPrices);
    $_SESSION['items'][] = $itemToAdd;
}

echo json_encode($marketPrices);
