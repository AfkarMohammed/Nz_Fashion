<?php
  //link to database server
  require("db_connection.php")
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

    <title>Search</title>

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
  <body>

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

                <li>
                  <a href="add_product_1.php">Add Product</a>
                </li>

                <li>
                  <a href="edit_product_1.php">Edit Product</a>
                </li>

                <li  >
                  <a href="delete_product_1.php">Delete Product</a>
                </li>

                <li class="active-menu">
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
        <div class="col-lg-12 col-md-12">

          <img src="images/banner.png" class="col-12 mb-3" alt="">

        </div><!-- end of div 12 -->
      </div><!-- end of row-->


      <div class="row">
        <div class="col-lg-12 col-md-12">
            <label class="label mx-1" for="name"></label>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 col-md-12">

          <form class="form" action="search_2.php"
           method="post" enctype="multipart/form-data">

           <!--  -->
           <div class="form-row align-item-left">
              <div class="form-group col-lg-4 col-md-4">

                 <label class="label mx-1" for="name">Search By </label>
                 <div class="input-group mx-1 mb-2 ">
                   <div class="input-group-prepend">
                     <div class="input-group-text">
                       <i class="fa fa-chevron-circle-down"></i>
                     </div>
                   </div>

                   <?php
                        $searchBy = $_REQUEST['searchBy'];
                        $keywords = $_REQUEST['keywords'];
                    ?>

                   <select class="form-control" name="searchBy" title="searchBy">
                     <option value="title"        <?php echo ($searchBy=='title')?'selected=selected':''; ?>>Title</option>
                     <option value="description"  <?php echo ($searchBy=='description')?'selected=selected':''; ?>>Description</option>
                     <option value="price"        <?php echo ($searchBy=='price')?'selected=selected':''; ?>>Price</option>
                     <option value="pid"          <?php echo ($searchBy=='pid')?'selected=selected':''; ?>>Product ID</option>
                     <option value="category"     <?php echo ($searchBy=='category')?'selected=selected':''; ?>>Category</option>
                   </select>

               </div>
             </div><!-- end of form group size 6-->


             <div class="form-group col-lg-4 col-md-4">



              <label class="label mx-1" for="keywords">Keywords </label>
              <div class="input-group mx-1 mb-2 ">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-search"></i>
                  </div>
                </div>
                <input type="text" class="form-control "
                 id="keywords" name="keywords" value="<?php echo $keywords; ?>">

            </div>
            </div><!-- end of form group size 6-->



            <div class="form-group col-lg-4 col-md-4">


              <label for="" class="mb-4"></label>
              <div class="input-group mx-1 mb-2 ">

               <input type="submit" class="btn btn-primary col-6 " id="submit"
                name="submit" value="SEARCH" >

               <input type="reset" class="btn btn-dark col-6"  id="reset"
                name="reset" value="CLEAR">
              </div><!--.... -->
           </div>
           </div><!-- end of form group size 6-->



           </div><!--FORM ROW END HERE  -->
           <!--  -->



          </form>


        </div><!-- end of div-12 right size -->




      </div><!-- end of row-->


    </div><!-- end of container-->

    <div class="container">
      <div class="row">

      </div><!-- end of row-->

      <div class="row">

        <div class="col-lg-12 col-md-12">

          <table class="table table-striped">
            <tr>
              <th>PID</th>
              <th>Title</th>
              <th>Category</th>
              <th>Description</th>
              <th>Price</th>
              <th>Picture</th>
              <th>Actions</th>
            </tr>
            <?php

              //recieve the searchBy and keywords
              $searchBy = $_REQUEST['searchBy'];
              $keywords = $_REQUEST['keywords'];

              //echo $searchBy ."<br />" .$keywords;
              //since there are 4 values for searchBy can't create a single
              //sql command it will vary according to the searchBy type
              $sql = "";

              switch($searchBy){
                case 'pid':
                  $sql = "select * from product where pid=$keywords";
                  break;
                case 'title':
                  $sql = "select * from product where title='$keywords' or title like '%$keywords%'";
                  break;
                case 'category':
                  $sql = "select * from product where category <= $keywords";
                  break;
                case 'description':
                  $sql = "select * from product where description='$keywords' or description like '%$keywords%'";
                  break;
                case 'price':
                  $sql = "select * from product where price <= $keywords";
                  break;


              }
              /*echo "<pre>";
              echo $sql;
              echo "</pre>";*/

              $rs = $mysqli->query($sql);

              if(mysqli_num_rows($rs)>0){
                //can display the records
                while($row = mysqli_fetch_assoc($rs)){
                  ?>
                  <tr>
                    <td><?php echo $row['pid'];?></td>
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo $row['category'];?></td>
                    <td><?php echo $row['description'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td>
                      <img src="products/thumb/<?php echo $row['picture'];?>"
                        style="max-width:150px; max-height:150px;"
                        alt="">

                    </td>
                    <td>
                      <a class="btn btn-sm btn-dark" href="edit_product_2.php?pid=<?php echo $row['pid']; ?>">EDIT</a>
                      <a class="btn btn-sm btn-danger" href="delete_product_2.php?pid=<?php echo $row['pid']; ?>">DEL</a>
                    </td>
                  </tr>
                  <?php
                }


              }
              else{
                echo "<tr>";
                echo "<td colspan='6' class='text-center'><h2 class='text-danger'>Sorry No Records were Found</h2></td>";
                echo "</tr>";
              }





             ?>


          </table>

        </div>

      </div><!-- end of row table-->


    </div>







  </body>
</html>                                                                                                                                                                                                                
