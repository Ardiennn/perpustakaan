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
    <title>Form Anggota</title>
  </head>
  <body>
    <div class="container">
      <h2 class="text-center">Form Anggota</h2>
      <form action="prosesform_anggota.php" method="POST">
        <div class="mb-3">
          <label for="nis" class="form-label">NIS</label>
          <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukan Nomor NIS Anda">
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Anggota">
        </div>
        <div class="mb-3">
          <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
          <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukan Tempat Lahir">
        </div>
        <div class="mb-3">
          <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
          <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukan Tanggal Lahir">
        </div>
        <div class="mb-3">
          <label for="jenis_kelamin" class="form-label" id="jenis_kelamin" name="jenis_kelamin">Jenis Kelamin</label>
        </div><select class="form-select" name="jenis_kelamin" id="jenis_kelamin" aria-label="Default select example">
          <option selected>Jenis Kelamin</option>
          <option value="L">L</option>
          <option value="P">P</option>
        </select>
        <div class="mb-3">
          <label for="jurusan" class="form-label" id="jurusan" name="jurusan">Jurusan</label>
          <select class="form-select" name="jurusan" id="jurusan" aria-label="Default select example">
            <option selected>Pilih Jurusan</option>
            <option value="akutansi">Akutansi</option>
            <option value="pemasaran">Pemasaran</option>
            <option value="perbankan">Perbankan</option>
            <option value="administrasi perkantoran">Administrasi Perkantoran</option>
            <option value="multimedia">Multimedia</option>
            <option value="rekayasa perangkat lunak">Rekayasa Perangkat Lunak</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="tahun_masuk" class="form-label" id="tahun_masuk" name="tahun_masuk">Tahun Masuk</label>
        </div>
        <select class="form-select" name="tahun_masuk" id="tahun_masuk" aria-label="Default select example">
          <option selected>Pilih Tahun</option>
          <?php
          $mulai= date ('Y') - 50;
          for ($i = $mulai;$i<$mulai + 100;$i++){
            $sel = $i == date('Y') ?' selected="selected' : '';
            echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
          }
          ?>
        </select>
        <button type="submit" class="btn btn-danger" style="width:49%">Reset</button>
        <button type="submit" name="submit" id="submit" class="btn btn-primary" style="width:49%" href="data_anggota.php">Simpan</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
<?php
  include 'footer.php';
?>