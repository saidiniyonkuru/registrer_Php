<?php include "connect.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
    <table border="1px" cellpadding="10px" cellspacing="0px">
    <tr>
        <th>Nom</th>
        <th>prenom</th>
        <th>email</th>
        <th>telephone</th>
        <th colspan="2" class="th">Action</th>
    </tr>

    <?php
    //pour la visualisation
     $quer="SELECT * FROM customer";
     $sql=mysqli_query($con,$quer);
     $result=mysqli_num_rows($sql);

     if($result){
        while($rows=mysqli_fetch_array($sql)){
            ?>
            <tr>
                <td><?php echo $rows['nom'];?></td>
                <td><?php echo $rows['prenom'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['telephone'];?></td>
                <td><a href="update.php?id=<?php echo $rows['id'];?>">Modifier</a></td>
                <td><a href="delete.php?id=<?php echo $rows['id'];?>">Supprimer<i class="fa-solid fa-delete"></i></a></td>

            </tr>
          <?php
            
            
        }
     } 
      

    ?>
  
  </table>
<a href="index.php" style="color:#fff">Home</a>
</body>
</html>
