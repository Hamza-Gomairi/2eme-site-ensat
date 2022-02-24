<!DOCTYPE html>
<html >
  <head>
    <title></title>
  </head>
  <body>
    <?php
session_start();
if (isset($_POST['Nom'])&&isset($_POST ['CAP'])){

  $nom = $_POST ['Nom'];
  $cap = $_POST ['CAP'];


  $host="localhost";
  $user="root";
  $password="";
  $db="personne";

  $con=mysqli_connect($host,$user,$password,$db);


  if($con){
          $sql = "SELECT * FROM user";
          $result = mysqli_query($con, $sql);

          if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)){
                    if ($row["NOM"] == $nom and $row["CAP"] == $cap  and $row["etat"] =='etudiant'){
                      $_SESSION["Nom"]=$nom;
                      $_SESSION["cap"]=$cap ;
                            header('location:homeetud.php');
                            break;
                    }

                    if ($row["NOM"] == $nom and $row["CAP"] == $cap  and $row["etat"] =='prof'){
                      $_SESSION["Nom"]=$nom;
                      $_SESSION["cap"]=$cap ;
                            header('location:homepr.php');
                            break;
                    }
                    header('location:login.php');
                    }
          }
          else
                  header('location:index.php');


          mysqli_close($con);

  }

  else
      echo "not connected";


}
else {
    header('location:index.php');

}
  ?>
  </body>
</html>
