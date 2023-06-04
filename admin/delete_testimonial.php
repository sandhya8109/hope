<?php 
 include('db_connect.php'); 

 $id = $_GET['id'];

$deleteimg = mysqli_query($conn,"SELECT * FROM testimonial_management WHERE id = $id");
$row = mysqli_fetch_assoc($deleteimg);
unlink("assets/img/".$row['image']);


 $delete2 = mysqli_query($conn,"delete from testimonial_management where id = $id");
 if ($delete2) 
 {
 	header('location:index.php?page=list_testimonial');
 }
 else
 {
  echo "somthing went wrong please try again ! ";
 }
    
  ?>