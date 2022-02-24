<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
	<link rel="stylesheet" href="css1/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);" >
    <?php session_start();
    $nom=$_SESSION["Nom"];
    $cap=$_SESSION["cap"] ;
    if (!$nom) {
      header('location:login.php');
    } ?>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 style="font-size:60px; text-align: center;" >welcome</h3><br><br><br><br><br><br>

		      		<div class="form-group">
                <button type="submit" class="form-control btn btn-primary submit px-3"><a href="relevernotespro.php" style="color:black;">  relevé de notes </a></button><br><br>
		      		</div>
	            <div class="form-group">
                <button type="submit" class="form-control btn btn-primary submit px-3"><a href="classet.php" style="color:black;">votre classe</a></button><br><br>
	            </div>
              <div class="form-group">
                <button type="submit" class="form-control btn btn-primary submit px-3"><a href="ajoutteset.php" style="color:black;"> ajouter un étudiant </a></button><br><br>
		      		</div>
              <div class="form-group">
                <button type="submit" class="form-control btn btn-primary submit px-3"><a href="deconnexion.php" style="color:black;"> Deconnexion </a></button>
		      		</div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	</body>
</html>
