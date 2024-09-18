<?php
include ("koneksi.php");

//die($edit);
mysqli_query($conn,"
	DELETE FROM buku WHERE isbn='".$_GET['isbn']."'
");

if(mysqli_affected_rows($conn) > 0){
	echo "
			<script>
				alert('data berhasil dihapus');
				document.location.href = 'databuku.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('data gagal dihapus');
				document.location.href = 'databuku.php';
			</script>
		";
	}
	
?>