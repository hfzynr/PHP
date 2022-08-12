<?php
    require './../src/Koneksi/Koneksi.php';
    $conn = open_connection();

    $keyword = $_GET['nip'];
    $query = "  SELECT 
                    STR_TO_DATE(tanggal,'%Y%m%d') as tanggal,
                    nip,
                    nama,
                    nama_jabatan,
                    case when kompetensi1 = 0 then 'Tidak terpenuhi'
                        when kompetensi1 > 0 then 'Sebagian terpenuhi'
                        when kompetensi1 = 2 then 'Sudah terpenuhi'
                    end as kompetensi1,
                    case when kompetensi2 = 0 then 'Tidak terpenuhi'
                        when kompetensi2 > 0 then 'Sebagian terpenuhi'
                        when kompetensi2 = 2 then 'Sudah terpenuhi'
                    end as kompetensi2,
                    case when kompetensi3 = 0 then 'Tidak terpenuhi'
                        when kompetensi3 > 0 then 'Sebagian terpenuhi'
                        when kompetensi3 = 2 then 'Sudah terpenuhi'
                    end as kompetensi3,
                    case when kompetensi4 = 0 then 'Tidak terpenuhi'
                        when kompetensi4 > 0 then 'Sebagian terpenuhi'
                        when kompetensi4 = 2 then 'Sudah terpenuhi'
                    end as kompetensi4,
                    case when kompetensi5 = 0 then 'Tidak terpenuhi'
                        when kompetensi5 > 0 then 'Sebagian terpenuhi'
                        when kompetensi5 = 2 then 'Sudah terpenuhi'
                    end as kompetensi5
                FROM
                    (
                    SELECT 
                        c.tanggal,
                        a.nip,
                        a.nama,
                        b.nama_jabatan,
                        c.kompetensi1/5 as kompetensi1,
                        c.kompetensi2/5 as kompetensi2,
                        c.kompetensi3/5 as kompetensi3,
                        c.kompetensi4/5 as kompetensi4,
                        c.kompetensi5/5 as kompetensi5
                    FROM 
                        user a
                    LEFT JOIN master_jabatan b ON a.jabatan = b.kode_jabatan
                    LEFT JOIN nilai c ON a.nip = c.nip
                    WHERE 
                        a.nip LIKE '%$keyword%' 
                    and b.kode_jabatan in ('001','002')
                    ) A";
    $result = mysqli_query($conn, $query);

    while($isi = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>$isi[tanggal]         </td>";
        echo "<td>$isi[nip]             </td>";
        echo "<td>$isi[nama]            </td>";
        echo "<td>$isi[nama_jabatan]    </td>";
        echo "<td>$isi[kompetensi1]     </td>";
        echo "<td>$isi[kompetensi2]     </td>";
        echo "<td>$isi[kompetensi3]     </td>";
        echo "<td>$isi[kompetensi4]     </td>";
        echo "<td>$isi[kompetensi5]     </td>";
    }
    $total_baris = mysqli_num_rows($result);
    echo "<tr><td colspan=6> Total data : $total_baris </td></tr>";
    mysqli_close($conn);
?>