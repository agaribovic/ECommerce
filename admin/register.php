<?php include "./templates/top.php"; ?>

<?php include "./templates/navbar.php"; ?>

<div class="container">
	<div class="row justify-content-center" style="margin:100px 0;">
		<div class="col-md-4">
			<h4>Registracija Admina</h4>
			<p class="message"></p>
			<form id="admin-register-form">
			  <div class="form-group">
			    <label for="name">Ime</label>
			    <input type="text" class="form-control" name="name" id="name" placeholder="Ukucaj Ime">
			  </div>
			  <div class="form-group">
			    <label for="email">Email adresa</label>
			    <input type="email" class="form-control" name="email" id="email" placeholder="Ukucaj Email">
			    <small id="emailHelp" class="form-text text-muted">Niko ne vidi email adresu osim vas u ovom trenutku.</small>
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
			  </div>
			  <div class="form-group">
			    <label for="cpassword">Confirm Password</label>
			    <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Password">
			  </div>
			  <input type="hidden" name="admin_register" value="1">
			  <button type="button" class="btn btn-primary register-btn">Izvrši registraciju</button>
			</form>
		</div>
	</div>
</div>





<?php include "./templates/footer.php"; ?>

<script type="text/javascript" src="./js/main.js"></script>
