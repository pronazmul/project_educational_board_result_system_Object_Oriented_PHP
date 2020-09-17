<?php require_once "Classes/Admin/Admin.php"; 
$obj = new Admin; ?>
<?php if (isset($_SESSION['name'])) {header('location:dashboard.php');}?>
<!DOCTYPE html>
<html lang="en" class=" ">
<head>
    <meta charset="utf-8" />
    <title>OOP | CRUD Application</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/app.v1.css" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>


<?php
 
 if (isset($_POST['submit'])) {
   $user_or_email = $_POST['user_or_email'];
   $pass = $_POST['pass'];


        if (!empty($user_or_email) && !empty($pass)) {

              $msg = $obj -> adminLogin($user_or_email, $pass);  
            
        }else{
                $msg = "<p class = 'alert alert-danger' ><b>ERROR..! </b>Field Must Not Be Empty.<button class='close' data-dismiss='alert'>&times;</button></p>";}



 }

?>

<body class="">
    <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
        <div class="container aside-xl"> <a class="navbar-brand block" href="index.html">Sign in from here</a>
            <section class="m-b-lg">
<!-- Massage Show -->
            <?php if (isset($msg)) { echo $msg;} ?>
               
                <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                    <div class="list-group">
                        <div class="list-group-item">
                            <input type="text" name="user_or_email" placeholder="Email / Username" class="form-control no-border"> 
                        </div>
                        <div class="list-group-item">
                            <input type="password" name="pass" placeholder="Password" class="form-control no-border"> 
                        </div>
                    </div>

                    <div class="checkbox m-b">
                        <label>
                            <input type="checkbox" disabled=""> Remember Me <a href="#">for next time login</a> </label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>

                    <div class="text-center m-t m-b"><a href="pass_reset.php"><small>Forgot password?</small></a></div>


                    <div class="line line-dashed"></div>
                    <p class="text-muted text-center"><small>Do not have an account?</small></p> 
                    <a href="signup.php" class="btn btn-lg btn-default btn-block">Create an account</a> 
                </form>





            </section>
        </div>
    </section>
   

    <!-- / footer -->
    <!-- Bootstrap -->
    <!-- App -->
    <script src="js/app.v1.js"></script>
    <script src="js/app.plugin.js"></script>
</body>

</html>