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
    <?php include './headscript.php' ?>
    <title>Data Master User</title>
    <script>
        $(document).on('click','.editBtn',function(){
            $('#editModal').modal('show');

            $tr = $(this).closest('tr');

            var id=$(this).val();
            console.log(id)

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            // console.log(data);
            // console.log(data[0])

            inpUserEdit   .value = data[0].trim();
            inpNikEdit    .value = data[1].trim();
            inpNamaEdit   .value = data[2].trim();
        })

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
            <button type="button" class="btn btn-outline-dark form-control" data-toggle="modal" data-target="#addModal">
            Add Data
            </button>
            
            <!-- Add Medal -->
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Form Add Master User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php
                        include '.\AddMasterUser.php'
                        ?>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Update Medal -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateModalLabel">Form Edit Master User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php
                        include '.\Edit\FormEditMasterUser.php'
                        ?>
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
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody id="tableUser">
        </tbody>
        </table>
    </div>
</body>
<?php include './src/Contents/Footer.php' ?>
</html>