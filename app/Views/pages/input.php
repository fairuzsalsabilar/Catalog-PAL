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
    <link rel="stylesheet" href="/css/input.css">
</head>
<body>

    <!-- Header Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container navbar">
        <a class="navbar-brand" href="/crud">
          <img src="/img/logo PAL.png">
        </a>
        <div class="tombollogin ml-auto">
          <a class="nav-item nav-link btn" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Log Out</a>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="pesan">Apakah Anda Yakin Akan Log Out?</h5>
              </div>
              <div class="modal-body ">
                <form>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" style="background-color: #03428B;">Log Out</button>
                </form>
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
              <h6 class="headingInfo">INPUT BERKAS</h6>
              <p class="tulisan">Buat Berkas<br>Baru</p>
            </div>
            <div class="col-12 col-lg-7 d-none d-lg-block">
              <img src="/img/Rectangle.png" class="gambarMain">
            </div>
          </div>
        </div>
    </section>
    <!-- Akhir Hero -->

    <!-- Inputan -->
    <section class="inputan" id="inputan">
      <div class="container">
        <form id="form" action="/save" method="post">
          <?= csrf_field(); ?>
          <div class="row">
            <div class="col-12 heading">
              <p>Input Berkas</p>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
              <p class="labelInput">Label</p>
                <div class="kolomInput">
                  <input type="text" name="label" class="form-control <?= ($validation->hasError('label')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Label" autofocus required>
                  <div class="invalid-feedback">
                    <?= $validation->getError('label'); ?>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
              <p class="labelInput mt-sm-4">Reff Kontrak</p>
                <div class="kolomInput">
                  <input type="text" name="reff_kontrak" class="form-control <?= ($validation->hasError('reff_kontrak')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Reff Kontrak" required>
                  <div class="invalid-feedback">
                    <?= $validation->getError('reff_kontrak'); ?>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
              <p class="labelInput mt-4">Tanggal</p>
                <div class="kolomInput">
                  <input type="date" name="tanggal" class="form-control" placeholder="Masukkan Tanggal" required>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
              <p class="labelInput mt-4  mt-md-4">Penyedia</p>
                <div class="kolomInput">
                  <input type="text" name="penyedia" class="form-control" placeholder="Masukkan Penyedia" required>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
              <p class="labelInput mt-4">Judul Dokumen</p>
                <div class="kolomInput">
                  <input type="text" name="judul_dokumen" class="form-control <?= ($validation->hasError('judul_dokumen')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Judul Dokumen" required>
                  <div class="invalid-feedback">
                    <?= $validation->getError('judul_dokumen'); ?>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
              <p class="labelInput mt-4">Judul Proyek</p>
                <div class="kolomInput">
                  <input type="text" name="judul_proyek" class="form-control <?= ($validation->hasError('judul_proyek')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Judul Proyek" required>
                  <div class="invalid-feedback">
                    <?= $validation->getError('judul_proyek'); ?>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
              <div class="mt-3 d-grid d-md-block">
                <input class="btn btn-outline-danger" type="reset" value="Hapus Perubahan Data">
                <button class="btn text-white" type="submit" style="background-color: #03428B;">Simpan Data</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
    <!-- Akhir Inputan -->

    <!-- Btn Simpan & Delete -->
    <!-- <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 mt-5 mb-5 d-flex justify-content-end btnAll">
          <div class="col-6 col-md-3 btnDelete">
            <input class="btn btn-outline-primary" type="submit" value="Hapus Perubahan">
          </div>
          <div class="col-6 col-md-3 btnSimpan">
            <input class="btn btn-primary" type="submit" value="Simpan Data">
          </div>
        </div>
      </div>
    </div> -->
    
    <!-- Akhir Btn Simpan & Delete -->

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

</body>
</html>