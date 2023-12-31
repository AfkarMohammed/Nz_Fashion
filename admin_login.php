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

    <title>Login</title>
  </head>
  <body>

    <div class="container">

      <div class="row">

          <div class="col-lg-5 col-md-5 offset-lg-4 offset-md-4">
            <img src="images/logo_nz.png" alt="">
            <h2 class="text-center badge-success">LOGIN</h2>
            <h3 class="text-center badge-danger">Authorized Access Only</h3>
            <hr>

            <form class="" action="login_2.php" method="post">

              <div class="form-row align-item-left">

                 <div class="form-group col-lg-12 col-md-12">

                    <label class="label mx-1" for="name">Username</label>
                    <div class="input-group mx-1 mb-2 ">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-user"></i>
                        </div>
                      </div>
                      <input type="email" class="form-control "
                       id="user_id" name="user_id" placeholder=" Enter your email address">
                  </div>
                </div><!-- end of form group size 6-->



                <div class="form-group col-lg-12 col-md-12">

                   <label class="label mx-1" for="name">Password</label>
                   <div class="input-group mx-1 mb-2 ">
                     <div class="input-group-prepend">
                       <div class="input-group-text">
                         <i class="fas fa-lock"></i>
                       </div>
                     </div>
                     <input type="password" class="form-control "
                      id="access_code" name="access_code" placeholder=" Enter the password">
                 </div>
               </div><!-- end of form group size 6-->


               <div class="form-group col-lg-12 col-md-12">

                    <input type="submit" class="col-6 btn btn-dark "
                     value="LOGIN">

                     <input type="reset" class="col-5 btn btn-danger "
                      value="CANCEL">
                </div>
              </div><!-- end of form group size 6-->



              </div><!--FORM ROW END HERE  -->


            </form>

          </div>


      </div><!-- end of row-->



    </div><!-- end of container-->

  </body>
</html>                                                                                                                                                                                                                
