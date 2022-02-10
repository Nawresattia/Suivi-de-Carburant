
<!doctype html>
 
 <style>
 
 
 body {
   background-image: url('logo.jpg');
   background-repeat: no-repeat;
   
   background-size: 100% 40%;
  
 }
 
 
	 #text{
 
		 height: 25px;
		 border-radius: 5px;
		 padding: 4px;
		 border: solid thin #aaa;
		 width: 90;
	 }
 
	 #button{
 
		 padding: 10px;
		 width: 100px;
		 color: white;
		 background-color: lightblue;
		 border: none;
	 }
 
	 #box{
 
 background-color: grey;
 margin: 17%;
 width: 500px;
 
  
 
 }
 </style>
 <head>
	 <title>dashboard</title>
 </head>
 
 
 
 <body><br><br><br><br><br>
   <center>
 <form method="POST" action="">
	 <br>
	 
 <div id="box" >
			 <div style="font-size: 20px;margin: 10px;color: white;">Admin</div>
 
			<strong>Mail:</strong> <input mail="text" type="text" name="mail"><br><br>
			<strong>Mot de passe </strong><input pass="text" type="password" name="pass"><br><br>
 
			 <input id="button" type="submit" name="entrer" value="entrer"><br><br>
 
 </center>
 </form>
 </body> 
 
	 
 
 
  
 </html>
 
 
 
 
 
<?php


$conn=mysqli_connect("localhost","root","","carburantt");
if (isset($_POST["entrer"])) {
 $mail=$_POST['mail'];
 $pass=$_POST['pass'];
 if($mail=="attianawres37@gmail.com" AND $pass=="nawres15/07"){
	 header("location:admin.php");
 }
 
 else{header("location:connexion.php");
}
}
 


 ?>
