<?php 
//connection de faire la connection 
include "connect.php";
$id=$_GET['id'];
//requette de faire la visualistation 
$select="SELECT * FROM customer WHERE id='$id'";
$sql=mysqli_query($con,$select); 
$rows=mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
<form method='POST'>
        <h1>Faire la modification</h1>
        <hr>
                                
         <input value="<?php echo $rows['nom']; ?>" type="text" name="nom" placeholder="Nom" ><br><br>
         <input value="<?php echo $rows['prenom']; ?>"type="text" name="prenom" placeholder="prenom" ><br><br>
         <input value="<?php echo $rows['email']; ?>"type="email" name="email" placeholder="email"><br><br>
         <input value="<?php echo $rows['telephone']; ?>"type="telephone" name="telephone"  placeholder="telephone"><br><br>
         <button type="submit" name="submit">Modifier</button>
         <button  type="submit" name="submat" ><a href="view.php">Back</a></button>
         
        
    </form>
 
  </div>
  <?php
if(isset($_POST['submit'])){
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $email=$_POST['email'];
  $telephone=$_POST['telephone'];
//requette pour faire la modification dans la base de données
$update="UPDATE customer SET nom='$nom',prenom='$prenom',email='$email',telephone='$telephone' WHERE id='$id'";

$sql=mysqli_query($con,$update);

if($sql){
  //echo "alreadyu";
}else{
  echo "not yet";
}
}

?>
</body>
</html>

        
    