
<?php require "controller/dbconection.php";
    $db = new dbConection();
    
?>

<?php require "views/partials/head.php";?>
<?php require "views/partials/header.php";?>
<?php require "views/partials/navbar.php";?>

<section>
    <span>Hola mundo</span>
    <?php 
        $sql = "SELECT * FROM test";
        $coderResult = $db->mysql->query($sql);
        echo $coderResult;
        
    ?>
    <ul>
    <?php foreach($sql as $coder){?>
        <li><?= $coder["id"]?> - <?= $coder["nombre"]?> </li>
    <?php } ?>
    </ul>

</section>

<?php require "views/partials/scripts.php";?>
<?php require "views/partials/footer.php";?>