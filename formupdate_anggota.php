<?php
  include 'header.php';

  include 'koneksi.php';

  $data_anggota = mysqli_query($conn, "SELECT * FROM anggota WHERE nis='".$_GET['nis']."'");
  $edit = mysqli_fetch_assoc($data_anggota);

  if(isset($_POST["submit"])){

  $nis = htmlspecialchars($_POST["nis"]);
  $nama = htmlspecialchars($_POST["nama"]);
  $tempat_lahir = htmlspecialchars($_POST["tempat_lahir"]);
  $tanggal_lahir = htmlspecialchars($_POST["tanggal_lahir"]);
  $jenis_kelamin = htmlspecialchars($_POST["jenis_kelamin"]);
  $jurusan = htmlspecialchars($_POST["jurusan"]);
  $tahun_masuk = htmlspecialchars($_POST["tahun_masuk"]);

  //update data ke database
  $query = "UPDATE anggota SET
    nis='$nis',
    nama='$nama',
    tempat_lahir='$tempat_lahir',
    tanggal_lahir='$tanggal_lahir',
    jenis_kelamin='$jenis_kelamin',
    jurusan='$jurusan',
    tahun_masuk='$tahun_masuk'
    WHERE nis=$nis

  ";
  mysqli_query($conn,$query);
  

  if(mysqli_affected_rows($conn) > 0){
    echo "
      <script>
        alert('Data Berhasil Diupdate');
        document.location.href = 'data_anggota.php';
      </script>
    ";
  }

  else
  {
    echo "
      <script>
        alert('Data Gagal Diupdate');
        document.location.href = 'data_anggota.php';
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
    <title>Form Update</title>
  </head>
  <body>
    <div class="container">
      <h2 class="text-center">Form Update Anggota</h2>
      <form action="" method="post">
        <div class="mb-3">
          <label for="nis" class="form-label">NIS</label>
          <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukan Nomor NIS Anda" value="<?= $edit["nis"]; ?>" readonly>
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Anggota" value="<?= $edit["nama"]; ?>">
        </div>
        <div class="mb-3">
          <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
          <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukan Tempat Lahir" value="<?= $edit["tempat_lahir"]; ?>">
        </div>
        <div class="mb-3">
          <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
          <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukan tanggal_lahir" value="<?= $edit["tanggal_lahir"]; ?>">
        </div>
        <div class="mb-3">
          <label for="jenis_kelamin" class="form-label" id="jenis_kelamin" name="jenis_kelamin">Jenis Kelamin</label>
        </div><select class="form-select" name="jenis_kelamin" id="jenis_kelamin" aria-label="Default select example">
          <option selected>Jenis Kelamin</option>
          <option value=""><?= $edit["jenis_kelamin"]; ?></option>
          <option value="L">Laki Laki</option>
          <option value="P">Perempuan</option>
        </select>
        <div class="mb-3">
          <label for="jurusan" class="form-label" id="jurusan" name="jurusan">Jurusan</label>
          <select class="form-select" name="jurusan" id="jurusan" aria-label="Default select example">
            <option selected>Pilih Jurusan</option>
            <option value=""><?= $edit["jurusan"]; ?></option>
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
          <option ><?= $edit["tahun_masuk"]; ?></option>
          <?php
          for($i=date('Y');$i>=date('Y')-32; $i-=1){
            echo"<option value='$i'> $i </option>";
          }
          ?>
        </select>
        <button type="reset" name="reset" class="btn btn-primary" style="width:49%;">Reset</button>
        <button type="submit" name="submit" class="btn btn-danger" style="width:40%;">Simpan Perubahan</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
<?php
  include 'footer.php';
?>