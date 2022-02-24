<!DOCTYPE html>
<html>
<head>
  <title>class</title>
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
              align=center;
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
  <h1 style="font-family:courier; text-align:center; color:white;">Votre classe</h1><br><br><br>
  <div>
      <h2 style="font-family:courier;  color:white;">Nom : <?=$_SESSION["Nom"]?></h2>
      <h2 style="font-family:courier;  color:white;">CNE : <?=$_SESSION["cap"]?></h2>

  </div>
  <br><br>
  <?php
  $host="localhost";
  $user="root";
  $password="";
  $db="personne";

  $con=mysqli_connect($host,$user,$password,$db);

  if($con){
          $sql = "SELECT * FROM class";
          $result = mysqli_query($con, $sql);
          echo "<table align=center>";
          echo"<tr>";
          echo"<th>CAP</th>";
          echo"<th>Nom</th>";
          echo"<th>Prenom</th>";
          echo"<th>Adresse</th>";
          echo"<th>Ville</th>";
          echo"<th>Email</th>";
          echo"<th>Photo</th>";
          echo"</tr>";
          if (mysqli_num_rows($result) > 0) {

                 while($row = mysqli_fetch_array($result)) {
                   echo "<tr>";
                   for($i=1;$i<7;$i++){
                     echo "<td>";
                     echo "$row[$i]";
                     echo "</td>";
                   }
                   echo "<td>";
                   echo '<img src="images/'.$row[7].'"  width="200" height="200"/>';
                   echo "</td>";
                   echo "</tr>";
                }
  }
  echo "</table>";
  }
  ?>
  <br><br><br>
S
</body>
</html>
