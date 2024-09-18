<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="form_registrasi.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
    <title>Form Registrasi</title>
  </head>
  <body>
    <div class="container">
      <h2 class="text-center">Halaman Registrasi</h2>
      <hr>
      <form action="cek_registrasi.php" method="POST">

        <div class="form-group">
          <label for="username" class="form-label">Username</label>
          <div class="input-group">
            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username Anda!">
          </div>
        </div>

        <div class="form-group">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password Anda!">
        </div>

        <div class="form-group">
          <label for="password2" class="form-label">Konfirmasi Password</label>
          <input type="password" class="form-control" id="password2" name="password2" placeholder="Konfirmasikan Password Anda!">
        </div>

        <div class="form-group">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Anda!">
        </div>
        <div class="form-group">
          <label for="nama" class="form-label" id="name" name="nama">Akses</label>
        </div>
        <select class="form-select" name="akses" id="akses" aria-label="Default select example">
          <option selected>Select</option>
          <option value="admin">Admin</option>
          <option value="petugas">Petugas</option>
        </select>

        <div class="form-group mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email Anda!">
        </div>
          <button type="registrasi" class="btn btn-secondary" name="register">Registrasi</button>
          <button type="reset" class="btn btn-success" name="reset">Reset</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>