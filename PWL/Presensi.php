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
    <title>Presensi</title>
    <script>
        $(document).ready(function() {
            setInterval(timestamp, 1000);
        });

        function timestamp() {
            $.ajax({
                url: './jam.php',
                success: function(data) {
                    $('#timestamp').html(data);
                },
            });
        }
    </script>
    <style>
        .card {
            margin: 0 auto; 
            float: none;
            margin-bottom: 10px; 
            width: 45rem;
            height: 10rem;
        }

        #presensi {
            margin: 12px auto;
        }
    </style>
</head>
<?php include './src/Contents/Header.php' ?>
<body>
    <div class="container text-center">
        <div class="card mt-3">
            <h1 id="timestamp"></h1>
            <div id="presensi">
                <a href="#" class="btn btn-primary">Presensi</a>
            </div>
        </div>
    </div>
</body>
<?php include './src/Contents/Footer.php' ?>
</html>