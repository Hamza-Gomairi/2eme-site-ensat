<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" href="css1/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);" >
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3><br><br><br><br><br>
		      	<form action="conexion.php" method="post" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Nom" name="Nom" required><br><br>
		      		</div>
	            <div class="form-group">
	              <input  type="text" class="form-control" placeholder="code apogée" name="CAP" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span><br><br><br><br><br><br>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>
