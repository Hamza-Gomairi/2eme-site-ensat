<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    button {
                background-color: #afaead;
                padding: 10px 32px;
                border-radius: 60px;
                font-size: 16px;
                }
        table {text-align: center;
                font-family: arial, sans-serif;
                width: 60%;}

        td, th {  text-align: center;   height: 50px;    font-size: 20px;  color: white;   }

  </style>
  <link rel="stylesheet" href="css1/style.css" >
  </head>
  <body class="img js-fullheight" style="background-image: url(images/bg.jpg);" >
    <?php session_start();
    $nom=$_SESSION["Nom"];
    $cap=$_SESSION["cap"] ;
    if (!$nom) {
      header('location:login.php');
    } ?>

<form  action="add.php" method="post" >

<input type="text" class="form-control" placeholder="code apogée" name="CAP" style="text-align: center" required><br>
<input type="text" class="form-control" placeholder="Nom"  name="NOM" style="text-align: center" required><br>
<input type="text" class="form-control" placeholder="PRENOM"  name="Prenom" style="text-align: center" required><br>
<input type="text" class="form-control" placeholder="Adresse"  name="Adresse" style="text-align: center" required><br>
<input type="text" class="form-control" placeholder="Ville"  name="Ville" style="text-align: center" required><br>
<input type="text" class="form-control" placeholder="Email"  name="Email" style="text-align: center" required><br>
<input type="file" class="form-control" placeholder="Photo"  name="Photo" style="text-align: center" required><br>
<input type="text" class="form-control" placeholder="Note de traitement du signal"  name="TAS" style="text-align: center" required><br>
<input type="text" class="form-control" placeholder="Note de base de donne"  name="BAS" style="text-align: center" required><br>
<input type="text" class="form-control" placeholder="Note de l'electronique numerique"  name="ELN" style="text-align: center" required><br>
<input type="text" class="form-control" placeholder="Note de programation web"  name="PW" style="text-align: center" required><br>
<input type="text" class="form-control" placeholder="Note de l'optimisation"  name="OP" style="text-align: center" required><br>
<input type="text" class="form-control" placeholder="Note du Language C"  name="C" style="text-align: center" required><br>
<input type="submit"  class="form-control"  name="submit" style="text-align: center" value="enregistrer"/>


</form>
  </body>
</html>
