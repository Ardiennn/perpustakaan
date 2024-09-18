<?php
include ("koneksi.php");

//die($edit);
mysqli_query($conn,"
	DELETE FROM anggota WHERE nis='".$_GET['nis']."'
");

if(mysqli_affected_rows($conn) > 0){
	echo "
			<script>
				alert('data berhasil dihapus');
				document.location.href = 'data_anggota.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('data gagal dihapus');
				document.location.href = 'data_anggota.php';
			</script>
		";
	}
	
?>