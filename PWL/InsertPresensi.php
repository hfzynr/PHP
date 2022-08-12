<?php
    require './src/Koneksi/Koneksi.php';
    $conn = open_connection();
        //define Variabel Inputan
        $nip  = $_GET['inpNip'];

        $query = "INSERT INTO presensi VALUES ('$nip',DATE_FORMAT(SYSDATE(),'%Y%m%d'),current_timestamp())";
        $result = mysqli_query($conn,$query);
        
        if($result){
            header("Location: ./Presensi.php");
        } else {
            header("Location: ./Presensi.php");
        }
?>