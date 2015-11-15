<?php
    $db = file_get_contents(__DIR__ . "/data.json");
	$items = json_decode($db, true);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="favicon.png" type="image/png" />
	<link href="css/style.css" rel="stylesheet">
	<link href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  </head>
  <body>
    <div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="assets/header.png">
			</div>
		</div>
    </div>
    
    <div class="container">
		<div class="row">
			<div class="col-md-12">
			</div>
		</div>
    </div>
    
    <div class="container">
		<div class="row">
			<div class="col-md-12">
			</div>
		</div>
    </div>
	
	<!--     ************************ Menu Laterale ************************ -->
    
    <div class="container">
		<div class="col-md-3 spacing">
			<ul class="categories_list">
				<li class="li_header">Categorie</li>
				<li><a href="#">Categoria Uno</a></li>
				<li><a href="#">Categoria Uno</a></li>
				<li><a href="#">Categoria Uno</a></li>
				<li><a href="#">Categoria Uno</a></li>
				<li><a href="#">Categoria Uno</a></li>
				<li><a href="#">Categoria Uno</a></li>
				<li><a href="#">Categoria Uno</a></li>
			</ul>
		</div>
    
    <!--     ************************ Contenitore Label ************************ -->
    	
		<div class="col-md-9 spacing">
			<div class="row">	
				<?php
				for ($i = 0; $i < count($items); $i++) {?>			
					<div class="product cf col-xs-4" id="item<?=$i?>">
						<img src="<?= $items[$i]['image'];?>">
						<h2><?= $items[$i]['title'];?></h2>
						<p><?= $items[$i]['description'];?></p>
						<h3>0.00€</h3>					
						<a class="btn btn-default" href="#" role="button">Aggiungi <?= $items[$i]['title']; ?>al carrello</a>
					</div>
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
				<?php if(($i+1)%3 == 0){?>
					</div><div class="row">
					<?php }
				} ?>
			</div>
		</div>
    </div>
    
    <div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="assets/footer.png">
			</div>
		</div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>