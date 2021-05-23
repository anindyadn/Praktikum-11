<?php
//membuat koneksi
include ('koneksii.php');
// require file autoload.inc.php dari folder dompdf
require_once ("dompdf/autoload.inc.php");
//menggunakan dompdf
use Dompdf\Dompdf;

//membuat dompdf baru
$dompdf = new Dompdf();

//query sql untuk mengambil data pada database
$query = mysqli_query($koneksi, "SELECT * FROM pendaftar_pdidik");

//membuat isi judul kolom pada pdf
$html = '<center> <h3> Daftar Peserta Didik </h3> </center> <br>';
$html = '<table border="1" width="100%">
            <tr>
            <th> No </th>
            <th> Jenis Pendaftaran </th>
            <th> Tanggal Masuk Sekolah </th>
            <th> NIS </th>
            <th> Nomor Peserta Ujian </th>
            <th> Apakah Pernah PAUD </th>
            <th> Apakah Pernah TK </th>
            <th> No. Seri SKHUN </th>
            <th> No. Seri Ijazah </th>
            <th> Hobi </th>
            <th> Cita-cita </th>
            <th> Nama Lengkap </th>
            <th> Jenis Kelamin </th>
            <th> NISN </th>
            <th> NIK </th>
            <th> Tempat Lahir </th>
            <th> Tanggal Lahir </th>
            <th> Agama </th>
            <th> Berkebutuhan Khusus </th>
            <th> Alamat </th>
            <th> RT </th>
            <th> RW </th>
            <th> Nama Dusun </th>
            <th> Kelurahan </th>
            <th> Kecamatan </th>
            <th> Kode Pos </th>
            <th> Tempat Tinggal </th>
            <th> Moda Transportasi </th>
            <th> Nomor HP </th>
            <th> Nomor Telepon </th>
            <th> Email Pribadi </th>
            <th> Penerima KPS/PKH/KIP </th>
            <th> No. KPS/PKH/KIP </th>
            <th> Kewarganegaraan </th>
            <th> Nama Negara </th>
            </tr>';
$no = 1;

//memasukan data dari database ke pdf
while($row = mysqli_fetch_array($query)){
    $html .= " <tr> 
                <td> " .$no. " </td>
                <td> " .$row['jenis_pendaftaran']. " </td>
                <td> " .$row['tanggal_masuk']. " </td>
                <td> " .$row['nis']. " </td>
                <td> " .$row['no_peserta']. " </td>
                <td> " .$row['paud']. " </td>
                <td> " .$row['tk']. " </td>
                <td> " .$row['no_skhun']. " </td>
                <td> " .$row['no_ijazah']. " </td>
                <td> " .$row['hobi']. " </td>
                <td> " .$row['cita_cita']. " </td>
                <td> " .$row['nama']. " </td>
                <td> " .$row['jenis_kelamin']. " </td>
                <td> " .$row['nisn']. " </td>
                <td> " .$row['nik']. " </td>
                <td> " .$row['tempat_lahir']. " </td>
                <td> " .$row['tanggal_lahir']. " </td>
                <td> " .$row['agama']. " </td>
                <td> " .$row['berkebutuhan_khusus']. " </td>
                <td> " .$row['alamat']. " </td>
                <td> " .$row['rt']. " </td>
                <td> " .$row['rw']. " </td>
                <td> " .$row['nama_dusun']. " </td>
                <td> " .$row['kelurahan']. " </td>
                <td> " .$row['kecamatan']. " </td>
                <td> " .$row['kodepos']. " </td>
                <td> " .$row['tempat_tinggal']. " </td>
                <td> " .$row['transportasi']. " </td>
                <td> " .$row['hp']. " </td>
                <td> " .$row['telp']. " </td>
                <td> " .$row['email']. " </td>
                <td> " .$row['penerima_kps']. " </td>
                <td> " .$row['no_kps']. " </td>
                <td> " .$row['kewarganegaraan']. " </td>
                <td> " .$row['negara']. " </td>
                </tr> ";
    $no++;
}

$html .= "</html>";
$dompdf -> loadHtml($html);
//Setting ukuran dan orientasi kertas
$dompdf -> setPaper('A1', 'landscape');
//Rendering dari HTML ke PDF
$dompdf -> render();
//Melakukan output file PDF
$dompdf -> stream('laporan_peserta_didik.pdf');
?>
