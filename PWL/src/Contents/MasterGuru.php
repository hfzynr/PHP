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
    <?php include './/Headscript.php' ?>
    <title>Dashboard Kelompok 2</title>
</head>
<?php include './Header.php' ?>
<body>
    <div class="container-fluid text-center centeringform">
        <div class="row justify-content-center">
            <form class="col-3 pb-3 border border-secondary rounded" method="POST">
                <h1>Register</h1>
                <p>
                <label class="sr-only" for="">NIK</label>
                <input name="inpNik" class="form-control" type="text" placeholder="NIK" required autofocus>
                </p>
                <p>
                <label class="sr-only" for="">Password</label>
                <input name="inpPassword" class="form-control" type="password" placeholder="Password" required>
                </p>
                <button class="btn btn-primary btn-block" type="sumbit">Sign In</button>
            </form>
        </div>
    </div>
</body>
<?php include './Footer.php' ?>
</html>