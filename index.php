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
<div id="result">RISULTATO</div>

<?php

	$db = file_get_contents(__DIR__ . "/data.json");
	$items = json_decode($db, true);

	for ($i = 0; $i < count($items); $i++) {?>

		<form id="item<?=$i?>">
			<h5><?= $items[$i]['title']; ?></h5>
			<input type="submit" value="Add <?= $items[$i]['title']; ?> to cart">
		</form>
		<script>
			// Attach a submit handler to the form
			$( "#item<?=$i?>" ).submit(function( event ) {

				event.preventDefault();
				var itemContent = JSON.stringify(<?= json_encode($items[$i]); ?>);
				var posting = $.ajax({
					type: "POST",
					contentType: "application/json",
					url: '/cart.php',
					data: itemContent,
					dataType: "json"
				});

				posting.done(function( data ) {
					var content = $( JSON.parse(data) );
					$( "#result" ).empty().append( content );
				});
			});
		</script>

	<?php } ?>

</body>
</html>
