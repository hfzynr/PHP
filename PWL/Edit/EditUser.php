<?php
    require './../src/Koneksi/Koneksi.php';
    $conn = open_connection();

    if(isset($_POST['inpNikEdit'])){
    //     //define Variabel Inputan
        $userid  = $_POST['inpUserEdit'];
        $nip     = $_POST['inpNikEdit'];
        $nama    = $_POST['inpNamaEdit'];
        $jabatan = $_POST['inpJabatanEdit'];
        $pangkat = $_POST['inpPangkatEdit'];
        $query = "UPDATE 
                    user 
                SET 
                    nama='$nama', 
                    jabatan='$jabatan', 
                    pangkat='$pangkat'
                WHERE
                    nip='$nip'
        ";

        $result = mysqli_query($conn,$query);

        if($result){
            header("Location: ./../MasterUser.php");
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("There is Something Wrong!!")';
            echo '</script>';
        }
    }
    mysqli_close($conn);
?>