<?php
    require './../src/Koneksi/Koneksi.php';
    $conn = open_connection();

    $keyword = $_GET['nip'];
    $query = "  
            SELECT 
                STR_TO_DATE(c.tanggal_presensi,'%Y%m%d') as tanggal,
                a.nip,
                a.nama,
                b.nama_jabatan,
                c.waktu_presensi,
                case when TIME(waktu_presensi) > '08:00:00' THEN 'TELAT' ELSE 'TIDAK TELAT' END AS KETERANGAN
            FROM 
                user a
            LEFT JOIN master_jabatan b ON a.jabatan = b.kode_jabatan
            LEFT JOIN presensi c ON a.nip = c.nip
            WHERE 
                a.nip LIKE '%$keyword%'
            ";
    $result = mysqli_query($conn, $query);

    while($isi = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>$isi[tanggal]         </td>";
        echo "<td>$isi[nip]             </td>";
        echo "<td>$isi[nama]            </td>";
        echo "<td>$isi[nama_jabatan]    </td>";
        echo "<td>$isi[waktu_presensi]  </td>";
        echo "<td>$isi[KETERANGAN]      </td>";
    }
    $total_baris = mysqli_num_rows($result);
    echo "<tr><td colspan=6> Total data : $total_baris </td></tr>";
    mysqli_close($conn);
?>