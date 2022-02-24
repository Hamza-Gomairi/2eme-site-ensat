<!DOCTYPE html>
<html>
    <head>
        <style>
        button {
                    background-color: #afaead;


                    padding: 10px 32px;
                    border-radius: 10px;
                    font-size: 16px;
                    }
            table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 80%;
                    background-color: #a6a6a5;

                    }

            td, th {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                    }

            tr:nth-child(even) {
                    background-color: #dddddd;

                    }
</style>

</head>
<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
<?php session_start();
$nom=$_SESSION["Nom"];
$cap=$_SESSION["cap"] ;
if (!$nom) {
  header('location:login.php');
}
?>
<h1 style="font-family:courier; text-align:center; color:white;">Relever de Notes</h1><br><br><br>
<div>
    <h2 style="font-family:courier;  color:white;">Nom : <?=$_SESSION["Nom"]?></h2>
    <h2 style="font-family:courier;  color:white;">CNE : <?=$_SESSION["cap"]?></h2>

</div>
<br><br>
<table class="center">
<?php
$host="localhost";
$user="root";
$password="";
$db="personne";

$con=mysqli_connect($host,$user,$password,$db);


if($con){
        $sql = "SELECT * FROM notes";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
                  if ($row["NOM"] == $nom and $row["CAP"] == $cap){

                    echo"<tr>";
                    echo "<th>Module</th>";
                    echo "<th>Matière</th>";
                    echo "<th>Note</th>";
                    echo"</tr>";

                      echo"<tr>";
                      echo "<th>GINF12</th>";
                      echo "<th>Traitement de signal</th>";
                      echo "<th>".$row["TAS"]."</th>";
                      echo"</tr>";
                      echo"<tr>";
                      echo "<th>GINF13</th>";
                      echo "<th>Base de donne</th>";
                      echo "<th>".$row["BAS"]."</th>";
                      echo"</tr>";
                      echo"<tr>";
                      echo "<th>GINF14</th>";
                      echo "<th>Electronique numerique</th>";
                      echo "<th>".$row["ELN"]."</th>";
                      echo"</tr>";
                      echo"<tr>";
                      echo "<th>GINF15</th>";
                      echo "<th>Programation Web</th>";
                      echo "<th>".$row["PW"]."</th>";
                      echo"</tr>";
                      echo"<tr>";
                      echo "<th>GINF16</th>";
                      echo "<th>Optimisation</th>";
                      echo "<th>".$row["OP"]."</th>";
                      echo"</tr>";
                      echo"<tr>";
                      echo "<th>GINF17</th>";
                      echo "<th>Language c</th>";
                      echo "<th>".$row["C"]."</th>";
                      echo"</tr>";
                  }
                  else {
                    echo"<tr>";
                    echo "<th>Module</th>";
                    echo "<th>Matière</th>";
                    echo "<th>Note</th>";
                    echo"</tr>";

                      echo"<tr>";
                      echo "<th>GINF12</th>";
                      echo "<th>Traitement de signal</th>";
                      echo "<th>0</th>";
                      echo"</tr>";
                      echo"<tr>";
                      echo "<th>GINF13</th>";
                      echo "<th>Base de donne</th>";
                      echo "<th>0</th>";
                      echo"</tr>";
                      echo"<tr>";
                      echo "<th>GINF14</th>";
                      echo "<th>Electronique numerique</th>";
                      echo "<th>0</th>";
                      echo"</tr>";
                      echo"<tr>";
                      echo "<th>GINF15</th>";
                      echo "<th>Programation Web</th>";
                      echo "<th>0</th>";
                      echo"</tr>";
                      echo"<tr>";
                      echo "<th>GINF16</th>";
                      echo "<th>Optimisation</th>";
                      echo "<th>0</th>";
                      echo"</tr>";
                      echo"<tr>";
                      echo "<th>GINF17</th>";
                      echo "<th>Language c</th>";
                      echo "<th>0</th>";
                      echo"</tr>";

                  }
                }
              }

            }
                   ?>


</table><br><br><br><br><br><br>
<button type="submit" > <a href="deconnexion.php" style="color:black;">Deconnexion</a></button>
</body>
</html>
