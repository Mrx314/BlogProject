<?php
   
   $header1 = $_POST['header1'];
   $para1 = $_POST['para1'];
   $header2 = $_POST['header2'];
   $para2 = $_POST['para2'];

   $conn = new mysqli('localhost','root','husainisbest53','blog');


   if($conn -> connect_error){

      die("Connection failed".$conn -> connect_error);
   }
   
   else{

      $stmt = $conn->prepare("insert into messi(header1,para1,header2,para2) values(?,?,?,?)" );
      $stmt -> bind_param("ssss", $header1,$para1,$header2,$para2);
      $stmt->execute();
      echo "Success";

      $stmt->close();
      $conn->close();
      header("Location: admin.php?success");

   }



?>
