<?php
    session_start();
    if(isset($_SESSION['inpNik']) && !empty($_SESSION['inpNik'])) {
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
    <?php include './Headscript.php' ?>
    <title>Dashboard Kelompok 2</title>
    <script>
        const searchInquiry = (value) => {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                // Typical action to be performed when the document is ready:
                document.getElementById("tableUser").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", "SearchMasterUser.php?nama=" + value, true);
            xhttp.send();
        }

        const searchInquiryJQ = (value) => {
            console.log(value);
            $.get("SearchMasterUser.php", {nama: value})
             .done(function(data){
                $('#tableUser').html(data)
            });
        }
    </script>
</head>
<?php include './src/Contents/Header.php' ?>
<body>
    <div class="mr-sm-2 ml-sm-2 row justify-content-between form-row">
        <div class="col-1 mt-3 mb-2">
            <button type="button" class=" btn btn-primary form-control" data-toggle="modal" data-target="#exampleModal">
            Add Data
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Add Master</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="form-group">
                            <label for="inpUserID" class="col-form-label">User ID:</label>
                            <input type="text" class="form-control" id="inpUserID">
                        </div>
                        <div class="form-group">
                            <label for="inpNik" class="col-form-label">NIK:</label>
                            <input class="form-control" id="inpNik"></input>
                        </div>
                        <div class="form-group">
                            <label for="inpNama" class="col-form-label">Nama:</label>
                            <input class="form-control" id="inpNama"></input>
                        </div>
                        <div class="form-group">
                            <label for="inpJabatan" class="col-form-label">Jabatan:</label>
                            <input class="form-control" id="inpJabatan"></input>
                        </div>
                        <div class="form-group">
                            <label for="inpPangkat" class="col-form-label">Pangkat:</label>
                            <input class="form-control" id="inpPangkat"></input>
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Add Data</button>
                    </div>
                    </div>
                </div>
                </div>
        </div>
        <div class="col-3 mt-3 mb-2">
            <input id="inpSearch" class="form-control mr-sm-2" type="text" placeholder="Search" onkeyup="searchInquiryJQ(this.value)">
        </div>
    </div>

    <div class="col-md-12">
        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">User ID</th>
            <th scope="col">NIK</th>
            <th scope="col">Nama User</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Pangkat</th>
            </tr>
        </thead>
        <tbody id="tableUser">
            <?php 
            ?>
        </tbody>
        </table>
    </div>
</body>
<?php include './src/Contents/Footer.php' ?>
</html>