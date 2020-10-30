
<?php require "controller/dbconection.php";
    $database = new dbConection();
    
?>

<?php require "views/partials/head.php";?>
<?php require "views/partials/header.php";?>
<?php require "views/partials/navbar.php";?>

<?php require "views/partials/appointments-table.php";?>

<span>FORMULARIO DE SOLICITUD DE CITA</span>

<?php require "views/partials/scripts.php";?>

<?php require "views/partials/form.php";?>

<section>
    <?php 
        $sql = "SELECT * FROM citas";
        $coders = $database->mysql->query($sql);
    ?>
    <ul>
        <?php foreach($coders as $coder){?>
            <li> <?= $coder["id"] ?> - <?= $coder["nombre"] ?> </li>
        <?php } ?>
    </ul>

</section>

<?php require "views/partials/scripts.php";?>
<?php require "views/partials/footer.php";?>