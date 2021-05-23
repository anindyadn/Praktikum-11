<!DOCTYPE html>
<html>
    <head>
        <title> Form Pendaftaran Siswa </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
            rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <style>
            .warning{color: red;}
            body{ line-height: 2.5;}
        </style>
    </head>
    <body>
        <?php
        // Membuat variable jika error
            //Registrasi Peserta Didik
        $error_jp     = ""; // 1
        $error_tms    = ""; // 2
        $error_nis    = ""; // 3
        $error_npu    = ""; // 4
        $error_paud   = ""; // 5
        $error_tk     = ""; // 6
        $error_skhun  = ""; // 7
        $error_ijazah = ""; // 8
        $error_hobi   = ""; // 9
        $error_cita   = ""; // 10

            //Data Probadi
        $error_nama     = ""; // 11
        $error_jk       = ""; // 12
        $error_nisn     = ""; // 13
        $error_nik      = ""; // 14
        $error_tptlahir = ""; // 15
        $error_tgllahir = ""; // 16
        $error_agama    = ""; // 17
        $error_khusus   = ""; // 18
        $error_alamat   = ""; // 19
        $error_rt       = ""; // 20
        $error_rw       = ""; // 21
        $error_dusun    = ""; // 22
        $error_klurah   = ""; // 23
        $error_kcamat   = ""; // 24
        $error_kdpos    = ""; // 25
        $error_ttinggal = ""; // 26
        $error_transp   = ""; // 27
        $error_hp       = ""; // 28
        $error_telp     = ""; // 29
        $error_email    = ""; // 30
        $error_pkps     = ""; // 31
        $error_nkps     = ""; // 32
        $error_kwn      = ""; // 33
        $error_negara   = "";

        // Membuat variable data
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date("Y-m-d");
            //Registrasi Peserta Didik
        $jp     = ""; // 1
        $tms    = ""; // 2
        $nis    = ""; // 3
        $npu    = ""; // 4
        $paud   = ""; // 5
        $tk     = ""; // 6
        $skhun  = ""; // 7
        $ijazah = ""; // 8
        $hobi   = ""; // 9
        $cita   = ""; // 10

            //Data Probadi
        $nama     = ""; // 11
        $jk       = ""; // 12
        $nisn     = ""; // 13
        $nik      = ""; // 14
        $tptlahir = ""; // 15
        $tgllahir = ""; // 16
        $agama    = ""; // 17
        $khusus   = ""; // 18
        $alamat   = ""; // 19
        $rt       = ""; // 20
        $rw       = ""; // 21
        $dusun    = ""; // 22
        $klurah   = ""; // 23
        $kcamat   = ""; // 24
        $kdpos    = ""; // 25
        $ttinggal = ""; // 26
        $transp   = ""; // 27
        $hp       = ""; // 28
        $telp     = ""; // 29
        $email    = ""; // 30
        $pkps     = ""; // 31
        $nkps     = ""; // 32
        $kwn      = ""; // 33
        $negara   = "";

        //method post ketika dijalankan oleh sistem
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Registrasi Peserta Didik
            //jenis pendaftaran
            if (empty($_POST["jp"])) {
                $error_jp = "Jenis Pendaftaran tidak boleh kosong";
            }
            else {
                $jp = cek_input($_POST["jp"]);
            }
            //tanggal masuk sekolah
            if (empty($_POST["tms"])) {
                $error_tms="Tanggal masuk sekolah wajib diisi";
            }
            else {
                $tms = cek_input($_POST["tms"]);
                if (!preg_match("/^[0-9+\/]/", $tms)) {
                    $error_tms="Format tanggal tidak valid";
                }
            }
            //nis
            if (empty($_POST["nis"])) {
                $error_nis="NIS wajib diisi";
            }
            else {
                $nis = cek_input($_POST["nis"]);
                if (!is_numeric($nis) || strlen($_POST["nis"])!=10) {
                    $error_nis = "NIS hanya boleh angka dan berjumlah 10 digit";
                }
            }
            //nomor peserta ujian
            if (empty($_POST["npu"])) {
                $error_npu="Nomor Peserta Ujian wajib diisi";
            }
            else {
                $npu = cek_input($_POST["npu"]);
                if (!is_numeric($npu) || strlen($_POST["npu"])!=20) {
                    $error_npu = "Nomor Peserta Ujian hanya boleh angka dan berjumlah 20 digit";
                }
            }
            //paud
            if (empty($_POST["paud"])) {
                $error_paud = "Pernah paud tidak boleh kosong";
            }
            else {
                $paud = cek_input($_POST["paud"]);
            }
            //tk
            if (empty($_POST["tk"])) {
                $error_tk = "Pernah TK tidak boleh kosong";
            }
            else {
                $tk = cek_input($_POST["tk"]);
            }
            //skhun
            if (empty($_POST["skhun"])) {
                $error_skhun="No. seri SKHUN wajib diisi";
            }
            else {
                $skhun = cek_input($_POST["skhun"]);
                if (!is_numeric($skhun) || strlen($_POST["skhun"])!=16) {
                    $error_skhun = "No. seri SKHUN hanya boleh angka dan berjumlah 16 digit";
                }
            }
            //ijazah
            if (empty($_POST["ijazah"])) {
                $error_ijazah="No. seri Ijazah wajib diisi";
            }
            else {
                $ijazah = cek_input($_POST["ijazah"]);
                if (!is_numeric($ijazah) || strlen($_POST["ijazah"])!=16) {
                    $error_ijazah = "No. seri Ijazah hanya boleh angka dan berjumlah 16 digit";
                }
            }
            //hobi
            if (empty($_POST["hobi"])) {
                $error_hobi="Hobi tidak boleh kosong";
            }
            else {
                $hobi = cek_input($_POST["hobi"]);
            }
            //cita-cita
            if (empty($_POST["cita"])) {
                $error_cita="Cita - cita tidak boleh kosong";
            }
            else {
                $cita = cek_input($_POST["cita"]);
            }

        //Data Pribadi
            //nama
            if (empty($_POST["nama"])) {
                $error_nama = "Nama tidak boleh Kosong";
            }
            else {
                $nama = cek_input($_POST["nama"]);
                if (!preg_match("/^[a-zA-Z]*$/",$nama)) {
                    $error_nama = "Inputan hanya boleh huruf dan spasi";
                }
            }
            //jenis kelamin
            if (empty($_POST["jk"])) {
                $error_jk = "Jenis Kelamin tidak boleh kosong";
            }
            else {
                $jk = cek_input($_POST["jk"]);
            }
            //nisn
            if (empty($_POST["nisn"])) {
                $error_nisn="NISN wajib diisi";
            }
            else {
                $nisn = cek_input($_POST["nisn"]);
                if (!is_numeric($nisn) || strlen($_POST["nisn"])!=10) {
                    $error_nisn = "NISN hanya boleh angka dan berjumlah 10 digit";
                }
            }
            //nik
            if (empty($_POST["nik"])) {
                $error_nik="NIK tidak boleh kosong";
            }
            else {
                $nik = cek_input($_POST["nik"]);
                if (!is_numeric($nik) || strlen($_POST["nik"])!=16) {
                    $error_nik = "NIK hanya boleh angka dan berjumlah 16 digit";
                }
            }
            //tempat lahir
            if (empty($_POST["tptlahir"])) {
                $error_tptlahir="Tempat lahir tidak boleh kosong";
            }
            else {
                $tptlahir = cek_input($_POST["tptlahir"]);
                if (!preg_match("/^[a-zA-Z]*$/", $tptlahir)) {
                    $error_tptlahir="Tempat lahir hanya boleh huruf dan spasi";
                }
            }
            //tanggal lahir
            if (empty($_POST["tgllahir"])) {
                $error_tgllahir="Tanggal lahir wajib diisi";
            }
            else {
                $tgllahir = cek_input($_POST["tgllahir"]);
                if (!preg_match("/^[0-9+\/]/", $tgllahir)) {
                    $error_tgllahir="Format tanggal tidak valid";
                }
            }
            //agama
            if (empty($_POST["agama"])) {
                $error_agama="Agama tidak boleh kosong";
            }
            else {
                $agama = cek_input($_POST["agama"]);
            }
            //berkebutuhan khusus
            if (empty($_POST["khusus"])) {
                $error_khusus="Berkebutuhan khusus tidak boleh kosong";
            }
            else {
                $khusus = cek_input($_POST["khusus"]);
            }
            //alamat jalan
            if (empty($_POST["alamat"])) {
                $error_alamat="Alamat tidak boleh kosong";
            }
            else {
                $alamat = cek_input($_POST["alamat"]);
            }
            //rt
            if (empty($_POST["rt"])) {
                $error_rt="RT tidak boleh kosong";
            }
            else {
                $rt = cek_input($_POST["rt"]);
                if(!is_numeric($rt)){
                    $error_rt = "RT hanya boleh angka";
                }
            }
            //rw
            if (empty($_POST["rw"])) {
                $error_rw="RW tidak boleh kosong";
            }
            else {
                $rw = cek_input($_POST["rw"]);
                if(!is_numeric($rw)){
                    $error_rw = "RW hanya boleh angka";
                }
            }
            //dusun
            if (empty($_POST["dusun"])) {
                $error_dusun="Nama Dusun tidak boleh kosong";
            }
            else {
                $dusun = cek_input($_POST["dusun"]);
            }
            //kelurahan
            if (empty($_POST["klurah"])) {
                $error_klurah="Nama Kelurahan tidak boleh kosong";
            }
            else {
                $klurah = cek_input($_POST["klurah"]);
            }
            //kecamatan
            if (empty($_POST["kcamat"])) {
                $error_kcamat="Nama Kecamatan tidak boleh kosong";
            }
            else {
                $kcamat = cek_input($_POST["kcamat"]);
            }
            //kode pos
            if (empty($_POST["kdpos"])) {
                $error_kdpos="Kode Pos wajib diisi";
            }
            else {
                $kdpos = cek_input($_POST["kdpos"]);
                if (!is_numeric($kdpos) || strlen($_POST["kdpos"])!=5) {
                    $error_kdpos = "Kode Pos hanya boleh angka dan berjumlah 5 digit";
                }
            }
            //tempat tinggal
            if (empty($_POST["ttinggal"])) {
                $error_ttinggal="Tempat Tinggal tidak boleh kosong";
            }
            else {
                $ttinggal = cek_input($_POST["ttinggal"]);
            }
            //transportasi
            if (empty($_POST["transp"])) {
                $error_transp="Moda Transportasi tidak boleh kosong";
            }
            else {
                $transp = cek_input($_POST["transp"]);
            }
            //no hp
            if (empty($_POST["hp"])) {
                $error_hp = "Nomor HP tidak boleh kosong";
            }
            else {
                $hp = cek_input($_POST["hp"]);
                if (!is_numeric($hp)) {
                    $error_hp = 'Nomor HP hanya boleh angka';
                }
            }
            //no telepon
            if (empty($_POST["telp"])) {
                $error_telp = "Nomor Telepon tidak boleh kosong";
            }
            else {
                $telp = cek_input($_POST["telp"]);
                if (!is_numeric($telp)) {
                    $error_telp = 'Nomor Telepon hanya boleh angka';
                }
            }
            //email
            if (empty($_POST["email"])) {
                $error_email = "Email tidak boleh kosong";
            }
            else {
                $email = cek_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $error_email = "Format email invalid";
                }
            }
            //penerima kps
            if (empty($_POST["pkps"])) {
                $error_pkps = "Penerima KPS/PKH/KIP tidak boleh kosong";
            }
            else {
                $pkps = cek_input($_POST["pkps"]);
            }
            //no kps
            if (($_POST["pkps"])=="Y"&&empty($_POST["nkps"])) {
                $error_nkps="Pemilik KPS/PKH/KIP wajib mengisi";
            }
            elseif (($_POST["pkps"])=="T") {
                $nkps="-";
            }
            else {
                $nkps = cek_input($_POST["nkps"]);
                if (!preg_match("/^[a-z0-9]*$/", $nkps)) {
                    $error_nkps="Format no KPS invalid";
                }
            }
            //kewarganegaraan
            if (empty($_POST["kwn"])) {
                $error_kwn="Kewarganegaraan tidak boleh kosong";
            }
            else {
                $kwn = cek_input($_POST["kwn"]);
            }

            if (($_POST["kwn"])=="A"&&empty($_POST["negara"])) {
                $error_negara="Jika WNA maka negara wajib diisi";
            }
            elseif (($_POST["kwn"])=="I") {
                $negara="-";
            }
            else {
                $negara = cek_input($_POST["negara"]);
                if (!preg_match("/^[a-zA-Z]*$/", $negara)) {
                    $error_negara="negara hanya terdiri dari huruf dan spasi";
                }
            }

            //menyimpan data dalam database
            include 'koneksi.php';
            if (!empty($jp) && !empty($tms) && !empty($nis) && !empty($npu) && !empty($paud) && 
                !empty($tk) && !empty($skhun) && !empty($ijazah) && !empty($hobi) && !empty($cita) && 
                !empty($nama) && !empty($jk) && !empty($nisn) && !empty($nik) && !empty($tptlahir) && 
                !empty($tgllahir) && !empty($agama) && !empty($khusus) && !empty($alamat) && !empty($rt) && 
                !empty($rw) && !empty($dusun) && !empty($klurah) && !empty($kcamat) && !empty($kdpos) && 
                !empty($ttinggal) && !empty($transp) && !empty($hp) && !empty($telp) && !empty($email) && 
                !empty($pkps) && !empty($kwn)) {
                
                //query sql untuk menimpan data ke database
                $sql = "INSERT INTO pendaftar_pdidik set jenis_pendaftaran='$jp', tanggal_masuk='$tms', nis='$nis', no_peserta='$npu', paud='$paud',
                    tk='$tk', no_skhun='$skhun', no_ijazah='$ijazah', hobi='$hobi', cita_cita='$cita',
                    nama='$nama', jenis_kelamin='$jk', nisn='$nisn', nik='$nik', tempat_lahir='$tptlahir',
                    tanggal_lahir='$tgllahir', agama='$agama', berkebutuhan_khusus='$khusus', alamat='$alamat', rt='$rt', 
                    rw='$rw', nama_dusun='$dusun', kelurahan='$klurah', kecamatan='$kcamat', kodepos='$kdpos', 
                    tempat_tinggal='$ttinggal', transportasi='$transp', hp='$hp', telp='$telp', email='$email', 
                    penerima_kps='$pkps', no_kps='$nkps', kewarganegaraan='$kwn', negara='$negara' ";

                if (mysqli_query($koneksi, $sql)) {
                    echo "<script> alert('Data Berhasil Tersimpan') </script>";
                    ?><meta http-equiv="refresh" content="5"; url=formpendaftaran.php><?php
                    // jika berhasil akan muncul pemberitahuan "Data Berhasil Tersimpan"
                }
                else {
                    echo "<script> alert('Data Gagal disimpan') </script>";
                    // jika gagal akan muncul pemberitahuan "Data Gagal disimpan"
                }
        }
        }

        //membuat fungsi variable cek input data
        function cek_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" align="center">
                        <h2> Formulir Pendaftaran Peserta Didik </h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="form-group row">
                                <label for="tgl" class="col-sm-2 col-form-label"> Tanggal </label>
                                <div class="col-sm-2">
                                    <input type="text" name="tgl" class="form control" id="tgl" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("d/m/Y");?>" readonly="true">
                                    <span></span>
                                </div>
                            </div>

                            <p>
                                <h3> Registrasi Peserta Didik </h3>
                            </p>

                            <div class="form-group row">
                                <label for="jp" class="col-sm-2 col-form-label"> Jenis Pendaftaran </label>
                                <div class="col-sm-10">
                                    <input type="radio" name="jp" <?php if (isset($jp) && $jp=="S") ;?> value="Siswa Baru"> Siswa Baru
					                <input type="radio" name="jp" <?php if (isset($jp) && $jp=="P") ;?> value="Pindahan"> Pindahan
                                    <span class="warning"><?php echo $error_jp; ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tms" class="col-sm-2 col-form-label"> Tanggal Masuk Sekolah </label>
                                <div class="col-sm-10">
                                    <input type="text" name="tms" class="form-control <?php echo ($error_tms !="" ? "is-invalid" : ""); ?>"
                                    id="tms" placeholder="tanggal masuk sekolah" value="<?php echo $tms; ?>">
                                    <span class="warning"><?php echo $error_tms; ?></span>
                                </div>
                            </div>

                            <div class="form-group-row">
                                <label for="nis" class="col-sm-2 col-form-label"> NIS </label>
                                <div class="col-sm-10">
                                    <input type="text" name="nis" class="form-control <?php echo ($error_nis !="" ? "is-invalid" : ""); ?>" 
                                    id="nis" placeholder="nis" value="<?php echo $nis; ?>"> *10 digit
                                    <span class="warning"><?php echo $error_nis; ?></span>
                                </div>
                            </div>

                            <div class="form-group-row">
                                <label for="npu" class="col-sm-2 col-form-label"> Nomor Peserta Ujian </label>
                                <div class="col-sm-10">
                                    <input type="text" name="npu" class="form-control <?php echo ($error_npu !="" ? "is-invalid" : ""); ?>" 
                                    id="npu" placeholder="nomor peserta ujian" value="<?php echo $npu; ?>"> *20 digit
                                    <span class="warning"><?php echo $error_npu; ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="paud" class="col-sm-2 col-form-label"> Apakah Pernah Paud </label>
                                <div class="col-sm-10">
                                    <input type="radio" name="paud" <?php if (isset($paud) && $paud=="Y") ;?> value="Ya"> Ya
					                <input type="radio" name="paud" <?php if (isset($paud) && $paud=="T") ;?> value="Tidak"> Tidak
                                    <span class="warning"><?php echo $error_paud; ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tk" class="col-sm-2 col-form-label"> Apakah Pernah TK </label>
                                <div class="col-sm-10">
                                    <input type="radio" name="tk" <?php if (isset($tk) && $tk=="Y") ;?> value="Ya"> Ya
					                <input type="radio" name="tk" <?php if (isset($tk) && $tk=="T") ;?> value="Tidak"> Tidak
                                    <span class="warning"><?php echo $error_tk; ?></span>
                                </div>
                            </div>

                            <div class="form-group-row">
                                <label for="skhun" class="col-sm-2 col-form-label"> No. Seri SKHUN </label>
                                <div class="col-sm-10">
                                    <input type="text" name="skhun" class="form-control <?php echo ($error_skhun !="" ? "is-invalid" : ""); ?>" 
                                    id="skhun" placeholder="no. seri skhun" value="<?php echo $skhun; ?>"> *16 digit
                                    <span class="warning"><?php echo $error_skhun; ?></span>
                                </div>
                            </div>

                            <div class="form-group-row">
                                <label for="ijazah" class="col-sm-2 col-form-label"> No. Seri Ijazah </label>
                                <div class="col-sm-10">
                                    <input type="text" name="ijazah" class="form-control <?php echo ($error_ijazah !="" ? "is-invalid" : ""); ?>" 
                                    id="ijazah" placeholder="no. seri ijazah" value="<?php echo $ijazah; ?>"> *16 digit
                                    <span class="warning"><?php echo $error_ijazah; ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="hobi" class="col-sm-2 col-form-label"> Hobi </label>
                                <div class="col-sm-10">
                                    <select name="hobi" class="form-control <?php echo ($error_hobi !="" ? "is-invalid":"");?>" id="hobi">
                                        <option value="pilih"> - pilih - </option>
                                        <option value="Olah Raga"> Olah Raga </option>
                                        <option value="Kesenian"> Kesenian </option>
                                        <option value="Membaca"> Membaca </option>
                                        <option value="Menulis"> Menulis </option>
                                        <option value="Traveling"> Traveling </option>
                                        <option value="Lainnya"> Lainnya </option>
                                    </select>
                                    <span class="warning"><?php echo $error_hobi; ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cita" class="col-sm-2 col-form-label"> Cita - cita </label>
                                <div class="col-sm-10">
                                    <select name="cita" class="form-control <?php echo ($error_cita !="" ? "is-invalid":"");?>" id="cita">
                                        <option value="pilih"> - pilih - </option>
                                        <option value="PNS"> PNS </option>
                                        <option value="TNI/POLRI"> TNI / POLRI </option>
                                        <option value="GURU/DOSEN"> GURU / DOSEN </option>
                                        <option value="Dokter"> Dokter </option>
                                        <option value="Politikus"> Politikus </option>
                                        <option value="Wiraswasta"> Wiraswasta </option>
                                        <option value="Seni/Lukis"> Seni / Lukis </option>
                                        <option value="Lainnya"> Lainnya </option>
                                    </select>
                                    <span class="warning"><?php echo $error_cita; ?></span>
                                </div>
                            </div>

                            <p>
                                <h3> Data Pribadi </h3>
                            </p>
                            
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label"> Nama </label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>"
                                    id="nama" placeholder="nama" value="<?php echo $nama; ?>">
                                    <span class="warning"><?php echo $error_nama; ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jk" class="col-sm-2 col-form-label"> Jenis Kelamin </label>
                                <div class="col-sm-10">
                                    <input type="radio" name="jk" <?php if (isset($jk) && $jk=="L") ;?> value="Laki - laki"> Laki-laki
					                <input type="radio" name="jk" <?php if (isset($jk) && $jk=="P") ;?> value="Perempuan"> Perempuan 
                                    <span class="warning"><?php echo $error_jk; ?></span>
                                </div>
                            </div>

                            <div class="form-group-row">
                                <label for="nisn" class="col-sm-2 col-form-label"> NISN </label>
                                <div class="col-sm-10">
                                    <input type="text" name="nisn" class="form-control <?php echo ($error_nisn !="" ? "is-invalid" : ""); ?>" 
                                    id="nisn" placeholder="nisn" value="<?php echo $nisn; ?>"> *10 digit
                                    <span class="warning"><?php echo $error_nisn; ?></span>
                                </div>
                            </div>

                            <div class="form-group-row">
                                <label for="nik" class="col-sm-2 col-form-label"> NIK </label>
                                <div class="col-sm-10">
                                    <input type="text" name="nik" class="form-control <?php echo ($error_nik !="" ? "is-invalid" : ""); ?>" 
                                    id="nik" placeholder="nik" value="<?php echo $nik; ?>"> *16 digit
                                    <span class="warning"><?php echo $error_nik; ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tptlahir" class="col-sm-2 col-form-label"> Tempat Lahir </label>
                                <div class="col-sm-10">
                                    <input type="text" name="tptlahir" class="form-control <?php echo ($error_tptlahir !="" ? "is-invalid" : ""); ?>"
                                    id="tptlahir" placeholder="tempat lahir" value="<?php echo $tptlahir; ?>">
                                    <span class="warning"><?php echo $error_tptlahir; ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tgllahir" class="col-sm-2 col-form-label"> Tanggal Lahir </label>
                                <div class="col-sm-10">
                                    <input type="text" name="tgllahir" class="form-control <?php echo ($error_tgllahir !="" ? "is-invalid" : ""); ?>"
                                    id="tgllahir" placeholder="tanggal lahir" value="<?php echo $tgllahir; ?>">
                                    <span class="warning"><?php echo $error_tgllahir; ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="agama" class="col-sm-2 col-form-label"> Agama </label>
                                <div class="col-sm-10">
                                    <select name="agama" class="form-control <?php echo ($error_agama !="" ? "is-invalid":"");?>" id="agama">
                                        <option value="pilih"> - pilih - </option>
                                        <option value="Islam"> Islam </option>
                                        <option value="Kristen"> Kristen / Protestan </option>
                                        <option value="Katholik"> Katholik </option>
                                        <option value="Hindu"> Hindu </option>
                                        <option value="Budha"> Budha </option>
                                        <option value="Khonghucu"> Khong Hu Cu </option>
                                    </select>
                                    <span class="warning"><?php echo $error_agama; ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="khusus" class="col-sm-2 col-form-label"> Berkebutuhan Khusus </label>
                                <div class="col-sm-10">
                                    <select name="khusus" class="form-control <?php echo ($error_khusus !="" ? "is-invalid":"");?>" id="khusus">
                                        <option value="pilih"> - pilih - </option>
                                        <option value="Tidak"> Tidak </option>
                                        <option value="Netra"> Netra </option>
                                        <option value="Rungu"> Rungu </option>
                                        <option value="Grahita Ringan"> Grahita Ringan </option>
                                        <option value="Grahita Sedang"> Grahita Sedang </option>
                                        <option value="Daksa Ringan"> Daksa Ringan </option>
                                        <option value="Daksa Sedang"> Daksa Sedang </option>
                                        <option value="Laras"> Laras </option>
                                        <option value="Wicara"> Wicara </option>
                                        <option value="Tuna ganda"> Tuna Ganda </option>
                                        <option value="Hiperaktif"> Hiperaktif </option>
                                        <option value="Cerdas Istimewa"> Cerdas Istimewa </option>
                                        <option value="Bakat Istimewa"> Bakat Istimewa </option>
                                        <option value="Kesulitan Belajar"> Kesulitan Belajar </option>
                                        <option value="Narkoba"> Narkoba </option>
                                        <option value="Indigo"> Indigo </option>
                                        <option value="Down Syndrome"> Down Syndrome </option>
                                        <option value="Autis"> Autis </option>
                                    </select>
                                    <span class="warning"><?php echo $error_khusus; ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat" class="col-sm-2 col-form-label"> Alamat </label>
                                <div class="col-sm-10">
                                    <input type="text" name="alamat" class="form-control <?php echo ($error_alamat !="" ? "is-invalid" : ""); ?>"
                                    id="alamat" placeholder="alamat" value="<?php echo $alamat; ?>">
                                    <span class="warning"><?php echo $error_alamat; ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="rt" class="col-sm-2 col-form-label"> RT </label>
                                <div class="col-sm-10">
                                    <input type="text" name="rt" class="form-control <?php echo ($error_rt !="" ? "is-invalid" : ""); ?>"
                                    id="rt" placeholder="rt" value="<?php echo $rt; ?>">
                                    <span class="warning"><?php echo $error_rt; ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="rw" class="col-sm-2 col-form-label"> RW </label>
                                <div class="col-sm-10">
                                    <input type="text" name="rw" class="form-control <?php echo ($error_rw !="" ? "is-invalid" : ""); ?>"
                                    id="rw" placeholder="rw" value="<?php echo $rw; ?>">
                                    <span class="warning"><?php echo $error_rw; ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="dusun" class="col-sm-2 col-form-label"> Nama Dusun </label>
                                <div class="col-sm-10">
                                    <input type="text" name="dusun" class="form-control <?php echo ($error_dusun !="" ? "is-invalid" : ""); ?>"
                                    id="dusun" placeholder="nama dusun" value="<?php echo $dusun; ?>">
                                    <span class="warning"><?php echo $error_dusun; ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="klurah" class="col-sm-2 col-form-label"> Kelurahan </label>
                                <div class="col-sm-10">
                                    <input type="text" name="klurah" class="form-control <?php echo ($error_klurah !="" ? "is-invalid" : ""); ?>"
                                    id="klurah" placeholder="kelurahan" value="<?php echo $klurah; ?>">
                                    <span class="warning"><?php echo $error_klurah; ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="kcamat" class="col-sm-2 col-form-label"> Kecamatan </label>
                                <div class="col-sm-10">
                                    <input type="text" name="kcamat" class="form-control <?php echo ($error_kcamat !="" ? "is-invalid" : ""); ?>"
                                    id="kcamat" placeholder="kecamatan" value="<?php echo $kcamat; ?>">
                                    <span class="warning"><?php echo $error_kcamat; ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="kdpos" class="col-sm-2 col-form-label"> Kode Pos </label>
                                <div class="col-sm-10">
                                    <input type="text" name="kdpos" class="form-control <?php echo ($error_kdpos !="" ? "is-invalid" : ""); ?>"
                                    id="kdpos" placeholder="kode pos" value="<?php echo $kdpos; ?>"> *5 digit
                                    <span class="warning"><?php echo $error_kdpos; ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ttinggal" class="col-sm-2 col-form-label"> Tempat Tinggal </label>
                                <div class="col-sm-10">
                                    <select name="ttinggal" class="form-control <?php echo ($error_ttinggal !="" ? "is-invalid":"");?>" id="ttinggal">
                                        <option value="pilih"> - pilih - </option>
                                        <option value="Orang Tua"> Bersama Orang tua </option>
                                        <option value="Wali"> Wali </option>
                                        <option value="Kos"> Kos </option>
                                        <option value="Asrama"> Asrama </option>
                                        <option value="Panti Asuhan"> Panti Asuhan </option>
                                        <option value="Lainnya"> Lainnya </option>
                                    </select>
                                    <span class="warning"><?php echo $error_ttinggal; ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="transp" class="col-sm-2 col-form-label"> Moda Transportasi </label>
                                <div class="col-sm-10">
                                    <select name="transp" class="form-control <?php echo ($error_transp !="" ? "is-invalid":"");?>" id="transp">
                                        <option value="pilih"> - pilih - </option>
                                        <option value="Jalan Kaki"> Jalan Kaki </option>
                                        <option value="Kendaraan Pribadi"> Kendaraan Pribadi </option>
                                        <option value="Kendaraan Umum"> Kendaraan Umum </option>
                                        <option value="Jemputan Sekolah"> Jemputan Sekolah </option>
                                        <option value="Kereta Api"> Kereta Api </option>
                                        <option value="Ojek"> Ojek </option>
                                        <option value="Becak"> Becak </option>
                                        <option value="Perahu"> Perahu </option>
                                        <option value="Lainnya"> Lainnya </option>
                                    </select>
                                    <span class="warning"><?php echo $error_transp; ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="hp" class="col-sm-2 col-form-label"> Nomor Hp </label>
                                <div class="col-sm-10">
                                    <input type="text" name="hp" class="form-control <?php echo ($error_hp !="" ? "is-invalid" : ""); ?>"
                                    id="hp" placeholder="no hp" value="<?php echo $hp; ?>">
                                    <span class="warning"><?php echo $error_hp; ?></span>
                                </div>
                            </div>

                            <div class="form-group-row">
                                <label for="telp" class="col-sm-2 col-form-label"> Nomor Telepon </label>
                                <div class="col-sm-10">
                                    <input type="text" name="telp" class="form-control <?php echo ($error_telp !="" ? "is-invalid" : ""); ?>" 
                                    id="telp" placeholder="no telp" value="<?php echo $telp; ?>">
                                    <span class="warning"><?php echo $error_telp; ?></span>
                                </div>
                            </div>

                            <div class="form-group-row">
                                <label for="email" class="col-sm-2 col-form-label"> Email Pribadi </label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" class="form-control <?php echo ($error_email !="" ? "is-invalid" : ""); ?>"
                                    id="email" placeholder="email" value="<?php echo $email; ?>">
                                    <span class="warning"><?php echo $error_email; ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pkps" class="col-sm-2 col-form-label"> Penerima KPS / PKH / KIP </label>
                                <div class="col-sm-10">
                                    <input type="radio" name="pkps" <?php if (isset($pkps) && $pkps=="Y") ;?> value="Ya"> Ya
					                <input type="radio" name="pkps" <?php if (isset($pkps) && $pkps=="T") ;?> value="Tidak"> Tidak 
                                    <span class="warning"><?php echo $error_pkps; ?></span>
                                </div>
                            </div>

                            <div class="form-group-row">
                                <label for="nkps" class="col-sm-2 col-form-label"> No. KPS / PKH / KIP </label>
                                <div class="col-sm-10">
                                    <input type="text" name="nkps" class="form-control <?php echo ($error_nkps !="" ? "is-invalid" : ""); ?>"
                                    id="nkps" placeholder="no kps/pkh/kip" value="<?php echo $error_nkps; ?>">
                                    <span class="warning"><?php echo $error_nkps; ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="kwn" class="col-sm-2 col-form-label"> Kewarganegaraan </label>
                                <div class="col-sm-10">
                                    <input type="radio" name="kwn" <?php if (isset($kwn) && $kwn=="I") ;?> value="WNI"> Indonesia (WNI)
					                <input type="radio" name="kwn" <?php if (isset($kwn) && $kwn=="A") ;?> value="WNA"> Asing (WNA) Negara : 
                                    <input type="text" name="negara" class="form-control <?php echo ($error_negara !="" ? "is-invalid":"");?>" 
                                    id="negara" placeholder="*diisi jika WNA" value="<?php echo $negara;?>">
                                    <span class="warning"><?php echo $error_kwn; ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary"> Simpan </button>
                                    <button type="reset" class="btn btn-primary"> Reset </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php

        //menampilkan data yang di input
        echo "<h2> Hasil Input Data Pendaftaran Peserta Didik: </h2>";

        echo "<h4> Registrasi Peserta Didik </h4>";

        echo "1. Jenis Pendaftaran : " .$jp;
        echo "<br>"; 
        echo "2. Tanggal masuk sekolah : " .$tms;
        echo "<br>";
        echo "3. NIS  : " .$nis;
        echo "<br>";
        echo "4. Nomor Peserta Ujian : " .$npu;
        echo "<br>";
        echo "5. Apakah Pernah Paud : " .$paud;
        echo "<br>";
        echo "6. Apakah Pernah TK : " .$tk;
        echo "<br>";
        echo "7. No. Seri SKHUN : " .$skhun;
        echo "<br>";
        echo "8. No. Seri Ijazah : " .$ijazah;
        echo "<br>";
        echo "9. Hobi : " .$hobi;
        echo "<br>";
        echo "10. Cita - cita : " .$cita;
        echo "<br>";
        
        echo "<h4> Data Pribadi </h4>";
        
        echo "11. Nama Lengkap : " .$nama;
        echo "<br>"; 
        echo "12. Jenis Kelamin : " .$jk;
        echo "<br>";
        echo "13. NISN : " .$nisn;
        echo "<br>";
        echo "14. NIK : " .$nik;  
        echo "<br>"; 
        echo "15. Tempat Lahir :" .$tptlahir;
        echo "<br>";
        echo "16. Tanggal Lahir : " .$tgllahir;
        echo "<br>";
        echo "17. Agama : " .$agama;
        echo "<br>";
        echo "18. Berkebutuhan Khusus : " .$khusus;  
        echo "<br>"; 
        echo "19. Alamat : " .$alamat; 
        echo "<br>";
        echo "20. RT : " .$rt; 
        echo "<br>";
        echo "21. RW : " .$rw; 
        echo "<br>";    
        echo "22. Nama Dusun : " .$dusun;   
        echo "<br>"; 
        echo "23. Kelurahan : " .$klurah;  
        echo "<br>";
        echo "24. Kecamatan : " .$kcamat;  
        echo "<br>";
        echo "25. Kode Pos : " .$kdpos;  
        echo "<br>";
        echo "26. Tempat Tinggal : " .$ttinggal; 
        echo "<br>";
        echo "27. Moda Transportasi : " .$transp;
        echo "<br>";
        echo "28. Nomor HP : " .$hp; 
        echo "<br>";
        echo "29. Nomor Telepon : " .$telp;    
        echo "<br>";
        echo "30. E-mail Pribadi : " .$email;  
        echo "<br>";  
        echo "31. Penerima KPS / PKH / KIP : " .$pkps; 
        echo "<br>";
        echo "32. No. KPS / PKH / KIP : " .$nkps;  
        echo "<br>";
        echo "33. Kewarganegaraan : " .$kwn;  
        echo "<br>";
        echo "34. Nama Negara : " .$negara; 
        ?>
    </body>
</html>