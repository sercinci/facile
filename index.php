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

session_start();

var_dump($_POST);


if (in_array('item', $_POST)) {

	$_SESSION['items'] = $_POST['item'];
}

var_dump($_SESSION);

?>


<form action="index.php">
	<input type="text" id="title">
	<input type="text" id="value">
	<button type="submit"/>

	</form>
</form>
</body>
</html>
