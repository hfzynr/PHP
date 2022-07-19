<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="./../assets/css/login.css" />
    <?php
        include '.\css.php';
    ?>
    <title>Login Page</title>
    <?php
        include 'Header.php';
    ?>
</head>
<body>
    <div class="container-fluid text-center centeringform">
        <div class="row justify-content-center">
            <form class="col-3 pb-3 border border-secondary rounded" method="POST">
                <h1>SIGN IN</h1>
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
    <?php
        include 'Footer.php';
    ?>
</html>