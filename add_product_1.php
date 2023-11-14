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

    <title>Add New Product</title>
    <!--===============================================================================================-->
    	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="css/util.css">
    	<link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
  </head>
  <body >
    <!-- Header -->
  	<header class="header-v4">
  		<!-- Header desktop -->
  		<div class="container-menu-desktop">
  			<!-- Topbar -->
  			<div class="top-bar">
  				<div class="content-topbar flex-sb-m h-full container">
  					<div class="left-top-bar">
  					</div>

  					<div class="right-top-bar flex-w h-full">
  						<a href="logout.php" class="flex-c-m trans-04 p-lr-25">
  							LOGOUT
  						</a>
  					</div>
  				</div>
  			</div>

  			<div class="wrap-menu-desktop how-shadow1">
  				<nav class="limiter-menu-desktop container">

  					<!-- Logo desktop -->
  					<a href="#" class="logo">
  						<img src="images/logo_nz.png" alt="IMG-LOGO">
  					</a>

            <!-- Menu desktop -->
  					<div class="menu-desktop">
  						<ul class="main-menu">
  							<li >
  								<a href="dashboard.php">Dashboard</a>
  							</li>

  							<li class="active-menu">
  								<a href="add_product_1.php">Add Product</a>
  							</li>

  							<li>
  								<a href="edit_product_1.php">Edit Product</a>
  							</li>

  							<li>
  								<a href="delete_product_1.php">Delete Product</a>
  							</li>

                <li>
                  <a href="search_1.php">Search Product</a>
                </li>
  						</ul>
  					</div>

  					<!-- Icon header -->
  					</div>
  				</nav>
  			</div>
  		</div>

  		<!-- Header Mobile -->
  		<div class="wrap-header-mobile">
  			<!-- Logo moblie -->
  			<div class="logo-mobile">
  				<a href="index.php"><img src="images/logo_nz.png" alt="IMG-LOGO"></a>
  			</div>

  			<!-- Icon header -->


  			<!-- Button show menu -->
  			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
  				<span class="hamburger-box">
  					<span class="hamburger-inner"></span>
  				</span>
  			</div>
  		</div>


  		<!-- Menu Mobile -->
  		<div class="menu-mobile">
  			<ul class="topbar-mobile">
  				<li>
  					<div class="right-top-bar flex-w h-full">
  						<a href="logout.php" class="flex-c-m p-lr-10 trans-04">
  							LOGOUT
  						</a>
  					</div>
  				</li>
  			</ul>

        <ul class="main-menu-m">
          <li>
            <a href="dashboard.php">Dashboard</a>
          </li>

          <li>
            <a href="add_product_1.php">Add Product</a>
          </li>

          <li>
            <a href="edit_product_1.php">Edit Product</a>
          </li>

          <li>
            <a href="delete_product_1.php">Delete Product</a>
          </li>

          <li>
            <a href="search_1.php">Search Product</a>
          </li>
  			</ul>
  		</div>
  	</header>

    <div class="container">

      <div class="row">

        <div class="col-lg-8 col-md-8">
          <form class="form" action="add_product_2.php"
           method="post" enctype="multipart/form-data">


            <div class="form-row align-item-left">
               <div class="form-group col-lg-12 col-md-12">
                 <label class="label mx-1" for="name"></label>

                  <label class="label mx-1" for="name">Product Title</label>
                  <div class="input-group mx-1 mb-2 ">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-globe"></i>
                      </div>
                    </div>
                    <input type="text" class="form-control "
                     id="title" name="title">
                </div>
              </div><!-- end of form group size 6-->
            </div><!--FORM ROW END HERE  -->

            <div class="form-row align-item-left">
               <div class="form-group col-lg-12 col-md-12">
                  <label class="label mx-1" for="name">Category</label>
                  <div class="input-group mx-1 mb-2 ">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-globe"></i>
                      </div>
                    </div>
                    <input type="text" class="form-control "
                     id="category" name="category" placeholder="i.e T-shirt">
                </div>
              </div><!-- end of form group size 6-->
            </div><!--FORM ROW END HERE  -->

            <div class="form-row align-item-left">
               <div class="form-group col-lg-12 col-md-12">

                  <label class="label mx-1" for="name">Product Description (Max Characters 500)</label>
                  <div class="input-group mx-1 mb-2 ">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-globe"></i>
                      </div>
                    </div>
                    <textarea class="form-control" name="description" id="description"
                     rows="4" cols="80"></textarea>
                </div>
              </div><!-- end of form group size 6-->
            </div><!--FORM ROW END HERE  -->

            <div class="form-row align-item-left">

               <div class="form-group col-lg-6 col-md-6">
                  <label class="label mx-1" for="name">Price</label>
                  <div class="input-group mx-1 mb-2 ">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-globe"></i>
                      </div>
                    </div>
                    <input type="number" class="form-control" name="price" id="price" value="">

                </div>
              </div><!-- end of form group size 6-->

              <div class="form-group col-lg-6 col-md-6">
                 <label class="label mx-1" for="name">Picture</label>
                 <div class="input-group mx-1 mb-2 ">
                   <div class="input-group-prepend">
                     <div class="input-group-text">
                       <i class="fas fa-globe"></i>
                     </div>
                   </div>
                   <input type="file" class="form-control" name="picture"
                    id="picture" value="">

               </div>
             </div><!-- end of form group size 6-->
            </div><!--FORM ROW END HERE  -->

            <div class="form-row align-item-left">

               <div class="form-group col-lg-6 col-md-6">

                  <label class="label mx-1" for="name"></label>
                  <div class="input-group mx-1 mb-2 ">
                    <div class="input-group-prepend">

                    </div>
                    <input type="submit"
                      class="form-control btn btn-primary"  name="submit" id="submit"
                      value="ADD Product">


                      <input type="reset"
                        class="form-control btn btn-danger" name="reset" id="reset"
                        value="CANCEL">

                </div>
              </div><!-- end of form group size 6-->
            </div><!--FORM ROW END HERE  -->
          </form><!-- end of form-->
        </div><!-- end of div-8 right size -->
      </div><!-- end of row-->
    </div><!-- end of container-->
  </body>
</html>
