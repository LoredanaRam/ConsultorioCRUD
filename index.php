<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultorio F5</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="src/public/style/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
    
<body class="d-flex flex-column justify-content-between align-items-center min-h-100 bg-dark">

    <?php require "src/Views/partials/header.php"; ?>
    <?php require "src/Views/partials/navbar.php"; ?>
    <?php require "src/Views/partials/form.php"; ?>

    <div id="editFormContainer">
    </div>


    <div id="appointment-table-container" class="d-flex flex-column justify-content-center align-items-center">
        <?php 
            require("vendor/autoload.php");
            require("src/index.php");
        ?>
    </div>

    <?php require "src/Views/partials/scripts.php"; ?>
    <?php require "src/Views/partials/footer.php"; ?>

</body>
</html>
