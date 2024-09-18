<?php
  include 'header.php';

  include 'koneksi.php';

  $databuku = mysqli_query($conn, "SELECT * FROM buku WHERE isbn='".$_GET['isbn']."'");
  $edit = mysqli_fetch_assoc($databuku);

  if(isset($_POST["submit"])){

  $isbn = htmlspecialchars($_POST["isbn"]);
  $judul = htmlspecialchars($_POST["judul"]);
  $pengarang = htmlspecialchars($_POST["pengarang"]);
  $penerbit = htmlspecialchars($_POST["penerbit"]);
  $thn_terbit = htmlspecialchars($_POST["thn_terbit"]);
  $jumlah_buku = htmlspecialchars($_POST["jumlah_buku"]);
  $lokasi = htmlspecialchars($_POST["lokasi"]);

  //update data ke database
  $query = "UPDATE buku SET
    isbn='$isbn',
    judul='$judul',
    pengarang='$pengarang',
    penerbit='$penerbit',
    thn_terbit='$thn_terbit',
    jumlah_buku='$jumlah_buku',
    lokasi='$lokasi'
    WHERE isbn=$isbn

  ";
  mysqli_query($conn,$query);
  

  if(mysqli_affected_rows($conn) > 0){
    echo "
      <script>
        alert('Data Berhasil Diupdate');
        document.location.href = 'databuku.php';
      </script>
    ";
  }

  else
  {
    echo "
      <script>
        alert('Data gagal Diupdate');
        document.location.href = 'databuku.php';
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
    <link rel="stylesheet" href="formbuku.css">
    <title>Form Update</title>
  </head>
  <body>
    <div class="container">
      <h2 class="text-center">Update</h2>
      <form action="" method="post">
        <div class="mb-3">
          <label for="isbn" class="form-label">ISBN</label>
          <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Masukan Nomor ISBN Anda" value="<?= $edit["isbn"]; ?>" readonly>
        </div>
        <div class="mb-3">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan Judul Buku" value="<?= $edit["judul"]; ?>">
        </div>
        <div class="mb-3">
          <label for="pengarang" class="form-label">Pengarang</label>
          <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Masukan Nama Pengarang" value="<?= $edit["pengarang"]; ?>">
        </div>
        <div class="mb-3">
          <label for="penerbit" class="form-label">Penerbit</label>
          <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Masukan Penerbit" value="<?= $edit["penerbit"]; ?>">
        </div>
        <div class="mb-3">
          <label for="thn_terbit" class="form-label" id="thn_terbit" name="thn_terbit">Tahun Terbit</label>
        </div>
        <select class="form-select" name="thn_terbit" id="thn_terbit" aria-label="Default select example">
          <option selected>Pilih Tahun</option>
          <option ><?= $edit["thn_terbit"]; ?></option>
          <?php
          for($i=date('Y');$i>=date('Y')-32; $i-=1){
            echo"<option value='$i'> $i </option>";
          }
          ?>
        </select>
        <div class="mb-3">
          <label for="jumlah_buku" class="form-label">Jumlah Buku</label>
          <input type="number" class="form-control" id="jumlah_buku" name="jumlah_buku" placeholder="Masukan Jumlah Buku" value="<?= $edit["jumlah_buku"]; ?>" onkeypress="return hanyaAngka(event)">
        </div>
        <div class="mb-3">
          <label for="lokasi" class="form-label" id="lokasi" name="lokasi">Lokasi</label>
          <select class="form-select" name="lokasi" id="lokasi" aria-label="Default select example">
            <option selected>Pilih Lokasi</option>
            <option value=""><?= $edit["lokasi"]; ?></option>
            <option value="rak1">Rak 1</option>
            <option value="rak2">Rak 2</option>
            <option value="rak3">Rak 3</option>
          </select>
        </div>
        <button type="reset" name="reset" class="btn btn-primary" style="width:49%">Reset</button>
        <button type="submit" name="submit" class="btn btn-danger" style="width:49%">Simpan Perubahan</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
<?php
  include 'footer.php';
?>