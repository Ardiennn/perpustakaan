<?php
    include ("header.php");
?> 
<div class="container">
    <table id="$data" class="table table-striped" style="width:80%">
        <thead>
            <tbody>
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Jurusan</th>
                    <th>Tahun Masuk</th>
                    <th>Aksi</th>
                </tr>
            </tbody>
        </thead>

        <?php
            include 'koneksi.php';
            $sql=mysqli_query($conn, "SELECT * FROM anggota") or die (mysql_error($koneksi));
            $no= 1;
            while($data=mysqli_fetch_assoc($sql)){
        ?>
        <tr align="center">
            <td><?=$data['nis'] ;?></td>
            <td><?=$data['nama'] ;?></td>
            <td><?=$data['tempat_lahir'] ;?></td>
            <td><?=$data['tanggal_lahir'] ;?></td>
            <td><?=$data['jenis_kelamin'] ;?></td>
            <td><?=$data['jurusan'] ;?></td>
            <td><?=$data['tahun_masuk'] ;?></td>
            <td>
                <button class="btn btn-dark" type="submit">
                <a style="margin-bottom:5px;width:cover;" href="formupdate_anggota.php?nis=<?=$data['nis']; ?>">Update</a></button>
                <button class="btn btn-secondary" type="submit">
                <a style="margin-bottom:5px;width:cover;" onClick="return confirm ('Apakah anda ingin menghapus data ini ?')" href="delete_anggota.php?nis=<?= $data['nis']; ?>">Delete</a></button>
            </td>
        </tr>
        <?php
            }
        ?>
        <a class="btn btn-primary" style="margin-top:5px;" href="form_anggota.php" role="button">Tambahkan Data</a>
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