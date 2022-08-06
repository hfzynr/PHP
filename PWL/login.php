<?php
    session_start();

    if(isset($_POST['inpNik']) && isset($_POST['inpPassword'])){
        
        require './src/Koneksi/Koneksi.php';

        //buka koneksi
        $conn = open_connection();

        //baca inputan
        $username = $_POST['inpNik'];
        $password = $_POST['inpPassword'];

        //bikin query SQL
        $query = "SELECT * FROM user WHERE username = '$username' AND password = MD5('$password')";

        //eksekusi query
        $result = mysqli_query($conn, $query);

        //cek hasil, jika ada data, maka simpan session dan redirect ke index
        if($isi = mysqli_fetch_assoc($result)){
            //simpan session
            $_SESSION["inpNik"] = $username;
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
        include '.\src\Contents\headscript.php';
    ?>
    <title>Login Page</title>
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
</html>