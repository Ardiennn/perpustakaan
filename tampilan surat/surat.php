<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/bootstrap/css/style.css">
    <!-- dataTables -->
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    
    <!-- datatables js -->
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <!-- script -->
    <script src="assets/js/script.js"></script>
    <title>Data Surat</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" role="navigation">
      <div class="container">
        <img src="assets/logo.png" alt="logo" class="rounded-circle" width="30" height="30">
        <a class="navbar-brand" href="index.php">E-Surat</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Master
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="surat.php">Surat</a>
                <a class="dropdown-item" href="siswa.php">Siswa</a>
                <a class="dropdown-item" href="kelas.php">Kelas</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Transaksi Surat</a>
            </li>
            <li class="nav-item pl-4">
              <a class="nav-link" href="#">Registrasi User</a>
            </li>
            
          </ul>
        </div>
    </div>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
              <a class="nav-link" href="#">Log Out</a>
            </li>
    </ul>
  </nav>
<section class="mt-5 mb-3">
  <div class="container">
    <h2>Data Surat</h2>
    <div class="btn">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary btn-sm tambahSurat" data-toggle="modal" data-target="#formSurat">
        Tambah Data Baru
      </button>
      <!-- Modal -->
      <div class="modal fade" id="formSurat" tabindex="-1" aria-labelledby="judulSurat" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="judulSurat">Tambah Data Surat</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="tambah_surat.php" method="post">
              <input type="hidden" name="id_surat" id="id_surat">
              <div class="form-group row">
                <label for="nomor" class="col-sm-2 col-form-label col-form-label-sm">Nomor Surat</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm" name="nomor" id="nomor" placeholder="nomor surat" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="lampiran" class="col-sm-2 col-form-label col-form-label-sm">Lampiran</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm" name="lampiran" id="lampiran" placeholder="lampiran surat" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="perihal" class="col-sm-2 col-form-label col-form-label-sm">Perihal</label>
                <div class="col-sm-10">
                <textarea class="form-control" name="perihal" id="perihal" placeholder="tulis perihal surat" required></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="tanggal" class="col-sm-2 col-form-label col-form-label-sm">Tanggal</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm" name="tanggal" id="tanggal" placeholder="tanggal surat" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="reset" name="kembali" class="btn btn-secondary btn-sm" data-dismiss="modal">Kembali</button>
                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <table class="table-bordered display" id="example" style="width:100%">
      <thead class="text-center">
        <tr>
          <th>No</th>
          <th>Nomor Surat</th>
          <th>Lampiran</th>
          <th>Perihal</th>
          <th>Tanggal Surat</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
                <tr>
            <td class="text-center">1</td>
            <td>3212/bb</td>
            <td>1</td>
            <td>Surat Izin</td>
            <td>2 November 2020</td>
            <td class="text-center">
              <a data-toggle="modal" data-target="#formSurat" data-id="17" type="submit" class="btn btn-success btn-sm tampilUbahSurat"><i class="far fa-edit"></i>Edit</a>
              
              <a onclick="return confirm('Apakah Yakin Ingin Menghapus?')" href="hapus_surat.php?id_surat=17" type="button" class="btn btn-danger btn-sm tombol"><i class="far fa-trash-alt"></i>Hapus</a>
            </td>
        </tr>

                <tr>
            <td class="text-center">2</td>
            <td>55/98</td>
            <td>-</td>
            <td>Surat Sakit</td>
            <td>18 November 2020</td>
            <td class="text-center">
              <a data-toggle="modal" data-target="#formSurat" data-id="12" type="submit" class="btn btn-success btn-sm tampilUbahSurat"><i class="far fa-edit"></i>Edit</a>
              
              <a onclick="return confirm('Apakah Yakin Ingin Menghapus?')" href="hapus_surat.php?id_surat=12" type="button" class="btn btn-danger btn-sm tombol"><i class="far fa-trash-alt"></i>Hapus</a>
            </td>
        </tr>

                <tr>
            <td class="text-center">3</td>
            <td>786/12/10</td>
            <td>-</td>
            <td>Surat Tugas</td>
            <td>20 Desember 2020</td>
            <td class="text-center">
              <a data-toggle="modal" data-target="#formSurat" data-id="11" type="submit" class="btn btn-success btn-sm tampilUbahSurat"><i class="far fa-edit"></i>Edit</a>
              
              <a onclick="return confirm('Apakah Yakin Ingin Menghapus?')" href="hapus_surat.php?id_surat=11" type="button" class="btn btn-danger btn-sm tombol"><i class="far fa-trash-alt"></i>Hapus</a>
            </td>
        </tr>

                <tr>
            <td class="text-center">4</td>
            <td>909/89</td>
            <td>-</td>
            <td>Surat Tugas</td>
            <td>18 November 2020</td>
            <td class="text-center">
              <a data-toggle="modal" data-target="#formSurat" data-id="10" type="submit" class="btn btn-success btn-sm tampilUbahSurat"><i class="far fa-edit"></i>Edit</a>
              
              <a onclick="return confirm('Apakah Yakin Ingin Menghapus?')" href="hapus_surat.php?id_surat=10" type="button" class="btn btn-danger btn-sm tombol"><i class="far fa-trash-alt"></i>Hapus</a>
            </td>
        </tr>

                <tr>
            <td class="text-center">5</td>
            <td>2231/98</td>
            <td>-</td>
            <td>Surat Sakit</td>
            <td>20 Desember 2020</td>
            <td class="text-center">
              <a data-toggle="modal" data-target="#formSurat" data-id="9" type="submit" class="btn btn-success btn-sm tampilUbahSurat"><i class="far fa-edit"></i>Edit</a>
              
              <a onclick="return confirm('Apakah Yakin Ingin Menghapus?')" href="hapus_surat.php?id_surat=9" type="button" class="btn btn-danger btn-sm tombol"><i class="far fa-trash-alt"></i>Hapus</a>
            </td>
        </tr>

                <tr>
            <td class="text-center">6</td>
            <td>434/442</td>
            <td>-</td>
            <td>Surat Keterangan</td>
            <td>18 November 2020</td>
            <td class="text-center">
              <a data-toggle="modal" data-target="#formSurat" data-id="8" type="submit" class="btn btn-success btn-sm tampilUbahSurat"><i class="far fa-edit"></i>Edit</a>
              
              <a onclick="return confirm('Apakah Yakin Ingin Menghapus?')" href="hapus_surat.php?id_surat=8" type="button" class="btn btn-danger btn-sm tombol"><i class="far fa-trash-alt"></i>Hapus</a>
            </td>
        </tr>

                <tr>
            <td class="text-center">7</td>
            <td>98/09/12</td>
            <td>-</td>
            <td>Surat Keterangan</td>
            <td>20 Desember 2020</td>
            <td class="text-center">
              <a data-toggle="modal" data-target="#formSurat" data-id="7" type="submit" class="btn btn-success btn-sm tampilUbahSurat"><i class="far fa-edit"></i>Edit</a>
              
              <a onclick="return confirm('Apakah Yakin Ingin Menghapus?')" href="hapus_surat.php?id_surat=7" type="button" class="btn btn-danger btn-sm tombol"><i class="far fa-trash-alt"></i>Hapus</a>
            </td>
        </tr>

                <tr>
            <td class="text-center">8</td>
            <td>887/99</td>
            <td>-</td>
            <td>Surat Izin</td>
            <td>18 November 2020</td>
            <td class="text-center">
              <a data-toggle="modal" data-target="#formSurat" data-id="6" type="submit" class="btn btn-success btn-sm tampilUbahSurat"><i class="far fa-edit"></i>Edit</a>
              
              <a onclick="return confirm('Apakah Yakin Ingin Menghapus?')" href="hapus_surat.php?id_surat=6" type="button" class="btn btn-danger btn-sm tombol"><i class="far fa-trash-alt"></i>Hapus</a>
            </td>
        </tr>

                <tr>
            <td class="text-center">9</td>
            <td>44/00/4</td>
            <td>-</td>
            <td>Surat Keterangan</td>
            <td>20 Desember 2020</td>
            <td class="text-center">
              <a data-toggle="modal" data-target="#formSurat" data-id="5" type="submit" class="btn btn-success btn-sm tampilUbahSurat"><i class="far fa-edit"></i>Edit</a>
              
              <a onclick="return confirm('Apakah Yakin Ingin Menghapus?')" href="hapus_surat.php?id_surat=5" type="button" class="btn btn-danger btn-sm tombol"><i class="far fa-trash-alt"></i>Hapus</a>
            </td>
        </tr>

                <tr>
            <td class="text-center">10</td>
            <td>44/9/3</td>
            <td>-</td>
            <td>Surat Tugas</td>
            <td>20 Desember 2020</td>
            <td class="text-center">
              <a data-toggle="modal" data-target="#formSurat" data-id="4" type="submit" class="btn btn-success btn-sm tampilUbahSurat"><i class="far fa-edit"></i>Edit</a>
              
              <a onclick="return confirm('Apakah Yakin Ingin Menghapus?')" href="hapus_surat.php?id_surat=4" type="button" class="btn btn-danger btn-sm tombol"><i class="far fa-trash-alt"></i>Hapus</a>
            </td>
        </tr>

                <tr>
            <td class="text-center">11</td>
            <td>44/99/10</td>
            <td>-</td>
            <td>surat tugas</td>
            <td>18 November 2020</td>
            <td class="text-center">
              <a data-toggle="modal" data-target="#formSurat" data-id="3" type="submit" class="btn btn-success btn-sm tampilUbahSurat"><i class="far fa-edit"></i>Edit</a>
              
              <a onclick="return confirm('Apakah Yakin Ingin Menghapus?')" href="hapus_surat.php?id_surat=3" type="button" class="btn btn-danger btn-sm tombol"><i class="far fa-trash-alt"></i>Hapus</a>
            </td>
        </tr>

                <tr>
            <td class="text-center">12</td>
            <td>12/09/88</td>
            <td>-</td>
            <td>Surat Keterangan</td>
            <td>20 Desember 2020</td>
            <td class="text-center">
              <a data-toggle="modal" data-target="#formSurat" data-id="2" type="submit" class="btn btn-success btn-sm tampilUbahSurat"><i class="far fa-edit"></i>Edit</a>
              
              <a onclick="return confirm('Apakah Yakin Ingin Menghapus?')" href="hapus_surat.php?id_surat=2" type="button" class="btn btn-danger btn-sm tombol"><i class="far fa-trash-alt"></i>Hapus</a>
            </td>
        </tr>

                <tr>
            <td class="text-center">13</td>
            <td>12/10/2020</td>
            <td>-</td>
            <td>Surat Ijin</td>
            <td>20 Desember 2020</td>
            <td class="text-center">
              <a data-toggle="modal" data-target="#formSurat" data-id="1" type="submit" class="btn btn-success btn-sm tampilUbahSurat"><i class="far fa-edit"></i>Edit</a>
              
              <a onclick="return confirm('Apakah Yakin Ingin Menghapus?')" href="hapus_surat.php?id_surat=1" type="button" class="btn btn-danger btn-sm tombol"><i class="far fa-trash-alt"></i>Hapus</a>
            </td>
        </tr>

              </tbody>
    </table>
  </div>
</section>

<div class="footer bg-dark">
    <div class="row">
      <div class="col-lg">
        <p class="text-white mt-2 text-center">&copy; E-Surat</p>
      </div>
    </div>
  </div>  
    <!-- Optional JavaScript; choose one of the two! -->
    
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>