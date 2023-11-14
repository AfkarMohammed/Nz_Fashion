<?php
  //adding a new record to the table product in the db_ad4850 database

  //1st lets connect to the database server

  require("db_connection.php");


  //get the values from the form (add_product_1.php) and display
  // echo "<pre>";
  // print_r($_REQUEST);
  // echo "</pre>";


    $email          = $_REQUEST['email'];
    $cus_name       = $_REQUEST['cus_name'];
    $address        = $_REQUEST['address'];
    $access_code    = crypt($_REQUEST['access_code'],"x07h");

     $sql  = "insert into customer_log (email,cus_name,address,access_code) values(";
     $sql .= "'$email',";
     $sql .= "'$cus_name',";
     $sql .= "'$address',";
     $sql .= "'$access_code')";

    $x = $mysqli->query($sql);
    print_r ($x);
    if($x>0){

      header("location:signup_3.php?status=pass");
    }
    else{

      header("location:signup_3.php?status=fail");
    }

 ?>
