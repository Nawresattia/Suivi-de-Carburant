
<html>

<head>
    <title>supp</title>
</head>
<style>

body {
  background-image: url('logo.jpg');
  background-repeat: no-repeat;
  
  background-size: 100% 30%;
 
}
.button2{background-color:rgb(218, 104, 51);border: hsl(hue, saturation, lightness);}
 .button11{background-color:rgb(218, 104, 51);border: hsl(hue, saturation, lightness);}
 .button5{background-color:rgb(218, 104, 51);border: hsl(hue, saturation, lightness);}

.a1{background-color:rgb(231, 235, 235);border: hsl(hue, saturation, lightness);}
.a2{background-color:rgb(231, 235, 235);border: hsl(hue, saturation, lightness);}

.a5{background-color:rgb(231, 235, 235);border: hsl(hue, saturation, lightness );}
</style>
 
<body>
 
    <br><br><br><br><br><br><br><br><br><br><br>
    <strong>Menu :</strong><br>
    <a href="admin.php" class="a5">Admin</a><br>
    <a href="ajoutChauffeur.php" class="a1">Ajouter un chauffeur</a><br>
    <a href="ajouCamion.php" class="a2">Ajouter un camion</a><br>
    
 
    <center>
<form method="POST" action="">
<center>  <h1 style="color: thistle;"> Page de Suppression</h1></center>
<table>


<tr>
    <td style="color:black"><strong>  entrer la matricule du camion que vous voulez supprimer :</strong> </td> <br>
    <td ><input  style="height: 50px; background-color: rgb(226, 229, 229);border:transparent" type="text" name="matricule" > </td>
    <td><td><input type="submit"  class="button button2" value ="supprimer_camion " name ="suppmat" ></td></td>

</tr>
<tr>
<td style="color:black"> <strong>entrer le code de chauffeur que vous voulez supprimer :</strong> </td>
<td ><input  style="height: 50px; background-color: rgb(226, 229, 229);border:transparent" type="text" name="code" > </td>
<td><td><input type="submit"  class="button button11" value ="supprimer_chauffeur " name ="supp_chauffeur" ></td></td>
</tr>
  

</table>




</form>


</center>

</body>



</html>






<?php
 $conn = new PDO("mysql:host=localhost;dbname=carburantt",'root', '');
 if(isset($_POST['suppmat'])){ 
    $matricule=$_POST['matricule'];

    $req="DELETE  FROM camion WHERE matricule ='$matricule'";
    $conn->exec($req);

    echo "le camion est supprimé avec succés";

 }

 if(isset($_POST['supp_chauffeur'])){
    $code=$_POST['code'];
    $sql="DELETE  FROM chauffeur WHERE code ='$code'";
    $conn->exec($sql);
    echo "le chauffeur est supprimé avec succés";
 }
   
?>