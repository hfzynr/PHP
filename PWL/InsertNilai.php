<?php
    session_start();
    $nip = $_GET['nip'];
    
    if(isset($_POST['k1-1'])) {
        require './src/Koneksi/Koneksi.php';
        $conn = open_connection();

        $komp1 = $_POST['k1-1'] . $_POST['k1-2'] . $_POST['k1-3'] . $_POST['k1-4'] . $_POST['k1-5'];
        $komp2 = $_POST['k2-1'] . $_POST['k2-2'] . $_POST['k2-3'] . $_POST['k2-4'] . $_POST['k2-5'];
        $komp3 = $_POST['k3-1'] . $_POST['k3-2'] . $_POST['k3-3'] . $_POST['k3-4'] . $_POST['k3-5'];
        $komp4 = $_POST['k4-1'] . $_POST['k4-2'] . $_POST['k4-3'] . $_POST['k4-4'] . $_POST['k4-5'];
        $komp5 = $_POST['k5-1'] . $_POST['k5-2'] . $_POST['k5-3'] . $_POST['k5-4'] . $_POST['k5-5'];
    
        $query = "INSERT INTO nilai VALUES ('$nip',DATE_FORMAT(SYSDATE(),'%Y%m%d'),'$komp1','$komp2','$komp3','$komp4','$komp5')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo '<div class="alert alert-success" role="alert"> Insert Nilai Sukses! </div>';
        } else {
            echo '<div class="alert alert-danger" role="alert"> Nilai Sudah ada! / Ada suatu kesalahan </div>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './headscript.php' ?>
    <title>Input Nilai</title>
</head>
<?php include './src/Contents/Header.php' ?>
<body>
    <div class="container mt-3 border border-dark rounded">
        <div class="text-center">
            <?php echo"<h3>Penilaian untuk NIP : $nip</h3>" ?>
        </div>
        <hr>
        <form method="POST">
            <div class="form-group">
                <h5>KOMPETENSI 1 : MENGENAL KARAKTERISTIK PESERTA DIDIK</h5>
                <label for="exampleInputEmail1">1. Guru dapat mengidentifikasi karekteristik belajar setiap peserta didik di kelasnya :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k1-1" id="Radios1" value="0" checked>
                    <label class="form-check-label" for="Radios1">
                        Tidak Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k1-1" id="Radios2" value="1">
                    <label class="form-check-label" for="Radios2">
                        Sebagian Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k1-1" id="Radios3" value="2">
                    <label class="form-check-label" for="Radios3">
                        Sudah Terpenuhi
                    </label>
                </div>
                <br>
                <label for="exampleInputEmail1">2. Guru memastikan bahwa semua peserta didik mendapatkan kesempatan yang sama untuk berpartisipasi aktif dalam kegiatan pembelajaran :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k1-2" id="Radios4" value="0" checked>
                    <label class="form-check-label" for="Radios4">
                        Tidak Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k1-2" id="Radios5" value="1">
                    <label class="form-check-label" for="Radios5">
                        Sebagian Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k1-2" id="Radios6" value="2">
                    <label class="form-check-label" for="Radios6">
                        Sudah Terpenuhi
                    </label>
                </div>
                <br>
                <label for="exampleInputEmail1">3. Guru dapat mengatur kelas untuk memberikan kesempatan belajar yang sama pada semua peserta didik dengan kelainan fisik dan kemampuran belajar yang berbeda :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k1-3" id="Radios7" value="0" checked>
                    <label class="form-check-label" for="Radios7">
                        Tidak Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k1-3" id="Radios8" value="1">
                    <label class="form-check-label" for="Radios8">
                        Sebagian Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k1-3" id="Radios9" value="2">
                    <label class="form-check-label" for="Radios9">
                        Sudah Terpenuhi
                    </label>
                </div>
                <br>
                <label for="exampleInputEmail1">4. Guru mencoba mengetahui penyebab penyimpangan perilaku peserta didik untuk mencegah agar perilaku tersebut tidak merugikan peserta didik lainnya:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k1-4" id="Radios10" value="0" checked>
                    <label class="form-check-label" for="Radios10">
                        Tidak Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k1-4" id="Radios11" value="1">
                    <label class="form-check-label" for="Radios11">
                        Sebagian Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k1-4" id="Radios12" value="2">
                    <label class="form-check-label" for="Radios12">
                        Sudah Terpenuhi
                    </label>
                </div>
                <br>
                <label for="exampleInputEmail1">5. Guru membantu mengembangkan potensi dan mengatasi kekurangan peserta didik :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k1-5" id="Radios13" value="0" checked>
                    <label class="form-check-label" for="Radios13">
                        Tidak Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k1-5" id="Radios14" value="1">
                    <label class="form-check-label" for="Radios14">
                        Sebagian Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k1-5" id="Radios15" value="2">
                    <label class="form-check-label" for="Radios15">
                        Sudah Terpenuhi
                    </label>
                </div>
                <hr>

                <h5>KOMPETENSI 2 : MENGUASAI TEORI BELAJAR DAN PRINSIP-PRINSIP PEMBELAJARAN YANG MENDIDIK</h5>
                <label for="exampleInputEmail1">1. Guru dapat mengidentifikasi karekteristik belajar setiap peserta didik di kelasnya :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k2-1" id="Radios16" value="0" checked>
                    <label class="form-check-label" for="Radios16">
                        Tidak Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k2-1" id="Radios17" value="1">
                    <label class="form-check-label" for="Radios17">
                        Sebagian Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k2-1" id="Radios18" value="2">
                    <label class="form-check-label" for="Radios18">
                        Sudah Terpenuhi
                    </label>
                </div>
                <br>
                <label for="exampleInputEmail1">2. Guru selalu memastikan tingkat pemahaman peserta didik terhadap materi pembelajaran tertentu dan menyesuaikan aktivitas pembelajaran berikutnya berdasarkan tingkat pemahaman tersebut :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k2-2" id="Radios19" value="0" checked>
                    <label class="form-check-label" for="Radios19">
                        Tidak Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k2-2" id="Radios20" value="1">
                    <label class="form-check-label" for="Radios20">
                        Sebagian Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k2-2" id="Radios21" value="2">
                    <label class="form-check-label" for="Radios21">
                        Sudah Terpenuhi
                    </label>
                </div>
                <br>
                <label for="exampleInputEmail1">3. Guru dapat menjelaskan alasan pelaksanaan kegiatan/aktivitas yang dilakukan, baik yang sesuai maupun yang berbeda dengan rencana, terkait keberhasilan pembelajaran :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k2-3" id="Radios22" value="0" checked>
                    <label class="form-check-label" for="Radios22">
                        Tidak Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k2-3" id="Radios23" value="1">
                    <label class="form-check-label" for="Radios23">
                        Sebagian Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k2-3" id="Radios24" value="2">
                    <label class="form-check-label" for="Radios24">
                        Sudah Terpenuhi
                    </label>
                </div>
                <br>
                <label for="exampleInputEmail1">4. Guru menggunakan berbagai teknik untuk memotivasi kemauan belajar peserta didik :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k2-4" id="Radios25" value="0" checked>
                    <label class="form-check-label" for="Radios25">
                        Tidak Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k2-4" id="Radios26" value="1">
                    <label class="form-check-label" for="Radios26">
                        Sebagian Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k2-4" id="Radios27" value="2">
                    <label class="form-check-label" for="Radios27">
                        Sudah Terpenuhi
                    </label>
                </div>
                <br>
                <label for="exampleInputEmail1">5. Guru merencanakan kegiatan pembelajaran yang saling terkait satu sama lain, dengan memperhatikan tujuan pembelajaran maupun proses belajar peserta didik :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k2-5" id="Radios28" value="0" checked>
                    <label class="form-check-label" for="Radios28">
                        Tidak Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k2-5" id="Radios29" value="1">
                    <label class="form-check-label" for="Radios29">
                        Sebagian Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k2-5" id="Radios30" value="2">
                    <label class="form-check-label" for="Radios30">
                        Sudah Terpenuhi
                    </label>
                </div>
                <hr>

                <h5>KOMPETENSI 3 : PENGEMBANGAN KURIKULUM</h5>
                <label for="exampleInputEmail1">1. Guru dapat menyusun silabus yang sesuai dengan kurikulum :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k3-1" id="Radios31" value="0" checked>
                    <label class="form-check-label" for="Radios31">
                        Tidak Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k3-1" id="Radios32" value="1">
                    <label class="form-check-label" for="Radios32">
                        Sebagian Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k3-1" id="Radios33" value="2">
                    <label class="form-check-label" for="Radios33">
                        Sudah Terpenuhi
                    </label>
                </div>
                <br>
                <label for="exampleInputEmail1">2. Guru merancang rencana pembelajaran yang sesuai dengan silabus untuk memahami materi ajar tertentu agar pesrta didik dapat mencapai kompetensi dasar yang ditetapkan :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k3-2" id="Radios34" value="0" checked>
                    <label class="form-check-label" for="Radios34">
                        Tidak Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k3-2" id="Radios35" value="1">
                    <label class="form-check-label" for="Radios35">
                        Sebagian Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k3-2" id="Radios36" value="2">
                    <label class="form-check-label" for="Radios36">
                        Sudah Terpenuhi
                    </label>
                </div>
                <br>
                <label for="exampleInputEmail1">3. Guru mengikuti urutan materi pembelajaran dengan memperhatikan tujuan pembelajaran :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k3-3" id="Radios37" value="0" checked>
                    <label class="form-check-label" for="Radios37">
                        Tidak Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k3-3" id="Radios38" value="1">
                    <label class="form-check-label" for="Radios38">
                        Sebagian Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k3-3" id="Radios39" value="2">
                    <label class="form-check-label" for="Radios39">
                        Sudah Terpenuhi
                    </label>
                </div>
                <br>
                <label for="exampleInputEmail1">4. Guru mengetahui dengan betul materi yang dia ajarkan :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k3-4" id="Radios40" value="0" checked>
                    <label class="form-check-label" for="Radios40">
                        Tidak Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k3-4" id="Radios41" value="1">
                    <label class="form-check-label" for="Radios41">
                        Sebagian Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k3-4" id="Radios42" value="2">
                    <label class="form-check-label" for="Radios42">
                        Sudah Terpenuhi
                    </label>
                </div>
                <br>
                <label for="exampleInputEmail1">5. Guru merencanakan kegiatan pembelajaran yang saling terkait satu sama lain, dengan memperhatikan tujuan pembelajaran maupun proses belajar peserta didik :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k3-5" id="Radios43" value="0" checked>
                    <label class="form-check-label" for="Radios43">
                        Tidak Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k3-5" id="Radios44" value="1">
                    <label class="form-check-label" for="Radios44">
                        Sebagian Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k3-5" id="Radios45" value="2">
                    <label class="form-check-label" for="Radios45">
                        Sudah Terpenuhi
                    </label>
                </div>
                <hr>        
                
                <h5>KOMPETENSI 4 : KEGIATAN PEMBELAJARAN YANG MENDIDIK</h5>
                <label for="exampleInputEmail1">1. Guru melaksanakan aktivitas pembelajaran sesuai dengan rancangan yang telah disusun secara lengkap dan pelaksanaan aktivitas tersebut mengindikasikan bahwa guru mengerti tentang tujuannya :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k4-1" id="Radios46" value="0" checked>
                    <label class="form-check-label" for="Radios46">
                        Tidak Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k4-1" id="Radios47" value="1">
                    <label class="form-check-label" for="Radios47">
                        Sebagian Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k4-1" id="Radios48" value="2">
                    <label class="form-check-label" for="Radios48">
                        Sudah Terpenuhi
                    </label>
                </div>
                <br>
                <label for="exampleInputEmail1">2. Guru melaksanakan aktivitas pembelajaran yang bertujuan untuk membantu proses belajar peserta didik, bukan untuk menguji sehingga membuat peserta didik merasa tertekan :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k4-2" id="Radios49" value="0" checked>
                    <label class="form-check-label" for="Radios49">
                        Tidak Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k4-2" id="Radios50" value="1">
                    <label class="form-check-label" for="Radios50">
                        Sebagian Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k4-2" id="Radios51" value="2">
                    <label class="form-check-label" for="Radios51">
                        Sudah Terpenuhi
                    </label>
                </div>
                <br>
                <label for="exampleInputEmail1">3. Guru mengkomunikasikan informasi baru (misalnya materi tambahan) sesuai dengan usia dan tingkat kemampuan belajar peserta didik :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k4-3" id="Radios52" value="0" checked>
                    <label class="form-check-label" for="Radios52">
                        Tidak Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k4-3" id="Radios53" value="1">
                    <label class="form-check-label" for="Radios53">
                        Sebagian Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k4-3" id="Radios54" value="2">
                    <label class="form-check-label" for="Radios54">
                        Sudah Terpenuhi
                    </label>
                </div>
                <br>
                <label for="exampleInputEmail1">4. Guru melaksanakan kegiatan pembelajaran sesuai isi kurikulum dan mengkaitkannya dengan konteks kehidupan sehari-hari peserta didik :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k4-4" id="Radios55" value="0" checked>
                    <label class="form-check-label" for="Radios55">
                        Tidak Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k4-4" id="Radios56" value="1">
                    <label class="form-check-label" for="Radios56">
                        Sebagian Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k4-4" id="Radios57" value="2">
                    <label class="form-check-label" for="Radios57">
                        Sudah Terpenuhi
                    </label>
                </div>
                <br>
                <label for="exampleInputEmail1">5. Guru mampu menyesuaikan aktivitas pembelajaran yang dirancang dengan kondisi kelas :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k4-5" id="Radios58" value="0" checked>
                    <label class="form-check-label" for="Radios58">
                        Tidak Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k4-5" id="Radios59" value="1">
                    <label class="form-check-label" for="Radios59">
                        Sebagian Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k4-5" id="Radios60" value="2">
                    <label class="form-check-label" for="Radios60">
                        Sudah Terpenuhi
                    </label>
                </div>
                <hr>  
                
                <h5>KOMPETENSI 5 : MEMAHAMI DAN MENGEMBANGKAN POTENSI</h5>
                <label for="exampleInputEmail1">1. Guru menganalisis hasil belajar berdasarkan segala bentuk penilaian terhadap setiap peserta didik untuk mengetahui tingkat kemajuan masing masing :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k5-1" id="Radios61" value="0" checked>
                    <label class="form-check-label" for="Radios61">
                        Tidak Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k5-1" id="Radios62" value="1">
                    <label class="form-check-label" for="Radios62">
                        Sebagian Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k5-1" id="Radios63" value="2">
                    <label class="form-check-label" for="Radios63">
                        Sudah Terpenuhi
                    </label>
                </div>
                <br>
                <label for="exampleInputEmail1">2. Guru merancang dan melaksanakan aktivitas pembelajaran yang mendorong peserta didik untuk belajar sesuai dengan kecakapan dan pola belajar masing-masing :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k5-2" id="Radios64" value="0" checked>
                    <label class="form-check-label" for="Radios64">
                        Tidak Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k5-2" id="Radios65" value="1">
                    <label class="form-check-label" for="Radios65">
                        Sebagian Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k5-2" id="Radios66" value="2">
                    <label class="form-check-label" for="Radios66">
                        Sudah Terpenuhi
                    </label>
                </div>
                <br>
                <label for="exampleInputEmail1">3. Guru merancang dan melaksanakan aktivitas pembelajaran untuk memunculkan daya kreativitas dan kemampuan berfikir kritis peserta didik :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k5-3" id="Radios67" value="0" checked>
                    <label class="form-check-label" for="Radios67">
                        Tidak Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k5-3" id="Radios68" value="1">
                    <label class="form-check-label" for="Radios68">
                        Sebagian Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k5-3" id="Radios69" value="2">
                    <label class="form-check-label" for="Radios69">
                        Sudah Terpenuhi
                    </label>
                </div>
                <br>
                <label for="exampleInputEmail1">4. Guru  secara  aktif  membantu  peserta  didik  dalam  proses pembelajaran  dengan  memberikan  perhatian  kepada  setiap individu :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k5-4" id="Radios70" value="0" checked>
                    <label class="form-check-label" for="Radios70">
                        Tidak Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k5-4" id="Radios71" value="1">
                    <label class="form-check-label" for="Radios71">
                        Sebagian Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k5-4" id="Radios72" value="2">
                    <label class="form-check-label" for="Radios72">
                        Sudah Terpenuhi
                    </label>
                </div>
                <br>
                <label for="exampleInputEmail1">5. Guru dapat mengidentifikasi dengan benar tentang bakat, minat, potensi, dan kesulitan belajar masing-masing peserta didik :</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k5-5" id="Radios73" value="0" checked>
                    <label class="form-check-label" for="Radios73">
                        Tidak Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k5-5" id="Radios74" value="1">
                    <label class="form-check-label" for="Radios74">
                        Sebagian Terpenuhi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="k5-5" id="Radios75" value="2">
                    <label class="form-check-label" for="Radios75">
                        Sudah Terpenuhi
                    </label>
                </div>
                <hr> 
            </div>

            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </form>
    </div>
</body>
<?php include './src/Contents/Footer.php' ?>
</html>