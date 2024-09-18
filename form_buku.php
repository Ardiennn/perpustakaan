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
    <title>Form Buku</title>
  </head>
  <body>
    <div class="container">
      <h2 class="text-center">Form Buku</h2>
      <form action="proses_formbuku.php" method="POST">
        <div class="mb-3">
          <label for="isbn" class="form-label">ISBN</label>
          <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Masukan Nomor ISBN Anda">
        </div>
        <div class="mb-3">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan Judul Buku">
        </div>
        <div class="mb-3">
          <label for="pengarang" class="form-label">Pengarang</label>
          <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Masukan Nama Pengarang">
        </div>
        <div class="mb-3">
          <label for="penerbit" class="form-label">Penerbit</label>
          <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Masukan Penerbit">
        </div>
        <div class="mb-3">
          <label for="thn_terbit" class="form-label" id="thn_terbit" name="thn_terbit">Tahun Terbit</label>
        </div>
        <select class="form-select" name="thn_terbit" id="thn_terbit" aria-label="Default select example">
          <option selected>Pilih Tahun</option>
          <?php
          for($i=date('Y');$i>=date('Y')-32; $i-=1){
            echo"<option value='$i'> $i </option>";
          }
          ?>
        </select>
        <div class="mb-3">
          <label for="jumlah_buku" class="form-label">Jumlah Buku</label>
          <input type="number" class="form-control" id="jumlah_buku" name="jumlah_buku" placeholder="Masukan Jumlah Buku">
        </div>
        <div class="mb-3">
          <label for="lokasi" class="form-label" id="lokasi" name="lokasi">Lokasi</label>
          <select class="form-select" name="lokasi" id="lokasi" aria-label="Default select example">
            <option selected>Pilih Lokasi</option>
            <option value="rak1">Rak 1</option>
            <option value="rak2">Rak 2</option>
            <option value="rak3">Rak 3</option>
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