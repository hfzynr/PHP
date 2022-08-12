<form method="POST" action="./Edit/EditUser.php">
    <div class="form-group">
        <label for="inpUserID" class="col-form-label">User ID:</label>
        <input readonly type="text" class="form-control" id="inpUserEdit" name="inpUserEdit" value="">
    </div>
    <div class="form-group">
        <label for="inpNip" class="col-form-label">NIK:</label>
        <input readonly class="form-control" id="inpNipEdit" name="inpNipEdit"></input>
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