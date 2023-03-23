
<?php
//connection base données
  $host='localhost';
  $user='root';
  $pass='';
  $db='zeal';

  $con=mysqli_connect($host,$user,$pass,$db);
  //verifier si le base de données est deja connecte
  if($con){
    //echo "oky";
  }else{
    echo "bad result";
  }
?>