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



<form action="/cart.php" id="item">
	<input type="text" name="s" placeholder="Search...">
	<input type="submit" value="Add Product Item">
</form>
<!-- the result of the search will be rendered inside this div -->
<div id="result"></div>

<script>
	// Attach a submit handler to the form
	$( "#item" ).submit(function( event ) {

		// Stop form from submitting normally
		event.preventDefault();

		// Get some values from elements on the page:
		var $form = $( this ),
			term = $form.find( "input[name='s']" ).val(),
			url = $form.attr( "action" );

		// Send the data using post
		var posting = $.post( url, { s: term } );

		// Put the results in a div
		posting.done(function( data ) {
			var content = $( data ).find( "#content" );
			$( "#result" ).empty().append( content );
		});
	});
</script>

</body>
</html>
