<?php

	$arrayProductsPrices;
	foreach ($products as $key => $val) {
		foreach ($val as $arraykey => $value) {
			if(is_array($value)){
				foreach ($value as $key => $value) {
					$arrayProductsPrices[$value["supermarket"]] += $value["value"];
				}
			}
		}
	}

	print_r($arrayProductsPrices);
	asort($arrayProductsPrices);
	echo "<br/>";
	print_r($arrayProductsPrices);

	//echo json_encode($jsonIterator);
	

?>