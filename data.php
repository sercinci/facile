<?php

	class Prices {
		public $supermarket;
		public $price;
	}

	class Products {
		public $title;
		public $image;
		public $description;
		public $category;
		public $prices;
	}
/*
	$arrayProducts = array();

	$product1 = new Products;
	$product1->title = "Cereali";
	$image->image = "http://";
	$description->description = "Kellogs";
	$category->category = "colazione";
*/

	$json = file_get_contents("data.json");
	$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($json, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);

	$arrayProducts;
	foreach ($jsonIterator as $key => $val) {
		$product = new Products;
		if(!is_array($val)){
			switch($key){
				case "title":
					$product->title = $val;
					break;
				case "image":
					break;
			} 
			echo "<h1>".$title."</h1>";
		    
		}
	}

	//echo json_encode($jsonIterator);
	

?>