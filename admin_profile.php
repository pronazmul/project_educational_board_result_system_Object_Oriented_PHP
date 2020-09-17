<?php require_once "Classes/Admin/Admin.php"; 
$obj = new Admin;?>

<?php if (!isset($_SESSION['name'])) {header('location:index.php');}?>

<?php require_once "templates/header.php"; ?>


<div class="row">
    <div class="col-md-12">
        <section class="panel b-a">

            <div class="panel-heading b-b">  
                <a href="#" class="font-bold">Admin Profile</a> 
            </div>

            <div class="panel-body"> 
           
            <div class="w-50 card mx-auto">
                
                <div class="card-body">
                    
                    <img src="admin_photo/download.png" height="200" width="170">

                </div>

            </div>



                 


            </div>

            <div class="clearfix panel-footer"> 

            </div>
        </section>
    </div>
</div>


<?php require_once "templates/footer.php"; ?>
