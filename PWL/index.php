<?php
    session_start();
    if(isset($_SESSION['inpNik']) && !empty($_SESSION['inpNik'])) {
        //Masuk Session
    } else {
        header("Location: ./login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './src/Contents/Headscript.php' ?>
    <title>Dashboard Kelompok 2</title>
</head>
<?php include './src/Contents/Header.php' ?>
<body>
    <div class="jumbotron jumbotron-fluid text-center">
    <h1 class="display-4">Hello, world!</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="./" role="button">Learn more</a>
    </p>
    </div>
</body>
<?php include './src/Contents/Footer.php' ?>
</html>