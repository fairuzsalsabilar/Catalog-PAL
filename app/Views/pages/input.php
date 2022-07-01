<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Berkas</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/input.css">
</head>
<body>
    <header id="header">
        <div class="container navbar">
            <div class="header-left">
                <a class="logo mr-auto" href="#">
                    <img src="img/logo PAL.png" width="300" height="29.7" alt="">
                </a>
            </div>
            <!-- Btn Login -->
            <div class="header-right"> 
                <a href="#">
                    <button type="button" class="btn-login btn-primary btn-lg scrollto">Log in</button>
                </a>
            </div>
        </div> 
    </header>

    <div class="container destinasi">
        <div class="judul">
            <p>INPUT BERKAS</p>
            <h1><strong>Buat Berkas<br>Baru</strong></h1>
        </div>
        <div class="imgMain">
            <img src="img/rectangle.png">
        </div>
    </div>

<!-- form -->
    <div class="container form">
        <form id="form" method="POST">
                <p><strong>Input Berkas</strong></p>
            <div class="row">
                <div class="col-sm-7">
                    <label>Label</label>
                    <input type="text" name="label" class="form-control" placeholder="Masukkan Label">
                </div>
                <div class="col">
                    <label>Reff Kontrak</label>
                    <input type="text" name="reffkontrak" class="form-control" placeholder="Masukkan Reff Kontrak">
                </div>
                <div class="col-sm-7">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" class="form-control">
                </div>
                <div class="col">
                    <label>Penyedia</label>
                    <input type="text" name="penyedia" class="form-control" placeholder="Masukkan Nama Penyedia">
                </div>
                <div class="col-sm-7">
                    <label>Judul Dokumen</label>
                    <input type="text" name="dokumen" class="form-control" placeholder="Masukkan Judul Dokumen">
                </div>
                <div class="col-sm-7">
                    <label>Judul Proyek</label>
                    <input type="text" name="proyek" class="form-control" placeholder="Masukkan Judul Proyek">
                </div>
            </div>
        </form>
        <!-- <div class="tulisan">
            <h3>Input Berkas</h3>
        </div>
        <div class="form">
            <label class="form-label">Label</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Label">
            <label class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="exampleFormControlInput1">
            <label class="form-label">Judul Dokumen</label>
            <input type="text" class="form-control" id="dokumen" placeholder="Masukkan Judul Dokumen">
        </div> -->
    </div>
</body>
</html>