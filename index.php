<!DOCTYPE html>
<html>
<head>
	<title>Facile</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script type="text/javascript" src="comparator.js"></script>

</head>
<body>

<?php

	$db = file_get_contents(__DIR__ . "/data.json");

	$items = json_decode($db);

	var_dump($items);

?>

<form id="item">
	<input type="text" name="s" placeholder="Search...">
	<input type="submit" value="Add Product Item">
</form>
<!-- the result of the search will be rendered inside this div -->
<div id="result">RISULTATO</div>

<script>
	// Attach a submit handler to the form
	$( "#item" ).submit(function( event ) {

		var itemContent = JSON.stringify(
				{
					"title": "Kellogs Coco Pops",
					"image": "http://img.tesco.com/Groceries/pi/283/5050083545283/IDShot_540x540.jpg",
					"description": "Kelloggs Coco Pops Cereal 800g",
					"category": "colazione",
					"prices": [
						{
							"supermarket": "Esselunga",
							"value": 3.10
						},
						{
							"supermarket": "AuchanSMA",
							"value": 2.99
						},
						{
							"supermarket": "Ipercoop",
							"value": 3.14
						},
						{
							"supermarket": "Despar",
							"value": 3.0
						},
						{
							"supermarket": "Unes",
							"value": 3.0
						},
						{
							"supermarket": "Conad",
							"value": 2.50
						},
						{
							"supermarket": "Carrefour",
							"value": 2.80
						},
						{
							"supermarket": "Pennymarket",
							"value": 2.90
						},
						{
							"supermarket": "Gigante",
							"value": 3.20
						},
						{
							"supermarket": "SuperElite",
							"value": 3.15
						}
					]
				}
		);

		event.preventDefault();

		var posting = $.ajax({
			type: "POST",
			contentType: "application/json",
			url: '/cart.php',
			data: itemContent,
			dataType: "json"
		});

		// Put the results in a div
		posting.done(function( data ) {

			var content = $( JSON.parse(data) );
			$( "#result" ).empty().append( content );

//			var content = $( data ).find( "#content" );
//			$( "#result" ).empty().append( content );
		});
	});
</script>

</body>
</html>
