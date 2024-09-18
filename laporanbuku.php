<?php
$title ='Laporan Buku';
include("header.php");
?>
<table width="100%" cellpadding="0" style="height:70px;margin-bottom:50px; object-position:middle;">
	<tr bgcolor="orange" align="center">
		<th>Laporan Buku</th>
	</tr>
	<tr>
		<td align="center">
			<button class="btn btn-dark" type="submit">
            <a style="margin-bottom:25px;width:cover;" href="cetakbuku_excel.php">Cetak Excel</a></button>
            <button class="btn btn-dark" type="submit">
            <a style="margin-top:25px;width:cover;" href="cetakbuku_pdf.php">Cetak PDF</a></button>
        </td>
	</tr>
</table>
<?php
include("footer.php");
?>