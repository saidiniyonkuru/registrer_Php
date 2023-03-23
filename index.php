<?php 
//indiquer qu'il a la connection entre la page connect.php et la page d'insertion
include "connect.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple</title>
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div>
        <i class="fas fa-search"></i>
    <form method='POST'>
        <h1>  Vendre les poisons en ligne</h1>
        <hr>
                                
        <p> <span>Nom</span> <input type="text"   name="nom" placeholder="Entre votre Nom" required></p>
        <p><span>Prenom</span><input type="text"   name="prenom" placeholder="Entre votre prenom"></p> 
        <p><span>E-mail</span><input type="email"   name="email" placeholder="Entre votre email"></p>
        <p><span>Telephone</span><input type="telephone"   name="telephone"  placeholder="telephone"required></p>
         <button type="submit" name="submit">Enregistrer</button>
         <button type="submit" name="submat"><a href="view.php">View</a></button>
    </form>
 
  </div>
<?php

if(isset($_POST['submit'])){
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $email=$_POST['email'];
  $telephone=$_POST['telephone'];
//Requette pour inserer dans la base données
$quer="INSERT INTO customer (nom,prenom,email,telephone)VALUES('$nom','$prenom','$email','$telephone')";

$sql=mysqli_query($con,$quer);

if($sql){
  //echo "already";
}else{
  echo "not yet";
}
}

?>

</body>
</html>