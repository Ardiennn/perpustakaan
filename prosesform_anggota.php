<?php
include 'koneksi.php';

	if(isset($_POST["submit"])){

		//ambil data dari tiap elemen input
		$nis = htmlspecialchars($_POST["nis"]);
		$nama = htmlspecialchars($_POST["nama"]);
		$tempat_lahir = htmlspecialchars($_POST["tempat_lahir"]);
		$tanggal_lahir = htmlspecialchars($_POST["tanggal_lahir"]);
		$jenis_kelamin = htmlspecialchars($_POST["jenis_kelamin"]);
		$jurusan = htmlspecialchars($_POST["jurusan"]);
		$tahun_masuk = htmlspecialchars($_POST["tahun_masuk"]);
	}

	//tambahkan data kedalam database
	$query = "INSERT INTO anggota VALUES
	('$nis','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$jurusan','$tahun_masuk')";
	mysqli_query($conn, $query);

	//cek data berhasil ditambahkan
	if(mysqli_affected_rows($conn) > 0){
		echo "
			<script>
				alert('buku baru berhasil ditambahkan');
				document.location.href='data_anggota.php';
			</script>
		";
	}else
		echo "
			<script>
				alert ('data gagal ditambahkan');
				document.location.href = 'data_anggota.php';
			</script>
		";
?>