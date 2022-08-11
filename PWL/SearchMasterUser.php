<?php
    require './src/Koneksi/Koneksi.php';
    $conn = open_connection();

    $keyword = $_GET['nama'];
    $query = "  SELECT 
                    a.username,a.nip,a.nama,b.nama_jabatan,c.nama_pangkat 
                FROM 
                    user a
                LEFT JOIN master_jabatan b ON a.jabatan = b.kode_jabatan
                LEFT JOIN master_pangkat c ON a.pangkat = c.kode_pangkat
                WHERE 
                    a.nama LIKE '%$keyword%' ";
    $result = mysqli_query($conn, $query);

    while($isi = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>$isi[username]      </td>";
        echo "<td>$isi[nip]           </td>";
        echo "<td>$isi[nama]          </td>";
        echo "<td>$isi[nama_jabatan]  </td>";
        echo "<td>$isi[nama_pangkat]  </td>";
        echo "<td>
                <button class='btn btn-success editBtn'>Edit</button> 
                <a class='btn btn-danger' href='./ActionDeleteUser.php?nip=$isi[nip]'>Remove</a></td>";
        echo "</tr>";
    }
    $total_baris = mysqli_num_rows($result);
    echo "<tr><td colspan=6> Total data : $total_baris </td></tr>";
    mysqli_close($conn);
?>