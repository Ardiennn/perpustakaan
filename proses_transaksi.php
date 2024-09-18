<?php
include 'koneksi.php';

	if(isset($_POST["submit"])){

		//ambil data dari tiap elemen input
		$id = htmlspecialchars($_POST["id"]);
		$judul= htmlspecialchars($_POST["judul"]);
		$nama = htmlspecialchars($_POST["nama"]);
		$tgl_pinjam = htmlspecialchars($_POST["tgl_pinjam"]);
		$tgl_kembali = htmlspecialchars($_POST["tgl_kembali"]);
		$status = htmlspecialchars($_POST["status"]);
		$keterangan = htmlspecialchars($_POST["keterangan"]);
	}

	//tambahkan data kedalam database
	$query = "INSERT INTO transaksi VALUES
	('$id','$judul','$nama','$tgl_pinjam','$tgl_kembali','$status','$keterangan')";
	mysqli_query($conn, $query);

	//cek data berhasil ditambahkan
	if(mysqli_affected_rows($conn) > 0){
		echo "
			<script>
				alert('Peminjaman buku berhasil');
				document.location.href='data_transaksi.php';
			</script>
		";
	}else
		echo "
			<script>
				alert ('Peminjaman buku gagal');
				document.location.href = 'data_transaksi.php';
			</script>
		";
?>