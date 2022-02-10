
<html>
    <style>


body {
  background-image: url('logo.jpg');
  background-repeat: no-repeat;
  
  background-size: 100% 30%;

}
.button1{background-color :rgb(38, 90, 8) ; width: 80; height: 50; border: hsl(hue, saturation, lightness);}
.button2{background-color:rgb(207, 204, 204) ; width: 80; height: 50; border: hsl(hue, saturation, lightness);}
.a1{background-color:rgb(231, 235, 235);border: hsl(hue, saturation, lightness);}

.a2{background-color:rgb(231, 235, 235);border: hsl(hue, saturation, lightness);}

.a5{background-color:rgb(231, 235, 235);border: hsl(hue, saturation, lightness );}

</style>
<head>
  
    <title>page d'aajout_camion</title>
</head>
   
    <body>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <strong>Menu:</strong><br>
    <a href="admin.php" class="a1">Admin</a><br>
    <a href="supprimer.php" class="a5">Supprimer</a><br>
    <a href="ajoutChauffeur.php" class="a2">Ajouter un chauffeur</a><br>
 
    
   
        <center>
            <form method="POST" action="">
            <center>  <h1 style="color: thistle;"> Page d'ajout Camion</h1></center>
                <center>
                    <table>
                    <tr>
                        <td> <strong> matricule</strong> </td> 
                        <td> <input style="height: 50px; background-color: rgb(226, 229, 229);border:transparent" type="text"  name="matricule" > </td><br>
</tr>
    <tr>
        <td><strong> Kilométrage<strong></td>
        <td><input style="height: 50px; background-color: rgb(226, 229, 229);border:transparent" type="number" name="kilometrage"><br>
</td>
</tr>

 
<tr>
    <td><strong> type</strong></td>
    <td><input style="height: 50px; background-color: rgb(226, 229, 229);border:transparent" type="text" name="typee"><br>
</td>
<tr>
    <td><strong> Objectif</strong></td>
    <td><input style="height: 50px; background-color: rgb(226, 229, 229);border:transparent" type="text" name="objectif"><br>
</td>
</tr>
<tr>
    <td> </td>
    <td colspan="2"> </td>
    <td><td><input type="reset"  class="button button2" value ="Annuler" name ="Annuler" ></td></td>
    
    <td><input type="submit"  class="button button1" value ="Ajouter" name ="ajouter" ></td>
</tr>

</table>

</center>

</html>


<?php
 $conn = new PDO("mysql:host=localhost;dbname=carburantt",'root', '');

 if(isset($_POST['ajouter'])){  
    $matricule=$_POST['matricule'];
   $kilometrage=$_POST['kilometrage'];
   
   $typee=$_POST['typee'];
   $objectif=$_POST['objectif'];

   


  
$req="INSERT INTO camion (matricule,kilometrage,typee,objectif ) VALUES('$matricule',$kilometrage,'$typee','$objectif')";
    $conn->exec($req);
 

 echo "le camion est ajouter  avec succés ";
 }
 

 

?>