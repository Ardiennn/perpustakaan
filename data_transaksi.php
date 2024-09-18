<?php
    include ("header.php");
?> 
<div class="container">
    <table id="$data" class="table table-striped" style="width:80%; text-align: center;">
        <thead>
            <tbody>
                <tr>
                    <th>Id</th>
                    <th>Judul</th>
                    <th>Nama</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </tbody>
        </thead>

        <?php
            include 'koneksi.php';
            $sql=mysqli_query($conn, "SELECT * FROM transaksi") or die (mysqli_error($koneksi));
            $no= 1;
            while($data=mysqli_fetch_assoc($sql)){
        ?>
        <tr align="center">
            <td><?=$data['id'] ;?></td>
            <td><?=$data['judul'] ;?></td>
            <td><?=$data['nama'] ;?></td>
            <td><?=$data['tgl_pinjam'] ;?></td>
            <td><?=$data['tgl_kembali'] ;?></td>
            <td><?=$data['status'] ;?></td>
            <td><?=$data['keterangan'] ;?></td>
            <td>
                <button class="btn btn-dark" type="submit">
                <a style="margin-bottom:2px;width:cover;" href="update_transaksi.php?id=<?=$data['id']; ?>">Update</a></button>
                <button class="btn btn-secondary" type="submit">
                <a style="margin-bottom:5px;width:cover;" onClick="return confirm ('Apakah anda ingin menghapus data ini ?')" href="delete_transaksi.php?id=<?= $data['id']; ?>">Delete</a></button>
            </td>
        </tr>
        <?php
            }
        ?>
        <a class="btn btn-primary" style="margin-top:5px; margin-bottom:5px;" href="form_transaksi.php" role="button">Tambahkan Data</a>
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