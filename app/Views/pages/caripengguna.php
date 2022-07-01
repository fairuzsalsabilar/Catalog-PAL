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
    <header id="header">
    <div class="container navbar">
        <div class="header-left">
            <a class="logo mr-auto" href="#">
                <img src="img/logo PAL.png" width="300" height="29.7" alt="">
            </a>
        </div>
        <!-- Btn Login -->
        <div class="header-right">  
            <button type="button" class="btn-login btn-primary btn-lg scrollto">Log in</button>
        </div>
        <!-- <div class="tombollogin">
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
            <button type="button" class="btn btn-primary">Login</button>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script> -->
    </div> 
    </header>
    
    <div class="container destinasi">
        <div class="judul">
            <p>DOKUMEN</p>
            <h1><strong>Berkas Kebutuhan<br>Anda</strong></h1>
        </div>
        <div class="imgMain">
            <img src="img/rectangle.png">
        </div>
    </div>

    <!-- form -->
<div class="container destinasi">
    <div class="pilihan">
        <div class="search">
            <input class="form-control me-2 cari" type="search"aria-label="Search">
            <button type="button" class="btn">Cari</button>
        </div>
        <div class="multiple">
            <button type="button" class="lebar">Label</button>
            <button type="button" class="lebar">Judul Dokumen</button>
            <button type="button" class="lebar">Judul Proyek</button>
            <button type="button" class="lebar">Tahun</button>          </div>
        </div>
    </div>
</div>
</body>
<footer id="footer">
    <div class="container scd-foot padding-top-small padding-bottom-smaller">
		<div class="row">
			<div style="color: white" class="col-md-6">
				<p>Copyright  &copy; PT PAL 2022 Powered By SI UB 19</p>					
			</div>
        </div>
</footer>
</html>