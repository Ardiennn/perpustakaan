<?php
include 'koneksi.php';

	if(isset($_POST["submit"])){

		//ambil data dari tiap elemen input
		$isbn = htmlspecialchars($_POST["isbn"]);
		$judul = htmlspecialchars($_POST["judul"]);
		$pengarang = htmlspecialchars($_POST["pengarang"]);
		$penerbit = htmlspecialchars($_POST["penerbit"]);
		$thn_terbit = htmlspecialchars($_POST["thn_terbit"]);
		$jumlah_buku = htmlspecialchars($_POST["jumlah_buku"]);
		$lokasi = htmlspecialchars($_POST["lokasi"]);
	}

	//tambahkan data kedalam database
	$query = "INSERT INTO buku VALUES
	('$isbn','$judul','$pengarang','$penerbit','$thn_terbit','$jumlah_buku','$lokasi')";
	mysqli_query($conn, $query);

	//cek data berhasil ditambahkan
	if(mysqli_affected_rows($conn) > 0){
		echo "
			<script>
				alert('buku baru berhasil ditambahkan');
				document.location.href='databuku.php';
			</script>
		";
	}else
		echo "
			<script>
				alert ('data gagal ditambahkan');
				document.location.href = 'databuku.php';
			</script>
		";
?>