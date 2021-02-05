<?php
   session_start();
   unset($_SESSION["userid"]);
   unset($_SESSION["userpwd"]);

   echo 'You have cleaned session';
   header("location:login.php");
?>
