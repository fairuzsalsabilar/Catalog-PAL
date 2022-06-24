<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/caripengguna.css">
</head>
<body>
    <header id="header" class="fixed-top">
        <div class="header-left">
            <a class="logo mr-auto" href="#">
                <img src="img/logo PAL.png" width="300" height="29.7" alt="">
            </a>
        </div>
        <!-- Btn Login -->
        <div class="header-right">  
            <button type="button" class="btn-login btn-primary btn-lg scrollto">Log in</button>
        </div>
    </header>

    <!-- Cari atas -->
        <div class="alert alert-primary" role="alert">
            <p class="text1">DOKUMEN</p><br>
            <p class="text2"><strong>Berkas Kebutuhan<br>Anda</strong></p>
        </div>

    <!-- gambar -->
    <div class="imgMain">
        <img src="img/rectangle.png">
    </div>

    <!-- cari -->
    <form class="row g-3">
  <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">Email</label>
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
  </div>
</form>
</html>