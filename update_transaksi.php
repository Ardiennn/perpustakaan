<?php
  include 'header.php';

  include 'koneksi.php';

  $data_transaksi = mysqli_query($conn, "SELECT * FROM transaksi WHERE id='".$_GET['id']."'");
  $edit = mysqli_fetch_assoc($data_transaksi);

  if(isset($_POST["submit"])){

  $id = htmlspecialchars($_POST["id"]);
  $judul = htmlspecialchars($_POST["judul"]);
  $nama = htmlspecialchars($_POST["nama"]);
  $tgl_pinjam = htmlspecialchars($_POST["tgl_pinjam"]);
  $tgl_kembali = htmlspecialchars($_POST["tgl_kembali"]);
  $status = htmlspecialchars($_POST["status"]);
  $keterangan = htmlspecialchars($_POST["keterangan"]);

  //update data ke database
  $query = "UPDATE transaksi SET
    id='$id',
    judul='$judul',
    nama='$nama',
    tgl_pinjam='$tgl_pinjam',
    tgl_kembali='$tgl_kembali',
    status='$status',
    keterangan='$keterangan'
    WHERE id=$id

  ";
  mysqli_query($conn,$query);
  

  if(mysqli_affected_rows($conn) > 0){
    echo "
      <script>
        alert('Transaksi Berhasil Diupdate');
        document.location.href = 'data_transaksi.php';
      </script>
    ";
  }

  else
  {
    echo "
      <script>
        alert('Transaksi gagal Diupdate');
        document.location.href = 'data_transaksi.php';
      </script>
    ";
  }
} 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="update.css">
    <title>Form Update Transaksi</title>
  </head>
  <body>
    <div class="container">
      <h2 class="text-center">Form Update Transaksi</h2>
      <form action="" method="POST">
        <div class="mb-3">
          <label for="id" class="form-label">Id</label>
          <input type="text" class="form-control" id="id" name="id" placeholder="Masukan Id Anda" value="<?= $edit["id"]; ?>" readonly>
        </div>
        <div class="mb-3">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan Judul Buku" value="<?= $edit["judul"]; ?>">
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Anda" value="<?= $edit["nama"]; ?>">
        </div>
        <div class="mb-3">
          <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
          <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" placeholder="Masukan Tanggal Pinjam" value="<?= $edit["tgl_pinjam"]; ?>">
        </div>
        <div class="mb-3">
          <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
          <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" placeholder="Masukan Tanggal Kembali" value="<?= $edit["tgl_kembali"]; ?>">
        </div>
        <div class="mb-3">
          <label for="status" class="form-label" id="status" name="status">Status</label>
        </div><select class="form-select" name="status" id="status" aria-label="Default select example">
          <option selected>Opsi Status</option>
          <option value=""><?= $edit["status"]; ?></option>
          <option value="admin">Admin</option>
          <option value="petugas">Petugas</option>
          <option value="guru">Guru</option>
          <option value="siswa">Siswa</option>
        </select>
        <div class="mb-3">
          <label for="keterangan" class="form-label" id="keterangan" name="keterangan">Keterangan</label>
          <select class="form-select" name="keterangan" id="keterangan" aria-label="Default select example">
            <option selected>Pilih keterangan</option>
            <option value=""><?= $edit["keterangan"]; ?></option>
            <option value="dipinjam">Dipinjam</option>
            <option value="dikembalikan">Dikembalikan</option>
          </select>
        </div>
        <button type="reset" name="reset" class="btn btn-dark" style="width:49%;">Reset</button>
        <button type="submit" name="submit" class="btn btn-primary" style="width:49%;">Simpan Perubahan</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
<?php
  include 'footer.php';
?>