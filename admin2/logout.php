<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: ../admin2/index.php");
   }
?>