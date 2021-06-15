<?php
      include 'config.php';
 

$id = $_GET ['id'];

$result= mysqli_query ($conn,"DELETE FROM postinfo WHERE id='$id'");

 if($result){

    echo "deta deleat";
     header('Location: view.php');
 }
?>