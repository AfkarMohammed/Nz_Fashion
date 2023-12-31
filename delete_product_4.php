<?php
require("validate_user.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Boostrap CSS style sheet -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- attach the JS files -->
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/fontawesome-all.js">

    </script>

    <title>Delete a Product</title>
  </head>
  <body>

    <div class="container">

      <div class="row">
        <div class="col-lg-12 col-md-12">

          <img src="images/banner.png" class="col-12 mb-3" alt="">

        </div><!-- end of div 12 -->
      </div><!-- end of row-->

      <div class="row">

        <div class="col-lg-4 col-md-4">
          <img src="images/left_pic.jpg" class="img-fluid col-lg-12 mb-3 d-sm-none d-md-block d-lg-block" alt="">
        </div><!-- end of div-4 left side -->

        <div class="col-lg-8 col-md-8">

          <?php

            if($_REQUEST['status']=="pass"){
              // echo "<h2 class='text-success'>Record Successfully Added</h2>";
              ?>
                  <div class="alert alert-success alert-dismissible fade show  bagde-dark" role="alert">
                    <h2>Record Was Successfully Deleted</h2>
                    <strong>Awesome </strong> Deleting the record  successfully.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <br />
                    <a href="delete_product_1.php" class="btn btn-dark my-3">Delete Another Record</a>
                  </div>
              <?php
            }
            else{
              // echo "<h2 class='text-danger'>Add new record failed.!</h2>";
              ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h2>Deleting Record Failed</h2>
                    <strong>Sorry</strong> Deleting record failed, please try again.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <br />
                    <a href="delete_product_1.php" class="btn btn-danger my-3">Try again</a>
                  </div>
              <?php
            }

           ?>
        </div><!-- end of div-8 right size -->
      </div><!-- end of row-->
    </div><!-- end of container-->
  </body>
</html>                                                                                                                                                                                                                
