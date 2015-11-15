<?php 
	session_start();

	//var_dump($marketPrices);
	//foreach ($prices as $key => $value) {
	//	echo $key.": ".$value."€"; 
	//}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Facile.it</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="favicon.gif" type="image/png" />
	<link href="css/style.css" rel="stylesheet">
	<link href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css" rel="stylesheet">
	
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
			<div class="col-md-12 subheader">
				Lista della spesa: confronta la spesa
			</div>
		</div>
    </div>
    
    <div class="container">
		<div class="row">
			<div class="col-md-12 lined_subheader">

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
				<li class="li_header">Riepilogo</li>
				<li>
				<p class="riepilogo_product">Cereali</p>
				<p class="riepilogo_price">3,10€</p>
				</li>
				<li>
				<p class="riepilogo_product">Arachidi</p>
				<p class="riepilogo_price">1,00€</p>
				</li>
				<li>
				<p class="riepilogo_product">Mikado</p>
				<p class="riepilogo_price">1,79€</p>
				</li>
			</ul>
		</div>
    
    <!--     ************************ Contenitore Label ************************ -->
    
		<div class="col-md-9 spacing cf">
			<div class="row cf">
				<div class="product cf">
					<img src="http://vivibene.org/wp-content/uploads/2015/04/20120217120214-2012-67888-NDP.jpg">
					<h2>Esselunga</h2>
					<h3 class="checkout_price">5,89€</h3>
					
					<a class="btn btn-default" href="#" role="button">Acquista</a>
				</div>
				
				<div class="product cf">
					<img src="http://www.akcniletakpenny.cz/images/logo-penny.png">
					<h2>Penny Market</h2>
					<h3 class="checkout_price negative_price">5,97€</h3>
					
					<a class="btn btn-default" href="#" role="button">Acquista</a>
				</div>
				
				<div class="product cf">
					<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRA5SemYG6u4mTDdQMGMNODwO0HdI-CJ0myKzfrULNGl3ASk7EI">
					<h2>Carrefour</h2>
					<h3 class="checkout_price negative_price">6,23€</h3>
					
					<a class="btn btn-default" href="#" role="button">Acquista</a>
				</div>
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
				   		<label>Nome</label>
				   		<input type="text"></br>
				   		<label>Cognome</label>
				   		<input type="text"></br>
				   		<label>email</label>
				   		<input type="email"></br>
				   		<label>CAP</label>
				   		<input type="text">
			   		</form>
		   		</div>
		   		<div class="col-md-6" style="padding: 15px; background: #f2f2f2;"><h3>Facile.it è gratis</h3>

Confrontiamo i prezzi di oltre <b>dieci catene di supermercati</b>: scegli la spesa più conveniente per te senza alcun costo aggiuntivo.</br></br>

Puoi <b>risparmiare fino al 30% sulla spesa.</b></div>
        	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Prosegui</button>
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
    <script type="text/javascript" src="js/retina.js"></script>
  </body>
</html>