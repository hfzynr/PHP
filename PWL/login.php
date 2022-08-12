<?php
    session_start();

    if(isset($_POST['inpUser']) && isset($_POST['inpPassword'])){
        
        require './src/Koneksi/Koneksi.php';

        //buka koneksi
        $conn = open_connection();

        //baca inputan
        $username = $_POST['inpUser'];
        $password = $_POST['inpPassword'];

        //bikin query SQL
        $query = "SELECT * FROM user WHERE username = '$username' AND password = MD5('$password')";

        //eksekusi query
        $result = mysqli_query($conn, $query);
        // $isi = mysqli_fetch_array($result);

        //cek hasil, jika ada data, maka simpan session dan redirect ke index
        if($isi = mysqli_fetch_assoc($result)){
            //simpan session
            $_SESSION["inpUser"] = $username;
            $_SESSION["inpNip"]  = $isi[nip];
            //redirect
            header("Location: ./");
        } else {
            echo '<div class="alert alert-danger" role="alert"> Username atau Password Salah! </div>';
        }   
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
        include '.\headscript.php';
    ?>
    <style>
    body, html {
        height: 100%;
        margin: 0;
    }

    .bg {
    background-image : url('./assets/image/login.jpeg');
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }

    .centeringform {
    top: 35%;
    position: absolute;
    }

    .form-bg {
        background : #fff;
    }
    </style>
    <title>Login Page</title>
</head>
<body>
    <div class="bg">
        <div class="container-fluid text-center centeringform">
            <div class="row justify-content-center">
                <form class="col-3 pb-3 border border-secondary rounded form-bg" method="POST">
                    <h1>SIGN IN</h1>
                    <p>
                    <label class="sr-only" for="">NIK</label>
                    <input name="inpUser" class="form-control" type="text" placeholder="NIK" required autofocus>
                    </p>
                    <p>
                    <label class="sr-only" for="">Password</label>
                    <input name="inpPassword" class="form-control" type="password" placeholder="Password" required>
                    </p>
                    <button class="btn btn-primary btn-block" type="submit">Sign In</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>