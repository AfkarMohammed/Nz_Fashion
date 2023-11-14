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

    <title>Dashboard</title>
  </head>
  <body>

    <div class="container">

      <div class="row">
        <div class="col-lg-8 col-md-8">
          <h1 class="display-4">Dashboard</h1>

          <div class="row">

            <div class="lg-col-3 col-md-3 mx-2"  style="border:1px solid silver;padding:10px;">
              <h3>Add Products </h3>
              <p>Use this option to register new products in your site</p>
              <a href="add_product_1.php" class="btn btn-success">ADD</a>
            </div><!-- end of box 1-->


            <div class="lg-col-3 col-md-3 mx-2"  style="border:1px solid silver;padding:10px;">
              <h3>Edit Products </h3>
              <p>Use this option to update products in your site</p>
              <a href="edit_product_1.php" class="btn btn-warning">EDIT</a>
            </div><!-- end of box 2-->


            <div class="lg-col-3 col-md-3 mx-2"  style="border:1px solid silver;padding:10px;">
              <h3>Delete Products </h3>
              <p>Use this option to remove products from your site</p>
              <a href="delete_product_1.php" class="btn btn-danger">DELETE</a>
            </div><!-- end of box 2-->


          </div><!-- end of row-->

          <div class="row">

            <div class="lg-col-3 col-md-3 mx-2 my-3"  style="border:1px solid silver;padding:10px;">
              <h3>Search  </h3>
              <p>Use this option to Search products from your site</p>
              <a href="search_1.php" class="btn btn-primary">SEARCH</a>
            </div><!-- end of box 2-->


            <div class="lg-col-3 col-md-3 mx-2 my-3"  style="border:1px solid silver;padding:10px;">
              <h3>Logout </h3>
              <p>Use this option to sign out products from your site</p>
              <a href="logout.php" class="btn btn-dark">SIGN OUT</a>
            </div><!-- end of box 2-->
          </div><!-- end of row-->
        </div><!-- end of div-8 right size -->
      </div><!-- end of row-->
    </div><!-- end of container-->
  </body>
</html>
