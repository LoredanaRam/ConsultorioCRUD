<?php 
    
    namespace App;

    use App\Controller\AppointmentController;
    require('src/Controller/controller.php');

    $controller = new AppointmentController();

?>

<?php require "views/partials/head.php";?>
<?php require "views/partials/header.php";?>
<?php require "views/partials/navbar.php";?>

<?php require "views/partials/appointments-table.php";?>

<?php require "views/partials/scripts.php";?>

<?php require "views/partials/form.php";?>

<section>
    
    
</section>

<?php require "views/partials/scripts.php";?>
<?php require "views/partials/footer.php";?>