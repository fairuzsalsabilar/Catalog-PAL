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
                  <a href="<?php echo site_url('/login')?>"class="btn btn-primary" style="background-color: #03428B;">Log Out</a>
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

    <!-- Heading -->
    <div class="container cheading mt-4">
        <p class="heading">Edit Berkas</p>
    </div>
    <!-- Akhir Heading -->

    <!-- Inputan -->
    <section class="inputan" id="inputan">
      <div class="container">
        <form action="/update/<?= $berkas['ID_BERKAS']; ?>" method="POST" enctype="multipart/form-data">
          <?= csrf_field();?>
          <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
              <p class="labelInput mt-md-5">Label</p>
                <div class="kolomInput">
                  <input type="text" name="label" value="<?= $berkas['LABEL']; ?>" class="form-control <?= ($validation->hasError('label')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Label">
                  <div class="invalid-feedback">
                    <?= $validation->getError('label'); ?>
                  </div>
                  <input type="text" name="id_berkas" value="<?= $berkas['ID_BERKAS']; ?>" class="form-control" hidden>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
              <p class="labelInput mt-4 mt-md-5">Reff Kontrak</p>
                <div class="kolomInput">
                  <input type="text" name="reff_kontrak" value="<?= $berkas['REFF_KONTRAK']; ?>" class="form-control <?= ($validation->hasError('reff_kontrak')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Reff Kontrak">
                  <div class="invalid-feedback">
                    <?= $validation->getError('reff_kontrak'); ?>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
              <p class="labelInput mt-4 mt-md-4">Tanggal</p>
                <div class="kolomInput">
                  <input id="inputText4" name="tanggal" value="<?= $berkas['TANGGAL']?>" type="date" class="form-control <?= ($validation->hasError('tanggal')) ? 'is-invalid' : ''; ?>" required>
                  <!-- <input type="date" name="tanggal" value="<?= $berkas['TANGGAL']; ?>" class="form-control"> -->
                  <div class="invalid-feedback">
                    <?= $validation->getError('tanggal'); ?>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
              <p class="labelInput mt-4  mt-md-4">Penyedia</p>
                <div class="kolomInput">
                  <input type="text" name="penyedia" value="<?= $berkas['PENYEDIA']; ?>" class="form-control <?= ($validation->hasError('penyedia')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Penyedia">
                  <div class="invalid-feedback">
                    <?= $validation->getError('penyedia'); ?>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
              <p class="labelInput mt-4 mt-md-4">Judul Dokumen</p>
                <div class="kolomInput">
                  <input type="text" name="judul_dokumen" value="<?= $berkas['JUDUL_DOKUMEN']; ?>" class="form-control <?= ($validation->hasError('judul_dokumen')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Judul Dokumen">
                  <div class="invalid-feedback">
                    <?= $validation->getError('judul_dokumen'); ?>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
              <p class="labelInput mt-4 mt-md-4">Judul Proyek</p>
                <div class="kolomInput">
                  <input type="text" name="judul_proyek" value="<?= $berkas['JUDUL_PROYEK']; ?>" class="form-control <?= ($validation->hasError('judul_proyek')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan Judul Proyek">
                  <div class="invalid-feedback">
                    <?= $validation->getError('judul_proyek'); ?>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-6">
              <p class="labelInput mt-4">File Dokumen</p>
            <div class="kolomInput">
              <input type="file" name="file" value="<?= $berkas['FILE']; ?>" class="form-control <?= ($validation->hasError('file')) ? 'is-invalid' : ''; ?>" placeholder="Masukkan File">
            </div>
            <div class="invalid-feedback">
                    <?= $validation->getError('file'); ?>
                  </div>
            </div>
            <div class="col-12 col-md-6 col-lg-12 d-flex justify-content-end">
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