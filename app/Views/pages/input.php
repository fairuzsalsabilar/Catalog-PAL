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
    <!-- Header Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid navbar">
        <a class="navbar-brand" href="#">
          <img src="img/logo PAL.png" width="300px" height="29.7px">
        </a>
        <div class="tombollogin">
    <button type="button" class="btn btn-primary btn-lg scrollto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Log In</button>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="pesan">Masukkan Username dan Password yang sudah terdaftar</h5>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Username</label>
                <input type="text" class="form-control" id="username">
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Password</label>
                <input type="text" class="form-control"id="password"></input>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" >Login</button>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    </nav>
    <!-- Akhir Header Navbar -->

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
                    <input type="text" name="dokumen" class="form-control" placeholder="Masukkan Judul Dokumen" id="ctrl1">
                </div>
                <div class="col-sm-7">
                    <label>Judul Proyek</label>
                    <input type="text" name="proyek" class="form-control" placeholder="Masukkan Judul Proyek" id="ctrl1">
                </div>
            </div>
        </form>
        
        <div class="modal-footer">
            <button type="button" class="btn-secondary">Hapus Perubahan</button>
            <button type="button" class="btn btn-primary">Simpan</button>
        </div>
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