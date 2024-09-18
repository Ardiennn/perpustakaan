<?php
include 'koneksi.php';

if(isset($_POST["register"])){
	$username = strtolower(stripslashes($_POST["username"]));
	$password = mysqli_real_escape_string($conn, $_POST["password"]);
	$password2 = mysqli_real_escape_string($conn, $_POST["password2"]);
	$nama = $_POST["nama"];
	$akses = $_POST["akses"];
	$email = $_POST["email"];

	//cek username sudah ada atau belum
	$result = mysqli_query($conn,"SELECT username FROM user WHERE username = '$username'");
	if(mysqli_fetch_assoc($result)){
		echo "
			<script>
				alert('username sudah terdaftar,ganti username');
				document.location.href = 'formregistrasi.php';
			</script>
		";
		return false;
	}

	//cek konfirmasi password
	if($password !== $password2){
		echo "
			<script>
				alert('konfirmasi password tidak sesuai');
				document.location.href= 'formregistrasi.php';
			</script>
		";
		return false;
	}

	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambahkan data kedatabase
	mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password','$nama','$akses','$email')");

	if(mysqli_affected_rows($conn) > 0){
		echo "
			<script>
				alert('user baru berhasil ditambahkan');
				document.location.href='formregistrasi.php';
			</script>
		";
	}else{
		echo mysqli_error($conn);
	}
}
?>