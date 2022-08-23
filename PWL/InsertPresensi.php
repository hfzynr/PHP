<?php
    require './src/Koneksi/Koneksi.php';
    $conn = open_connection();
        //define Variabel Inputan
        $nip  = $_GET['inpNip'];

        $query = "INSERT INTO presensi VALUES ('$nip',DATE_FORMAT(SYSDATE(),'%Y%m%d'),current_timestamp())";
        $result = mysqli_query($conn,$query);
        
        try {
            if($result){
                setcookie('Presensi', 'Presensi Sukses', time() + 1);
                header("Location: ./Presensi.php");
            } else {
                setcookie('Presensi', 'Presensi Gagal', time() + 1);
                header("Location: ./Presensi.php");
            }
        } catch (mysqli_sql_exception $e) {
            setcookie('Presensi', 'Presensi Gagal', time() + 1);
            header("Location: ./Presensi.php");
        }
?>