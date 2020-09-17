<?php require_once "Classes/Admin/Admin.php"; 
$obj = new Admin; ?>

<?php if (isset($_SESSION['name'])) {header('location:dashboard.php');}?>
<!DOCTYPE html>
<html lang="en" class=" ">
<!-- Mirrored from flatfull.com/themes/scale/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 15:15:07 GMT -->

<head>
    <meta charset="utf-8" />
    <title>OOP | CRUD Application</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/app.v1.css" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>

<body class="">

<?php
if (isset($_POST['submit'])) {

    //Manage Username..
    $username = $_POST['username'];
    $check_user= $obj-> checkUsername($username);

    //Mannage Email..
    $email = $_POST['email'];
    $check_email= $obj-> checkEmail($email);

    //Mannage Password....
    $pass = $_POST['pass'];
    $pass_hash = password_hash($pass, PASSWORD_DEFAULT);

    //Checkbox Management.......
    if (isset($_POST['check'])) {
        $agree = true;}else{ $agree = false;}

//Nasted If Else Statement For Form Validation
    if (!empty($username) && !empty($email) && !empty($pass)) {

        if ($agree == true) {

            if ($check_user == true) {
               
               if ($check_email == true) {
                  
                    $obj -> insertData($username, $email, $pass_hash);
        $msg = "<p class = 'alert alert-success' ><b>Congrates..! </b>Account Created Successfully.<button class='close' data-dismiss='alert'> &times;</button></p>";

               }else{
        $msg = "<p class = 'alert alert-danger' ><b>ERROR..! </b>Email Alrady Exist.<button class='close' data-dismiss='alert'>&times;</button></p>";}

            }else{
        $msg = "<p class = 'alert alert-danger' ><b>ERROR..! </b>Username Already Exist.<button class='close' data-dismiss='alert'>&times;</button></p>";}

            
        }else{
        $msg = "<p class = 'alert alert-danger' ><b>ERROR..! </b>You Must Agree to Go.<button class='close' data-dismiss='alert'>&times;</button></p>";}
    
    }else{
        $msg = "<p class = 'alert alert-danger' ><b>ERROR..! </b>Field Must Not Be Empty.<button class='close' data-dismiss='alert'>&times;</button></p>";}
    






    
}
?>




    <section id="content" class="m-t-lg wrapper-md animated fadeInDown">
        <div class="container aside-xl"> <a class="navbar-brand block" href="index.html">Create an account</a>
            <section class="m-b-lg">
<!-- Massage Show -->
            <?php if (isset($msg)) { echo $msg;} ?>

                <form action="<?php $_SERVER["PHP_SELF"];?>" method="POST">
                    <div class="list-group">
                        <div class="list-group-item">
                            <input placeholder="Username" name="username" type="text" class="form-control no-border"> 
                        </div>
                        <div class="list-group-item">
                            <input type="email" placeholder="Email" name="email" type="text" class="form-control no-border"> 
                        </div>
                        <div class="list-group-item">
                            <input type="password" placeholder="Password" name="pass" type="password" class="form-control no-border"> 
                        </div>
                    </div>


                    <div class="checkbox m-b">
                        <label>
                            <input name="check" value="agree" type="checkbox"> Agree the <a href="#">terms and policy</a> </label>
                    </div>


                    <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Sign up</button>


                    <div class="line line-dashed"></div>


                    <p class="text-muted text-center"><small>Already have an account?</small></p> <a href="index.php" class="btn btn-lg btn-default btn-block">Sign in</a> 
                </form>





            </section>
        </div>
    </section>



















    <!-- Bootstrap -->
    <!-- App -->
    <script src="js/app.v1.js"></script>
    <script src="js/app.plugin.js"></script>
</body>
<!-- Mirrored from flatfull.com/themes/scale/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 15:15:07 GMT -->

</html>