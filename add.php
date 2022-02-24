<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body class="img js-fullheight" style="background-image: url(photos/bg.jpg);">
    <?php
    session_start();
    $nom=$_SESSION["Nom"];
    $cap=$_SESSION["cap"] ;
    if (!$nom) {
      header('location:login.php');
    }
    if (isset($_POST['submit'])&&isset($_POST ['CAP'])&&isset($_POST ['NOM'])&&isset($_POST ['Prenom'])&&isset($_POST ['Adresse'])&&isset($_POST ['Ville'])&&isset($_POST ['Email'])&&isset($_POST ['Photo'])) {
      $nom = $_POST['NOM'];
      $cap = $_POST ['CAP'];
      $Prenom = $_POST ['Prenom'];
      $Adresse= $_POST ['Adresse'];
      $Ville= $_POST ['Ville'];
      $Email= $_POST ['Email'];
      $Photo= $_POST ['Photo'];
      $TAS= $_POST ['TAS'];
      $BAS= $_POST ['BAS'];
      $ELN= $_POST ['ELN'];
      $PW= $_POST ['PW'];
      $OP= $_POST ['OP'];
      $C= $_POST ['C'];


    $host="localhost";
    $user="root";
    $password="";
    $db="personne";


    $con=mysqli_connect($host,$user,$password,$db);

    if($con){

  $result = mysqli_query($con,"INSERT INTO user (NOM, CAP,etat) VALUES ('$nom', '$cap', 'etudiant')");
  $result = mysqli_query($con,"INSERT INTO class (CAP, Nom, Prenom, Adresse, Ville, Email, Photo, idd) VALUES ('$cap', '$nom', '$Prenom', '$Adresse', '$Ville', '$Email', '$Photo', '12')");
  $result = mysqli_query($con,"INSERT INTO notes (NOM, CAP,TAS,BAS,ELN,PW,OP,C) VALUES ('$nom', '$cap', $TAS,$BAS,$ELN,$PW,$OP,$C)");
    header('location:homepr.php');
    }

  }


    ?>

  </body>
</html>
