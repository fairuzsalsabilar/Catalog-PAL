<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CRUD Admin</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/crud.css">

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

          <!-- Pencarian -->
          <div class="row">
            <div class="col-10 mx-auto Pencarian">
              <div class="kolomCari d-flex inline-block">
                <input class="form-control" type="search" placeholder="Ketik pencarian di sini" aria-label="Search">
                <button type="button" class="btn btn-primary btn-src">Cari</button>
              </div>
              <div class="kategori">
                <a class="btn btn-outline-secondary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Label</a>
                <button class="btn btn-outline-secondary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2"> <span> Judul </span> Dokumen</button>
                <a class="btn btn-outline-secondary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample3"><span> Judul </span> Proyek</a>
                <button class="btn btn-outline-secondary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample4">Tahun</button>
              </div>
            </div>
          </div>
          <!-- Akhir Pencarian -->
        </div>
    </section>
    <!-- Akhir Hero -->

    <!-- Input -->
    <div class="hasilCari" id="hasilCari">
      <div class="container hslCari">
        <div class="row">
          <div class="col-12 kolomHasilCari">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr class="atas">
                      <th scope="col">No</th>
                      <th scope="col">Label</th>
                      <th scope="col">Judul Dokumen</th>
                      <th scope="col">Judul Proyek</th>
                      <th scope="col">Penyedia</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Reff Kontrak</th>
                      <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <th scope="row"><?php echo $urut++ ?></th>
                      <td>A1</td>
                      <td>LAPORAN HASIL PENGETESAN/COMMISSIONING PEKERJAAN MEKANIKAL</td>
                      <td>KONSULTAN MK UNTUK PAKET C & KONSTRUKSI PENGAWAS UNTUK PAKET B1,B2,B3 & C</td>
                      <td>INDRA KARYA</td>
                      <td>10 NOVEMBER 2016</td>
                      <td>SPER/308/8A000/X/2016</td>
                      <td scope="row">
                        <a href="input.php?op=edit$id=<?php echo $id?>"><button type="button" class="btn btn-outline-primary btnEdit">Edit</button></a>
                        <button type="button" class="btn btn-danger btn-delete">Delete</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Input -->

</body>
</html>