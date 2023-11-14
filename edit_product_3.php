<?php
  require("validate_user.php");
  //connecting to the database server
  require("db_connection.php");
  require("code_lib.inc.php");

  //get the values from edit_product_2.php file's form and display
  /*echo "<pre>";
  print_r($_REQUEST);
  echo "</pre>";*/

  //lets copy the form field values to variables
  $pid         = $_REQUEST['pid'];
  $title       = $_REQUEST['title'];
  $description = $_REQUEST['description'];
  $category    = $_REQUEST['category'];
  $price       = $_REQUEST['price'];

  //lets build a dynamic sql command
  $sql  = "update product set ";
  $sql .= "title='$title',";
  $sql .= "description='$description',";
  $sql .= "category='$category',";
  $sql .= "price=$price where pid=$pid";

  //execute the sql command
  $x = $mysqli->query($sql);

  if($x > 0){
    // echo "successfully updated";

    //file upload code starts here

      if($_FILES['picture']['error']==0 && $_FILES['picture']['type']=="image/jpeg"){
        //we can proceed with the upload

        $old_picture_name = getProductPicture($pid);

        $filename = $_FILES['picture']['tmp_name'];
        $destination;


        if($old_picture_name=="default.jpg"){
            //generate  a new file name
            $destination = $pid . "_" . rand().rand().rand().".jpg";
        }
        else{
           $destination = $old_picture_name;
        }

        move_uploaded_file($filename,"products/large/".$destination);
        copy("products/large/".$destination,"products/thumb/".$destination);
        resizeThumbPicture("products/thumb/",$destination);

        //lets update the picture field in product table

        $sql2 = "update product set picture='$destination' where pid=$pid";
        $mysqli->query($sql2);




      }


    //file upload code ends here


    header("location:edit_product_4.php?status=pass");
  }
  else{
    // echo "saving changes failed";
    header("location:edit_product_4.php?status=fail");
  }




 ?>
