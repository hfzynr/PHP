<?php
    if(isset($_POST['inpUserID'])){
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
            echo '<script type="text/javascript">';
            echo 'alert("Data Updated!!")';
            echo '</script>';
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("There is Something Wrong!!")';
            echo '</script>';
        }
    }
?>
<form method="POST">
    <div class="form-group">
        <label for="inpUserID" class="col-form-label">User ID:</label>
        <input readonly type="text" class="form-control" id="inpUserEdit" name="inpUserEdit" value="">
    </div>
    <div class="form-group">
        <label for="inpNik" class="col-form-label">NIK:</label>
        <input readonly class="form-control" id="inpNikEdit" name="inpNikEdit"></input>
    </div>
    <div class="form-group">
        <label for="inpNama" class="col-form-label">Nama:</label>
        <input class="form-control" id="inpNamaEdit" name="inpNamaEdit"></input>
    </div>
    <div class="form-group">
        <label for="inpJabatan" class="col-form-label">Jabatan:</label>
        <select class="form-control" id="inpJabatanEdit" name="inpJabatanEdit">
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
        <select class="form-control" id="inpPangkatEdit" name="inpPangkatEdit">
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
        <button type="submit" class="btn btn-primary">Save Data</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
</form>