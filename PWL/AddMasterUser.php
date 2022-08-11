<?php
    require './src/Koneksi/Koneksi.php';
    $conn = open_connection();

    include './function.php';

    checkLogin();
    $list_jabatan = getDataJabatan();
    $list_pangkat = getDataPangkat();

    if(isset($_POST['inpUserID'])){
        //define Variabel Inputan
        $userid = $_POST['inpUserID'];
        $nip = $_POST['inpNip'];
        $nama = $_POST['inpNama'];
        $jabatan = $_POST['inpJabatan'];
        $pangkat = $_POST['inpPangkat'];

        $query = "INSERT INTO user VALUES ('$userid',MD5('1'),'$nip','$nama','$jabatan','$pangkat')";
        $result = mysqli_query($conn,$query);
        if($result){
            header('./MasterUser.php');
        }
    }
?>
<form method="POST">
    <div class="form-group">
        <label for="inpUserID" class="col-form-label">User ID:</label>
        <input type="text" class="form-control" id="inpUserID" name="inpUserID">
    </div>
    <div class="form-group">
        <label for="inpNip" class="col-form-label">NIP:</label>
        <input class="form-control" id="inpNip" name="inpNip"></input>
    </div>
    <div class="form-group">
        <label for="inpNama" class="col-form-label">Nama:</label>
        <input class="form-control" id="inpNama" name="inpNama"></input>
    </div>
    <div class="form-group">
        <label for="inpJabatan" class="col-form-label">Jabatan:</label>
        <select class="form-control" id="inpJabatan" name="inpJabatan">
            <option value="">-- Pilih Jabatan --</option>
            <?php
            if(count($list_jabatan) > 0){
                foreach($list_jabatan as $kode_jabatan => $nama_jabatan){
                    echo "<option value='$kode_jabatan'> $nama_jabatan </option>";
                };
            };
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="inpPangkat" class="col-form-label">pangkat:</label>
        <select class="form-control" id="inpPangkat" name="inpPangkat">
            <option value="">-- Pilih pangkat --</option>
            <?php
            if(count($list_pangkat) > 0){
                foreach($list_pangkat as $kode_pangkat => $nama_pangkat){
                    echo "<option value='$kode_pangkat'> $nama_pangkat </option>";
                };
            };
            ?>
        </select>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Add Data</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
</form>