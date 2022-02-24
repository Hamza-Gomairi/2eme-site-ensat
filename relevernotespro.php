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
$nom= $_SESSION["Nom"];
$cap= $_SESSION["cap"];
?>
<h1 style="font-family:courier; text-align:center; color:white;">Relever de Notes</h1><br><br><br>
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
          echo"<tr>";
          echo "<th>NOM</th>";
          echo "<th>CAP</th>";
          echo "<th>TAS</th>";
          echo "<th>BAS</th>";
          echo "<th>ELN</th>";
          echo "<th>PW</th>";
          echo "<th>OP</th>";
          echo "<th>C</th>";
          echo "<th>moyenne</th>";
          echo"</tr>";
        while($row = mysqli_fetch_array($result)){
         echo"</tr>";
         $s=0;
          for($i=1 ; $i<=8 ; $i++){
            echo "<th>".$row["$i"]."</th>";
            if($i>=3){
            $s=$s+$row["$i"];
          }
          }
          $m=$s/6;
          echo "<th>".$m."</th>";
          echo"</tr>";
        }
      }
    }
                   ?>


</table><br><br><br><br><br><br>
<button type="submit" > <a href="homepr.php" style="color:black;">HOME</a></button>
</body>
</html>
