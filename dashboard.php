<?php require_once "Classes/Admin/Admin.php"; 
$obj = new Admin;?>

<?php if (!isset($_SESSION['name'])) {header('location:index.php');}?>

<?php require_once "templates/header.php"; ?>


<div class="row">
    <div class="col-md-12">
        <section class="panel b-a">

            <div class="panel-heading b-b">  
                <a href="#" class="font-bold">Section Title</a> 
            </div>

            <div class="panel-body"> 
            <!-- MAIN CODE GOES HERE  -->



                 


            </div>

            <div class="clearfix panel-footer"> 

            </div>
        </section>
    </div>
</div>


<?php require_once "templates/footer.php"; ?>
