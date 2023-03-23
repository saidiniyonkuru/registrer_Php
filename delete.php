<?php include "connect.php";
$id=$_GET['id'];
//pour faire la suppression
$select="DELETE FROM customer WHERE id='$id'";
$sql=mysqli_query($con,$select); 
if($sql){
    ?>
    <script>
        alert("Vous avez supprimée l'enregistrement");
    </script>
    <?php
   

}else{
    echo "failed";
}
?>