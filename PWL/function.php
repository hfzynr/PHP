<?php

function get_data_jabatan(){
    $conn = open_connection();
    $query = "SELECT kode_jabatan, nama_jabatan FROM master_jabatan";
    $result = mysqli_query($conn, $query);

    $list = array();
    while($isi = mysqli_fetch_array($result)){
        $list[ $isi['kode_jabatan']] = $isi['nama_jabatan'];
    }
    return $list;
}

function get_data_pangkat(){
    $conn = open_connection();
    $query = "SELECT kode_pangkat, nama_pangkat FROM master_pangkat";
    $result = mysqli_query($conn, $query);

    $list = array();
    while($isi = mysqli_fetch_array($result)){
        $list[ $isi['kode_pangkat']] = $isi['nama_pangkat'];
    }
    return $list;
}

?>