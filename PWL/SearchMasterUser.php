<?php
    require './src/Koneksi/Koneksi.php';
    $conn = open_connection();

    $keyword = $_GET['nama'];
    $query = "  SELECT 
                    username,nip,nama,jabatan,pangkat 
                FROM 
                    user 
                WHERE 
                    nama LIKE '%$keyword%' ";
    $result = mysqli_query($conn, $query);

    while($isi = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>$isi[username] </td>";
        echo "<td>$isi[nip]      </td>";
        echo "<td>$isi[nama]     </td>";
        echo "<td>$isi[jabatan]  </td>";
        echo "<td>$isi[pangkat]  </td>";
        echo "</tr>";
    }
    $total_baris = mysqli_num_rows($result);
    echo "<tr><td colspan=6> Total data : $total_baris </td></tr>";
    mysqli_close($conn);
?>