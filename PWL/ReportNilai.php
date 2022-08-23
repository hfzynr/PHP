<?php
    session_start();
    if(isset($_SESSION['inpUser']) && !empty($_SESSION['inpUser'])) {
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
    <title>Report Presensi</title>
    <script>
        const searchInquiryJQ = (value) => {
            $.get("./SearchReport/SearchReportNilai.php", {nip: value})
             .done(function(data){
                $('#tableUser').html(data)
            });
        }

        const searchInquiryDateJQ = (value1, value2) => {
            $.get("./SearchReport/SearchReportNilai.php", {tanggal1: value, tanggal2: value2})
             .done(function(data){
                $('#tableUser').html(data)
            });
        }
    </script>
</head>
<?php include './src/Contents/Header.php' ?>
<body onload="searchInquiryJQ('')">
    <div class="mr-sm-2 ml-sm-2 row justify form-row">
        <div class="col-3 mt-3 mb-2 mr-3">
            <input id="inpSearch" class="form-control mr-sm-2" type="text" placeholder="Search" onkeyup="searchInquiryJQ(this.value)">
        </div>

            <div class="col-1 mt-3 mb-2">
                <input id="inpDateFrom" class="form-control mr-sm-2" type="text" placeholder="Dari Tanggal">
            </div>

            <div class="col-1 mt-3 mb-2">
                <input id="inpDateTo" class="form-control mr-sm-2" type="text" placeholder="Hingga Tanggal" onkeyup="searchInquiryDateJQ(inpDateFrom.value, this.value)">
            </div>
    </div>
    

    <div class="col-md-12">
        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Tanggal</th>
            <th scope="col">NIP</th>
            <th scope="col">Nama</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Kompetensi 1</th>
            <th scope="col">Kompetensi 2</th>
            <th scope="col">Kompetensi 3</th>
            <th scope="col">Kompetensi 4</th>
            <th scope="col">Kompetensi 5</th>
            </tr>
        </thead>
        <tbody id="tableUser">
        </tbody>
        </table>
    </div>
</body>
<?php include './src/Contents/Footer.php' ?>
</html>