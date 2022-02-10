




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
  
    <title>page d'aajout</title>
</head>
   
    <body>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <strong>Menu:</strong><br>
    <a href="admin.php" class="a1">Admin</a><br>
    <a href="supprimer.php" class="a5">supprimer</a><br>
    <a href="ajouCamion.php" class="a2">Ajouter un camion</a><br>
 
    
   
        <center>
            <form method="POST" action="">
            <center>  <h1 style="color: thistle;"> Page d'ajout chauffeur</h1></center>
                 <center>
                    <table>
                    <tr>
                        <td> <strong> Code</strong> </td> 
                        <td> <input style="height: 50px; background-color: rgb(226, 229, 229);border:transparent" type="text"  name="code" maxlength="8"minlength="8"> </td>
</tr>
    <tr>
        <td><strong> Code_carte<strong></td>
        <td><input style="height: 50px; background-color: rgb(226, 229, 229);border:transparent" type="text" name="code_carte"maxlength="8"minlength="8">
</td>
</tr>
<tr>
    <td><strong> Nom du chauffeur</strong></td>
    <td><input style="height: 50px; background-color: rgb(226, 229, 229);border:transparent"type="text" name="nom">
</td>
</tr>
<tr>
    <td><strong> Prenom du chauffeur </strong></td>
    <td><input style="height: 50px; background-color: rgb(226, 229, 229);border:transparent" type="text" name="prenom"><br><br>
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
   $code_carte=$_POST['code_carte'];
   $code=$_POST['code'];
   
   $nom=$_POST['nom'];
   $prenom=$_POST['prenom'];

   


  
$req="INSERT INTO chauffeur (code,code_carte,nom,prenom  ) values('$code','$code_carte','$nom','$prenom')";
    $conn->exec($req);
 

 echo "le chauffeur est ajouter  avec succés ";
 }
 



?>