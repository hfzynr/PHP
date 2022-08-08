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
    <h1 class="display-4">Selamat datang di Aplikasi Sekolah!</h1>
    <p class="lead">Ini adalah Aplikasi Prototype untuk input berbagai kebutuhan sekolah.</p>
    <hr class="my-4">
    <p>Aplikasi ini di support oleh PHP dan MySQL.</p>
    <!-- <p class="lead">
        <a class="btn btn-primary btn-lg" href="./" role="button">Learn more</a>
    </p> -->
    </div>
</body>
<?php include './src/Contents/Footer.php' ?>
</html>