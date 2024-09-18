<?php
include("koneksi.php");
require_once __DIR__ .'/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$sql="
SELECT *FROM buku
";
$tampil=mysqli_query($conn,$sql);

$html='<html>
<body>
<p align="center">Laporan Data Buku</p>
<table width="100%" border="1">
	<tr>
	    <td align="center" bgcolor="white">No</td>
	    <td align="center" bgcolor="white">Isbn</td>
	    <td align="center" bgcolor="white">Judul</td>
	    <td align="center" bgcolor="white">Pengarang</td>
	    <td align="center" bgcolor="white">Penerbit</td>
	    <td align="center" bgcolor="white">Tahun Terbit</td>
	    <td align="center" bgcolor="white">Jumlah Buku</td>
	    <td align="center" bgcolor="white">Lokasi</td>
	</tr>
';
$no=1;
while($data=mysqli_fetch_assoc($tampil)){
$html .='
<tr>
	<td align="center">'.$no++.'</td>
	<td>'.$data['isbn'].'</td>
	<td>'.$data['judul'].'</td>
	<td>'.$data['pengarang'].'</td>
	<td>'.$data['penerbit'].'</td>
	<td>'.$data['thn_terbit'].'</td>
	<td>'.$data['jumlah_buku'].'</td>
	<td>'.$data['lokasi'] .'</td>
</tr>';
}
$html .='</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('databuku.php', \Mpdf\Output\Destination::INLINE);
exit;
?>