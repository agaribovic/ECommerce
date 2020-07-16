<?php
#this is Login form page , if user is already logged in then we will not allow user to access this page by executing isset($_SESSION["uid"])
#if below statment return true then we will send user to their profile.php page
if (isset($_SESSION["uid"])) {
	header("location:profile.php");
}
//in action.php page if user click on "ready to checkout" button that time we will pass data in a form from action.php page
if (isset($_POST["login_user_with_product"])) {
	//this is product list array
	$product_list = $_POST["product_id"];
	//here we are converting array into json format because array cannot be store in cookie
	$json_e = json_encode($product_list);
	//here we are creating cookie and name of cookie is product_list
	setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);

}
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
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body style="background-image: url('pozadina.jpg')";>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top" style="background-color: black">
		<div class="container-fluid">	
			<ul class="nav navbar-nav">
				<li><a href="naslovna.php"><span class="glyphicon glyphicon-home"></span>Početna</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-primary" style="border: 1px solid black">
					<div class="panel-heading" style="background-color:pink; color:white">Login za kupca</div>
					<div class="panel-body" style="background-image: url('wall1.jpg')">
						<!--User Login Form-->
						<form onsubmit="return false" id="login">
							<label for="email" style="color:white">Email</label>
							<input type="email" class="form-control" name="email" id="email" required/>
							<label for="email" style="color:white">Password</label>
							<input type="password" class="form-control" name="password" id="password" required/>
							<p><br/></p>
							<input type="submit" class="btn btn-success" style="float:right; background-color:pink; border:1px solid black" Value="Prijavite se">
							<!--If user dont have an account then he/she will click on create account button-->
							<div><a href="customer_registration.php?register=1" style="color:pink">Kreirajte novi račun?</a></div>						
						</form>
				</div>

			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>






















