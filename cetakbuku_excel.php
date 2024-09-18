<?php
	include 'koneksi.php';
	date_default_timezone_set("Asia/Jakarta");
	$sekarang = date('d-m-Y(H-i)', time());
	$nama = "cetak-data-buku".$sekarang.".xls";
	header("Content-Disposition: attachment; filename='$nama'");
	header("Content-Type: application/vnd-ms-excel");
?>
<table border="1px">
	<tr>
		<th>No</th>
		<th>Isbn</th>
        <th>Judul Buku</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Jumlah</th>
        <th>Lokasi</th>
	</tr>
	<?php
	include('koneksi.php');
	$sql=mysqli_query($conn,"SELECT *FROM buku");
	$no=1;
	while($data=mysqli_fetch_assoc($sql)){
	?>
		<tr>
			<td><?=$no++ ;?></td>
			<td><?=$data['isbn'] ;?></td>
            <td><?=$data['judul'] ;?></td>
            <td><?=$data['pengarang'] ;?></td>
            <td><?=$data['penerbit'] ;?></td>
            <td><?=$data['thn_terbit'] ;?></td>
            <td><?=$data['jumlah_buku'] ;?></td>
            <td><?=$data['lokasi'] ;?></td>
		</tr>
	<?php
		}
	?>
</table>