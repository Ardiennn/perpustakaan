<?php
        include 'koneksi.php';
        $sql=mysqli_query($conn, "SELECT *FROM buku");
        $sno= 1;
        while($data=mysqli_fetch_assoc($sql)){
        ?>
        <tr align="center">
        <td><?=$no++ ;?></td>
        <td><?=$data['judul'] ;?></td>
        <td><?=$data['pengarang'] ;?></td>
        <td><?=$data['penerbit'] ;?></td>
        <td><?=$data['thn_terbit'] ;?></td>
        <td><?=$data['jumlah_buku'] ;?></td>
        <td><?=$data['lokasi'] ;?></td>
        </tr>
<?