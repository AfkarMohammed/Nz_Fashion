<?php
  session_start();
  //lets validate the user
  if($_SESSION['email'] == ''){
    //redirect the user to invalid login page
    header("location:invalid_userlogin.php");
  }
 ?>
