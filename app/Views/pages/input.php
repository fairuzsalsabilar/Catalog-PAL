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
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container navbar">
        <a class="navbar-brand" href="#">
          <img src="img/logo PAL.png" width="300px" height="29.7px">
        </a>
        <div class="tombollogin ml-auto">
          <a class="nav-item nav-link btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Log In</a>
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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        </div>
      </div>
    </nav>
    <!-- Akhir Header Navbar -->

    <!-- Hero -->
    <section class="hero" id ="hero">
        <div class="container mt-4 mx-auto">
          <div class="row">
            <div class="col-12 col-lg-5">
              <h6 class="headingInfo">DOKUMEN</h6>
              <p class="tulisan">Berkas Kebutuhan<br>Anda</p>
            </div>
            <div class="col-12 col-lg-7 d-none d-lg-block">
              <img src="img/Rectangle.png" class="gambarMain">
            </div>
          </div>
        </div>
    </section>
    <!-- Akhir Hero -->
</body>
</html>