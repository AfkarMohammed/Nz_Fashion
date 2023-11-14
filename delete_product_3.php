<?php
  require("validate_user.php");
  //connecting to the database server
  require("db_connection.php");
  require("code_lib.inc.php");

  $pid = $_REQUEST['pid'];
  $old_picture_name = getProductPicture($pid);

  //lets build a dynamic sql command to delete the record permanently

  $sql = "delete from product where pid=$pid";

  //executing the sql command


  $x = $mysqli->query($sql);

  if($x > 0){
    //echo "record was successfully deleted.!";
    //lets erase the file from the server hardrive permanently

    if($old_picture_name != "default.jpg"){
      unlink("products/large/$old_picture_name");
      unlink("products/thumb/$old_picture_name");
    }

    header("location:delete_product_4.php?status=pass");
  }
  else{
    //echo "deleting record failed";
    header("location:delete_product_4.php?status=fail");
  }



 ?>
