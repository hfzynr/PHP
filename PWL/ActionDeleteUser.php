<?php
    require './src/Koneksi/Koneksi.php';
    require './function.php';

    checkLogin();

    $nip = $_GET['nip'];
    $conn = open_connection();
    $query = "  DELETE 
                FROM 
                    user 
                WHERE 
                    nip = '$nip' ";
    $hasil = mysqli_query($conn, $query);

    if($hasil){
        header("Location: ./MasterUser.php");
    } else {
        echo "gagal menghapus data : " . mysqli_error($conn);
    }
?>