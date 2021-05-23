<?php
//membuat koneksi
include ('koneksi.php');
// require file autoload.inc.php dari folder dompdf
require_once ("dompdf/autoload.inc.php");
//menggunakan dompdf
use Dompdf\Dompdf;

//membuat dompdf baru
$dompdf = new Dompdf();

//query sql untuk mengambil data pada database
$query = mysqli_query($koneksi, "SELECT * FROM tb_siswa");

//membuat isi judul kolom pada pdf
$html = '<center> <h3> Daftar Nama Siswa </h3> </center> <br>';
$html = '<table border="1" width="100%">
            <tr>
            <th> No </th>
            <th> Nama </th>
            <th> Kelas </th>
            <th> Alamat </th>
            </tr>';
$no = 1;

//memasukan data dari database ke pdf
while($row = mysqli_fetch_array($query)){
    $html .= " <tr> 
                <td> " .$no. " </td>
                <td> " .$row['nama']. " </td>
                <td> " .$row['kelas']. " </td>
                <td> " .$row['alamat']. " </td>
                </tr> ";
    $no++;
}

$html .= "</html>";
$dompdf -> loadHtml($html);
//Setting ukuran dan orientasi kertas
$dompdf -> setPaper('A4', 'portrait');
//Rendering dari HTML ke PDF
$dompdf -> render();
//Melakukan output file PDF
$dompdf -> stream('laporan_siswa.pdf');
?>