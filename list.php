<?php
	session_start();
    $db = file_get_contents(__DIR__ . "/data.json");
	$items = json_decode($db, true);
	$categoryListCount = [];
	$num = NULL;
	for ($i = 0; $i < count($items); $i++){
		$num != NULL ?: $num = 0;
		$categoryListCount[$items[$i]['category']] = $num;
	}
	$categoryList = array_keys($categoryListCount);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Facile.it</title>
	<meta content="Facile.it confronta per te le migliori offerte di assicurazi…ti, ADSL e molto altro ancora. Da oggi risparmiare è facile!" name="description"></meta>
	<meta name="keywords" content="Facile, assicurazioni, mutui, prestiti, conti correnti, spesa">
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="favicon.gif" type="image/png" />
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
	<div class="container">
		<div class="row">
			<div class="col-md-12 subheader">
				Lista della spesa: confronta i prodotti
			</div>
		</div>
    </div>
    
    <div class="container">
		<div class="row">
			<div class="col-md-12 lined_subheader">
				
				<img src="assets/Carrello.png" style="float: left; margin-top: 7px;">
				
				<button type="button" class="btn btn-primary btn-lg checkout" data-toggle="modal" data-target="#myModal">
				CheckOut
				</button>
			</div>
		</div>
    </div>
	<!--     ************************ Menu Laterale ************************ -->
    
    <div class="container">
		<div class="col-md-3 spacing">
			<ul class="categories_list">
				<li class="li_header">Categorie</li>
				<?php
					for ($i=0; $i < count($categoryList); $i++) { ?>
						<a href="#"><li><?= $categoryList[$i]?></li></a>
				<?php } ?>
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
						<h3><?= number_format($items[$i]['prices'][0]['value'],$decimals=2);?>€</h3>					
						<button class="btn btn-default" type="button" id="btn<?=$i?>">Aggiungi al carrello</button>
					</div>
					<script>
						// Attach a submit handler to the form
						$( "#item<?=$i?>" ).click(function( event ) {

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
								console.log(content);
								$( "#result" ).empty().append( content );
							});
 
							$(this).find('#btn<?=$i?>').toggleClass('remove');
							$(this).find('#btn<?=$i?>').text() == "Rimuovi" ? $(this).find('#btn<?=$i?>').text("Aggiungi al carrello") : $(this).find('#btn<?=$i?>').text("Rimuovi");
						});
					</script>
				<?php if(($i+1)%3 == 0){?>
					</div><div class="row">
					<?php }
				} ?>
			</div>
		</div>
    </div>
    
    <!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title" id="myModalLabel">Inserisci i tuoi dati</h4>
	      </div>
	      <div class="modal-body">
	       <div class="row">
		   		<div class="col-md-6">
			   		<form>
				   		<label>Nome</label><br/>
				   		<input type="text"></br>
				   		<label>Cognome</label><br/>
				   		<input type="text"></br>
				   		<label>email</label><br/>
				   		<input type="email"></br>
				   		<label>CAP</label><br/>
				   		<input type="text">
			   		</form>
		   		</div>
		   		<div class="col-md-6" style="padding: 15px; background: #f2f2f2;"><h3>Facile.it è gratis</h3>

Confrontiamo i prezzi di oltre <b>dieci catene di supermercati</b>: scegli la spesa più conveniente per te senza alcun costo aggiuntivo.</br></br>

Puoi <b>risparmiare fino al 30% sulla spesa.</b></div>
        	</div>
	      </div>
	      <div class="modal-footer">
	        <a href="checkout.php" role="button" class="btn btn-default">Prosegui</a>
	      </div>
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