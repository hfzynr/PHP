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
    <?php include './headscript.php' ?>
    <title>Input Nilai</title>
</head>
<?php include './src/Contents/Header.php' ?>
<body>
    
</body>
<?php include './src/Contents/Footer.php' ?>
</html>