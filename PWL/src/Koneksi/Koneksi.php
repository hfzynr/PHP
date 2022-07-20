<?php
    function open_connection(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "kelompok2";
        $koneksi = mysqli_connect($host, $user, $pass, $db);
        if(mysqli_connect_errno()){
            die("Koneksi Gagal: " . mysqli_connect_error());
        }
        return $koneksi;
    }
?>