<?php
require "config/constants.php";
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Magican Ukus</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style></style>
	</head>


	<html>
<body background="pozadina.jpg">
</body>
</html>
<html>
    <head>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="izgled.css" />
        <link rel="stylesheet" href="mobile.css" />
        <script src="radnja.js" async></script>
    </head>
<head>
<style>

div.cities {
    background-color:transparent;
    color:white;
    margin:20px;
    padding:20px;
} 

div.torta {
    background-image: url("tortica.jpg");
	background-color:black;
    color:white;
    margin:20px;
    padding:20px;
} 
div.torta1 {
    background-image: url("wall1.jpg");
	background-color:black;
    color:white;
    margin:20px;
    padding:20px;
} 

.pagination {
    display: inline-block;
}

.pagination a{
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    border: 1px solid #ddd;
    color: black;
}

.pagination a.active{
    background-color: pink;
    border: 1px solid  white;
    color: white;
}

.pagination a:hover:not(.active){
    background-color: #ddd;
}

.pagination a:first-child{
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}

.pagination a:last-child{
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}

.nav-pills>li.active>a {
	background-color:pink;
	color: black;
}

.nav-pills>li.active>a:hover {
	background-color:pink;
	color:black;
}

.nav-pills>li>a {
	color:white;
}

.nav-pills>li>a:hover {
	background-color:white;
	color: black;
}

		
.panel-heading {
	background-color:pink !important;
	color:black !important;
}

</style>
</head>
<body>
<div class="cities">
<html>
<head>
<style>
ul#menu {
    padding: 0;
}

ul#menu li {
    display: inline;
}

ul#menu li a {
    background-color: black;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px 4px 0 0;
}

ul#menu li a:hover {
    background-color: red;
}


</style>
</head>
<body>


<ul id="menu">
  <li><a href="naslovna.php"><img src="logo.png"class="active" style="width:80px;height:80px;"></a></li>
  <li><a href="naslovna.php">Pocetna</a></li>
  <li><a href="radnja.php">Radnja</a></li>
  <li><a href="logo.php">Logo</a></li>
  <li><a href="onama.php">O nama</a></li>
</ul>

<div class="torta1" style="width: 1800px; position:relative; left: -20px; z-index:-9999">
        <p><!-- Container (Contact Section) -->
            <div class="w3-content w3-container w3-padding-64" id="contact">
              <h3 class="w3-center">Naša radnja</h3>
                </div>
              </div>
            </div><p>
        </div>

</body>
</html>
</div>







</body>
</html>

<!DOCTYPE html>
<html>
<head>
<style>
span.note {font-size:120%;color:red;}

</style>
</head>
<body>





       







</body>
</html>
<title>Magican ukus - Pocetna</title>





<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top" style="z-index:9999; position:absolute; top:0%; left:70%; background-color:black; width: 500px; ">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">

			</ul>
			
			<form class="navbar-form navbar-left" style="position:absolute; right: 45%;">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" id="search">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn" style="background-color:pink"><span class="glyphicon glyphicon-search"></span></button>
		     </form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Redni broj</div>
									<div class="col-md-3">Slika artikla</div>
									<div class="col-md-3">Ime proizvoda</div>
									<div class="col-md-3">Cijena u <?php echo CURRENCY; ?></div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>-->
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Uloguj se</a>
				<ul class="dropdown-menu" style="background-color:pink; border:none;">
						<div style="width:300px;">
							<div class="panel panel-primary" style="border:none">
								<div class="panel-heading" style="border:none;">Login</div>
								<div class="panel-heading" style="border:none">
									<form onsubmit="return false" id="login">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<a href="#" style="color:white; list-style:none;">.</a><input type="submit" value="Prijavi se" class="btn btn-success" style="float:right;">
									</form>
								</div>

							</div>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>	
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid" >
		<div class="row" style="margin-top:-110px;">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				<div id="get_category" style="background-color:black !important;">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
				<div id="get_brand" style="background-color:black !important";>
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
				
		
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading" style="background-color:pink; color:black !important">Products</div>
					<div class="panel-body" style="background-image: url('wall1.jpg')">
						<div id="get_product" >
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">$.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>
					
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>

	<div class="torta1">
        <p><!-- Container (Contact Section) -->
            <div class="w3-content w3-container w3-padding-64" id="contact">
              <h3 class="w3-center">Naša lokacija</h3>
              <p class="w3-center"><em>Ulica: Vukosave Božovića b14</em></p>
            
              <div class="w3-row w3-padding-32 w3-section">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2943.664555500334!2d19.293912615750468!3d42.45615283701989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134d9344b9060935%3A0xd9793ad4605d9ec6!2zVnVrb3NhdmEgQm_Fvm92acSHYSwgUG9kZ29yaWNhLCDQptGA0L3QsCDQk9C-0YDQsA!5e0!3m2!1ssr!2s!4v1593617735884!5m2!1ssr!2s" width="430" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                
                <div class="w3-col m8 w3-panel">
                  <div class="w3-large w3-margin-bottom">
                    <p class="w3-center"><em></em></p>
                    <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Podgorica, CG<br>
                    <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Telefon: 555 333<br>
                    <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: mail@mail.com<br>
                  </div>
                  <p>Torte za svečane prilike moraju se zakazati preko telefona!!! </p>
                 
                </div>
              </div>
            </div><p>
        </div>

	<center><div class="pagination">
            <a href="#">&laquo; </a>
            <a href="#" class="active"> 1 </a>
            <a href="#"> 2 </a>
            <a href="#"> &raquo; </a>
          
          </div></center>

	<div class="torta1">
<p><center>&copy; 2020 Magičan Ukus</center><p>
</div>

</body>
</html>
















































