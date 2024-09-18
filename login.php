<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">

    <title>Form Login</title>
  </head>
  <body>
    <div class="container">
      <h3 class="text-center">Silahkan Login</h3>
      <form action="index.php" method="POST">
        <div class="form-group mb-3">
          <label>Username</label>
          <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username Anda!">
        </div>
        <div class="form-group mb-3">
          <label>Password</label>
          <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password Anda!">
        </div>
        <button type="submit" class="btn btn-dark"><a href="formregistrasi.php">Daftar</a></button>
        <button type="submit" class="btn btn-primary" name="login">Login</button>
      </form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    </div>
  </body>
</html>