

<html>

<head>
    <title>dashboard</title>
</head>
<style>

body {
  background-image: url('logo.jpg');
  background-repeat: no-repeat;
  
  background-size: 100% 30%;
 
}
.button2{background-color:rgb(218, 104, 51);border: hsl(hue, saturation, lightness);}
.button1{background-color:rgb(218, 104, 51);border: hsl(hue, saturation, lightness);}
.button11{background-color:rgb(218, 104, 51);border: hsl(hue, saturation, lightness);}
.button3{background-color:rgb(218, 104, 51);border: hsl(hue, saturation, lightness);}
.button4{background-color:rgb(218, 104, 51);border: hsl(hue, saturation, lightness);}

.a1{background-color:rgb(231, 235, 235);border: hsl(hue, saturation, lightness);}
.a2{background-color:rgb(231, 235, 235);border: hsl(hue, saturation, lightness);}

.a5{background-color:rgb(231, 235, 235);border: hsl(hue, saturation, lightness );}
</style>
 
<body>
 
    <br><br><br><br><br><br><br><br><br><br><br>
    <strong>Menu :</strong><br>
    <a href="ajoutChauffeur.php" class="a1">Ajouter un chauffeur</a><br>
    <a href="ajouCamion.php" class="a2">Ajouter un camion</a><br>
    <a href="supprimer.php" class="a5">Supprimer</a>
 
    <center>
<form method="POST" action="">
<center>  <h1 style="color: thistle;"> Page de recherche</h1></center>
<table>


<tr>
    <td style="color:black"><strong>  entrer la matricule que vous voulez rechercher :</strong> </td> <br><br><br>
    <td ><input  style="height: 50px; background-color: rgb(226, 229, 229);border:transparent" type="search" name="matricule" > </td>
    <td><td><input type="submit"  class="button button2" value ="rechercher sur le camion " name ="rechercherm" ></td></td>

</tr>
<tr>
<td style="color:black"> <strong>entrer le code de chauffeur que vous voulez rechercher :</strong> </td>
<td ><input  style="height: 50px; background-color: rgb(226, 229, 229);border:transparent" type="search" name="code" > </td>
<td><td><input type="submit"  class="button button11" value ="rechercher sur le chauffeur " name ="rechercherc" ></td></td>
</tr>
  
<tr>
    <td style="color:#000000"><strong>Quel date vous voulez trouver?:</strong></td>
    <td><input type="date" name="datt">  </td> <td ></td>
    <td><input type="date" name="dat">  </td> <td ></td>
    <td><input type="submit" class="button button3" value="rechercher depuis date" name="rechercherd"></td>
</tr>
 
</table>




</form>


</center>

</body>



</html>




<?php

   $conn = new PDO("mysql:host=localhost;dbname=carburantt",'root', '');
 
   if (isset($_POST["rechercherm"])) {
	$matricule = $_POST["matricule"];
	$sth = $conn->prepare("SELECT * FROM `camion` WHERE matricule= '$matricule'");

    $sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();
    if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table  >
        <tr>
				<th>matricule</th><td>/</td>
				<th>kilometrage</th><td>/</td>
                <th>type</th><td>/</td>
				<th>objectif</th>
			</tr>
        <tr>
				<td><?php echo $row->matricule  ; ?></td><td>/</td>
				<td><?php echo  $row->kilometrage;?></td><td>/</td>
                 
				<td><?php echo $row->typee; ?></td><td>/</td>
				<td><?php echo $row->objectif;?></td> 
			</tr>

    
            </table>
    
    <?php 
 
   }
		
		
   else{
    echo "matricule introuvable";
    }


   }


  if (isset($_POST["rechercherc"])) {
	$code = $_POST["code"];
	$sth = $conn->prepare("SELECT  * FROM chauffeur WHERE code ='$code'");

	 
    $sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();
    if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table  >
        <tr>
				<th>Code</th><td>/</td>
				<th>Code_carte</th><td>/</td>
                <th>Nom</th><td>/</td>
				<th>Prénom</th>
			</tr>
        <tr>
				<td><?php echo $row->code  ; ?></td><td>/</td>
				<td><?php echo  $row->code_carte;?></td><td>/</td>
                 
				<td><?php echo $row->nom; ?></td><td>/</td>
				<td><?php echo $row->prenom;?></td> 
			</tr>

    
            </table>
    
   <?php 
 
  }
		
		
           else{
              echo "code introuvable";
                }






			}
			
  if (isset($_POST["rechercherd"])) {
	$datt = $_POST["datt"];
	$dat = $_POST["dat"];
 
	$sth = $conn->prepare("SELECT * FROM `carburant`    ");

 

    $sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();
    if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table  >
        <tr>
		<th>matricule</th><td>/</td>
				<th>Code</th><td>/</td>
			
                <th>quantitié_chargé</th><td>/</td>
				<th>quantité_stocké</th><td>/</td>
				<th>date</th>
			</tr>
        <tr>
				<td><?php echo $row->matricule  ; ?></td><td>/</td>
				<td><?php echo  $row->code;?></td><td>/</td>
                 
				<td><?php echo $row->quantité_chargé; ?></td><td>/</td>
				<td><?php echo $row->quantité_stocké;?></td> <td>/</td>
				<td><?php echo $row->datee;?></td> 


			</tr>

    
            </table>
    
   <?php 
 
  }
		
		
           else{
              echo "date introuvable";
                }






  	}	
 		
?>			
