<?php
include ("koneksi.php");

//die($edit);
mysqli_query($conn,"
	DELETE FROM transaksi WHERE id='".$_GET['id']."'
");

if(mysqli_affected_rows($conn) > 0){
	echo "
			<script>
				alert('data berhasil dihapus');
				document.location.href = 'data_transaksi.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('data gagal dihapus');
				document.location.href = 'data_transaksi.php';
			</script>
		";
	}
	
?>