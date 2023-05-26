<?php 
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM application where id=".$_GET['id'])->fetch_array();

extract($_POST);

 		$fname=$qry['resume_path'];   
       $file = ("assets/resume/".$fname);
       $fname = explode('_',$fname);
       unset($fname[0]);
       $fname = implode("",$fname);
       header ("Content-Type: ".filetype($file));
       header ("Content-Length: ".filesize($file));
       header ("Content-Disposition: attachment; filename=".$fname);

       readfile($file);