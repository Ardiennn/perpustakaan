<?php
    include ("header.php");
?> 
<div class="container">
    <table id="$data" class="table table-striped" style="width:80%">
        <thead>
            <tbody>
                <tr>
                    <th>No</th>
                    <th>Isbn</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Jumlah</th>
                    <th>Lokasi</th>
                    <th>Aksi</th>
                </tr>
            </tbody>
        </thead>

        <?php
            include 'koneksi.php';
            $sql=mysqli_query($conn, "SELECT * FROM buku") or die (mysql_error($koneksi));
            $no= 1;
            while($data=mysqli_fetch_assoc($sql)){
        ?>
        <tr align="center">
            <td><?=$no++ ;?></td>
            <td><?=$data['isbn'] ;?></td>
            <td><?=$data['judul'] ;?></td>
            <td><?=$data['pengarang'] ;?></td>
            <td><?=$data['penerbit'] ;?></td>
            <td><?=$data['thn_terbit'] ;?></td>
            <td><?=$data['jumlah_buku'] ;?></td>
            <td><?=$data['lokasi'] ;?></td>
            <td>
                <button class="btn btn-dark" type="submit">
                <a style="margin-bottom:5px;width:cover;" href="form_update.php?isbn=<?=$data['isbn']; ?>">Update</a></button>
                <button class="btn btn-secondary" type="submit">
                <a style="margin-bottom:5px;width:cover;" onClick="return confirm ('Apakah anda ingin menghapus data ini ?')" href="delete.php?isbn=<?= $data['isbn']; ?>">Delete</a></button>
            </td>
        </tr>
        <?php
            }
        ?>
        <a class="btn btn-primary" style="margin-top:5px;" href="form_buku.php" role="button">Tambahkan Data</a>
    </table>
    <script>
        $(document).ready(function() {
            $('data').DataTable();
        } );
    </script>
</div>
<?php
    include ("footer.php");
?>