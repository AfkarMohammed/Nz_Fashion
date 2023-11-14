<?php
  require("validate_user.php");
  //adding a new record to the table product in the db_ad4850 database

  //1st lets connect to the database server

  require("db_connection.php");
  require("code_lib.inc.php");

  //get the values from the form (add_product_1.php) and display
  echo "<pre>";
  print_r($_REQUEST);
  echo "</pre>";

  //store the form field values to variables
    $title       = $_REQUEST['title'];
    $description = $_REQUEST['description'];
    $price       = $_REQUEST['price'];
    $category    = $_REQUEST['category'];

  //building a dynamic sql command

     $sql  = "insert into product (title,description,category,price) values(";
     $sql .= "'$title',";
     $sql .= "'$description',";
     $sql .= "'$category',";
     $sql .= "$price)";

    //lets display the sql command
    //echo $sql;

    //lets execute the sql command
    $x = $mysqli->query($sql);

    if($x>0){
      //echo "record successfully added";

      //upload code start here
        if($_FILES['picture']['error'] == 0 && $_FILES['picture']['type']=="image/jpeg"){
          //can  upload
          $last_id     = $mysqli->insert_id;
          $filename    = $_FILES['picture']['tmp_name'];
          $destination = $last_id . "_".rand().rand().rand().".jpg";

          $y = move_uploaded_file($filename,"products/large/".$destination);

          if($y>0){
            //lets update the product table's picture column with the generated file name
            $sql2 = "update product set picture='$destination' where pid=$last_id";
            //execute the sql command
            $z = $mysqli->query($sql2);

            //lets copy the image to thumb folder then resize it to a smaller size

            copy("products/large/".$destination,"products/thumb/".$destination);

            //lets resize it
            resizeThumbPicture("products/thumb/",$destination);


          }
        }
      //upload code ends here


      header("location:add_product_3.php?status=pass");
    }
    else{
      //echo "adding new record failed";
      header("location:add_product_3.php?status=fail");
    }

 ?>
