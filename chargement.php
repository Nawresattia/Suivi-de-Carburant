


<html>
<style>
   
    .button1{background-color: rgb(207, 204, 204);width: 80; height: 50;border: hsl(hue, saturation, lightness);}
    .button2{background-color :rgb(38, 90, 8);width: 80; height: 50; border: hsl(hue, saturation, lightness);}
   
       
    body {
  background-image: url('logo.jpg');
  background-repeat: no-repeat;
  
  background-size: 100% 30%;

}

 
</style>
<head>
  
    <title>page d'accueil</title>
</head>
   
<body>
   
 <br><br><br><br><br><br><br><br><br><br>
 <center>
 
<form  action="" method="POST">
    <br><br>  
  <center>  <strong><h1 style="color: thistle;">  Bordure de  de  Recharge  </h1> </strong>  </center> 
    <table border="0">
  
    <td style="color:black;"><strong>Entrer la matricule :</strong></td>  
    <td><input style="height: 50px; background-color: rgb(226, 229, 229);border:transparent" type="text" name="matricule" size=10 minlength="10" maxlength="10"></td>  <td colspan="6"></td> 
     <td style="color:black;"><strong>Entrer votre code  :</strong></td> 
  

     <td>  <input style="height: 50px; background-color: rgb(226, 229, 229);border:transparent ; " type="text" name="code" size=10 minlength="8" maxlength="8"> </td><td colspan="6"></td>
  
     <td style="color:black;"><strong>Entrer la quantite :</strong></td> 
     <td>  <input style="height: 50px; background-color: rgb(226, 229, 229);border:transparent ; " type="number" name="quantité_chargé"   > </td><td colspan="6"></td>

    <tr><td style="color:black;"><strong>Entrer le kilometrage :</strong></td> 

    <td><input style="height: 50px; background-color: rgb(226, 229, 229);border:transparent" type="number" name="kilometrage" size=10 minlength="1" maxlength="10" ></td> <td colspan="6"></td> 

   <td style="color:black;"><strong>Entrer le code de carte :</strong></td>
   <td>  <input style="height: 50px; background-color: rgb(226, 229, 229);border:transparent"  type="text" name="code_carte" size=10 minlength="8" maxlength="8" ></td><td colspan="6"></td> 

   <td style="color:black;"><strong>Entrer le date:</strong></td>
   <td>  <input style="height: 50px; background-color: rgb(226, 229, 229);border:transparent"  type="datetime-local" name="datee" size=20 ></td></tr>


 



    
     
 

 </table> <br><br>
 
       <center>
 
        <input type="reset"  class="button button1" value ="annuler" name ="annuler">

        <input type="submit"  class="button button2" value ="valider" name ="valider" >
        
       </center>
  
</form>
</center>
</body>
 


 







<?php
 
 $conn = new PDO("mysql:host=localhost;dbname=carburantt",'root', '');

 if(isset($_POST['valider'])){
   $matricule=$_POST['matricule'];
   $kilometrage=$_POST['kilometrage'];

   
   
   $code_carte=$_POST['code_carte'];
   $code=$_POST['code'];
   
   
   
  $quantité_chargé=$_POST['quantité_chargé'];
  $datee=$_POST['datee'];
  
  
   $sql=" INSERT INTO camion(matricule,kilometrage,quantité_chargé,datee) VALUES('$matricule',$kilometrage,$quantité_chargé,'$datee')";
   $conn->exec($sql);
    
  
  
   $req="INSERT INTO chauffeur (code,code_carte  ) values('$code','$code_carte')";
   $conn->exec($req);
   
  
  
  
  
   $r="INSERT INTO carburant (matricule,code,quantité_chargé ,datee) values('$matricule','$code',$quantité_chargé,'$datee')";
   $conn->exec($r);
  
  
   
   
  
  
  
   echo "le chargement enregistré avec succés ";

   }

?>





















