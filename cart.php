<?php

require "config/constants.php";

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Magičan ukus</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
<body style="background-image: url('pozadina.jpg');">
<div class="wait overlay">

</div>
	<div class="navbar navbar-inverse navbar-fixed-top" style="background-color:black !important">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
		
			</div>
		<div class="collapse navbar-collapse" id="collapse" style="background-color:black !important">
			<ul class="nav navbar-nav">

				<li><a href="radnja.php"><span class="glyphicon glyphicon-modal-window"></span>Proizvodi</a></li>
			</ul>
		</div>
	</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message--> 
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary" style="border: 1px solid black">
					<div class="panel-heading" style="background-color:pink">Korpa</div>
					<div class="panel-body" style = "background-image: url('wall1.jpg'); background-repeat: no-repeat; background-size: auto;">
						<div class="row" style="color:white">
							<div class="col-md-2 col-xs-2"><b>Briši / Ažuriraj</b></div>
							<div class="col-md-2 col-xs-2"><b>Slika proizvoda</b></div>
							<div class="col-md-2 col-xs-2"><b>Ime proizvoda</b></div>
							<div class="col-md-2 col-xs-2"><b>Količina</b></div>
							<div class="col-md-2 col-xs-2"><b>Cijena proizvoda</b></div>
							<div class="col-md-2 col-xs-2"><b>Cijena u <?php echo CURRENCY; ?></b></div>
						</div>
						<div id="cart_checkout" style="color:white"></div>
						<!--<div class="row">
							<div class="col-md-2">
								<div class="btn-group">
									<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
									<a href="" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
								</div>
							</div>
							<div class="col-md-2"><img src='product_images/imges.jpg'></div>
							<div class="col-md-2">Product Name</div>
							<div class="col-md-2"><input type='text' class='form-control' value='1' ></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
						</div> -->
						<!--<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<b>Total $500000</b>
							</div> -->
						</div> 
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
			
		</div>

<script>var CURRENCY = '<?php echo CURRENCY; ?>';</script>
</body>	
</html>
















		