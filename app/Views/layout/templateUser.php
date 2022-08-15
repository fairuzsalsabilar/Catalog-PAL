<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> -->

    <!-- CSS -->
    <link rel="stylesheet" href="/css/caripengguna.css">

  </head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img src="/img/logo PAL.png" width="300px" height="29.7px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page">
                <button type="button" class="btn text-white border-white" style="background-color: #03428B;" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Log In</button>
              </a>
            </li>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="pesan">Masukkan Username dan Password yang sudah terdaftar</h5>
                    </div>
                    <div class="modal-body">
                      <form action='/login' method="POST">
                        <p>
                          <?php if (!empty(session()->getFlashdata('gagal'))) { ?>
                            <div class="alert alert-warning">
                              <?php echo session()->getFlashdata('gagal') ?>
                            </div>
                          <?php } ?>
                        </p>
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Username</label>
                          <input type="text" class="form-control" id="inputUsername" name="username">
                        </div>
                        <div class="mb-3">
                          <label for="message-text" class="col-form-label">Password</label>
                          <input type="password" class="form-control" id="inputPassword" name="password"></input>
                        </div>
                        <div class="row justify-content-end">
                          <button type="submit" class="btn btn-primary col-3" style="background-color: #03428B;">Log In</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>     
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Header Navbar -->

    <?= $this->renderSection('content1'); ?>

    <!-- Footer -->
    <footer>
            <div class="container-fluid mb-0 footer">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center tulisan">
                        <p>Copyright &copy; PT PAL 2022 Powered By SI UB 19</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Akhir Footer -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
    </html>