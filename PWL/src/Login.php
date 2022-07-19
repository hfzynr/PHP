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
            <form class="col-3">
                <h1>Sign In</h1>
                <p>
                <label class="sr-only" for="">Email Address</label>
                <input class="form-control" type="email" placeholder="Email Address" required autofocus>
                </p>
                <p>
                <label class="sr-only" for="">Password</label>
                <input class="form-control" type="email" placeholder="Password" required>
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