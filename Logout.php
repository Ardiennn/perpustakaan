<?php
session_start();
//session berhenti
$_SESSION = [];
session_unset();
session_destroy();

setcookie('id','', time() - 3600);
setcookie('key','', time() - 3600);
echo "
	<script>
		alert('Anda Berhasil Logout');
		document.location.href = 'login.php';
	</script>
	";
?>