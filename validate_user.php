<?php
  session_start();
  //lets validate the user
  if($_SESSION['user_id'] == ''){
    //redirect the user to invalid login page
    header("location:invalid_login.php");
  }
 ?>
