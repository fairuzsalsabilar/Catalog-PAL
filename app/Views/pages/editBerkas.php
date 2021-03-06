<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berkas</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/editBerkas.css">
</head>
<body>

    <!-- Header Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container navbar">
        <a class="navbar-brand" href="#">
          <img src="/img/logo PAL.png">
        </a>
        <div class="tombollogin ml-auto">
          <a class="nav-item nav-link btn" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Log In</a>
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

    <!-- Heading -->
    <div class="container cheading mt-4">
        <p class="heading">Edit Berkas</p>
    </div>
    <!-- Akhir Heading -->

    <!-- Inputan -->
    <section class="inputan" id="inputan">
      <div class="container">
        <form action="/update/<?= $berkas['id_berkas']; ?>" method="POST">
          <?= csrf_field();?>
          <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
              <p class="labelInput mt-md-5">Label</p>
                <div class="kolomInput">
                  <input type="text" name="label" value="<?= $berkas['label']; ?>" class="form-control <?= ($validation->hasError('label')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Label">
                  <div class="invalid-feedback">
                    <?= $validation->getError('label'); ?>
                  </div>
                  <input type="text" name="id_berkas" value="<?= $berkas['id_berkas']; ?>" class="form-control" hidden>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
              <p class="labelInput mt-4 mt-md-5">Reff Kontrak</p>
                <div class="kolomInput">
                  <input type="text" name="reff_kontrak" value="<?= $berkas['reff_kontrak']; ?>" class="form-control <?= ($validation->hasError('reff_kontrak')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Reff Kontrak">
                  <div class="invalid-feedback">
                    <?= $validation->getError('reff_kontrak'); ?>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
              <p class="labelInput mt-4 mt-md-4">Tanggal</p>
                <div class="kolomInput">
                  <input id="inputText4" name="tanggal" value="<?= $berkas['tanggal']?>" type="date" class="form-control <?= ($validation->hasError('tanggal')) ? 'is-invalid' : ''; ?>" required>
                  <!-- <input type="date" name="tanggal" value="<?= $berkas['tanggal']; ?>" class="form-control"> -->
                  <div class="invalid-feedback">
                    <?= $validation->getError('tanggal'); ?>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
              <p class="labelInput mt-4  mt-md-4">Penyedia</p>
                <div class="kolomInput">
                  <input type="text" name="penyedia" value="<?= $berkas['penyedia']; ?>" class="form-control <?= ($validation->hasError('penyedia')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Penyedia">
                  <div class="invalid-feedback">
                    <?= $validation->getError('penyedia'); ?>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
              <p class="labelInput mt-4 mt-md-4">Judul Dokumen</p>
                <div class="kolomInput">
                  <input type="text" name="judul_dokumen" value="<?= $berkas['judul_dokumen']; ?>" class="form-control <?= ($validation->hasError('judul_dokumen')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Judul Dokumen">
                  <div class="invalid-feedback">
                    <?= $validation->getError('judul_dokumen'); ?>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
              <p class="labelInput mt-4 mt-md-4">Judul Proyek</p>
                <div class="kolomInput">
                  <input type="text" name="judul_proyek" value="<?= $berkas['judul_proyek']; ?>" class="form-control <?= ($validation->hasError('judul_proyek')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Judul Proyek">
                  <div class="invalid-feedback">
                    <?= $validation->getError('judul_proyek'); ?>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
              <div class="mt-4 d-grid d-md-block mb-5">
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
    <!-- <div class="container buttonInput">
      <div class="row ml-0 mr-0 d-flex rowInput">
        <div class="btnBatalSimpan">
            <input class="btn btn-outline-danger" type="submit" value="Hapus Perubahan Data">
        </div>
        <div class="btnSimpan">
            <input class="btn" type="submit" value="Simpan Data">
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