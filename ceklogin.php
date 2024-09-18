<?php
//mengaktifkan session start
session_start();

//koneksi ke database
include 'koneksi.php';

//cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
  $id= $_COOKIE['id'];
  $key= $_COOKIE['key'];

  //ambil username berdasarkan id
  $db = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");

  $row = mysqli_fetch_assoc($db);

  //cek cookie dengan username
  if($key === hash('sha256', $row['username'])){
    $_SESSION['login'] = true;
  }
}

//masuk ke session
if(isset($_SESSION["login"])){
  header("location: index.php");
  exit;
}


//cek username dan password
if(isset($_POST['login'])){
  $username = $_POST["username"];
  $password = $_POST["password"];

  $cek = mysqli_query($conn, "SELECT * FROM user WHERE username ='$username'");

  if (mysqli_num_rows($cek) === 1){
      //cek password
      $row = mysqli_fetch_assoc($cek);
      if(password_verify($password,$row["password"])){
        //cek dan buat session
        $_SESSION["login"] = true;
        //buat dan cek cookie
        if(isset($_POST["remember"])){
          setcookie('id',$row['id'], time() + 60);
          setcookie('key', hash('sha256', $row['username']), time() + 60);
        }
      echo "
        <script>
          alert('Anda berhasil login');
          document.location.href = 'index.php';
        </script>
        ";
      }
    }
  $error= true;
}
?>