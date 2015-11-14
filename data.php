<?php
/*
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

	foreach ($jsonIterator as $key => $val) {
		if(!is_array($val)){
			if($key == "title"){
				$title = $val;
			} 
			echo "<h1>".$title."</h1>";
		    if(is_array($val)) {
		        echo "<br/>";
		    } else {
		        echo "<li>".$key." => ".$val."</li>";
		    }
		}
	}

	echo json_encode($jsonIterator);
	

?>