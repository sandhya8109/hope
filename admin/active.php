<?php 
 include('db_connect.php'); 
    
    $id = $_GET['id'];
    $is_active = $_GET['is_active'];
    $update1 = "UPDATE banner_management SET is_active=$is_active WHERE id=$id";
    mysqli_query($conn,$update1);
    header('location:index.php?page=list_banner');
  ?>


