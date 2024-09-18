<?php
  include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="formbuku.css">
    <title>Form Transaksi</title>
  </head>
  <body>
    <div class="container">
      <h2 class="text-center">Form Transaksi</h2>
      <form action="proses_transaksi.php" method="POST">
        <div class="mb-3">
          <label for="id" class="form-label">id</label>
          <input type="text" class="form-control" id="id" name="id" placeholder="Masukan Id Anda">
        </div>
        <div class="mb-3">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan Judul Buku">
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
        </div>
        <div class="mb-3">
          <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
          <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" placeholder="Masukan Tanggal Pinjam">
        </div>
        <div class="mb-3">
          <label for="tgl_kembali" class="form-label" id="tgl_kembali" name="tgl_kembali">Tanggal Kembali</label>
          <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" placeholder="Masukan Tanggal Kembali">
        </div>
        <div class="mb-3">
          <label for="status" class="form-label" id="status" name="status">Status</label>
          <select class="form-select" name="status" id="status" aria-label="Default select example">
            <option selected>Opsi Status</option>
            <option value="admin">Admin</option>
            <option value="petugas">Petugas</option>
            <option value="guru">Guru</option>
            <option value="siswa">Siswa</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="keterangan" class="form-label" id="keterangan" name="keterangan">Keterangan</label>
          <select class="form-select" name="keterangan" id="keterangan" aria-label="Default select example">
            <option selected>Pilih Keterangan</option>
            <option value="dipinjam">Dipinjam</option>
            <option value="dikembalikan">Dikembalikan</option>
          </select>
        </div>
        <button type="reset" class="btn btn-danger" style="width:49%">Reset</button>
        <button type="submit" name="submit" id="submit" class="btn btn-primary" style="width:49%" href="databuku.php">Simpan</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
<?php
  include 'footer.php';
?>