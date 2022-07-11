<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pencarian Admin</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/crud.css">

  </head>
<body>
    <!-- Header Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid navbar">
        <a class="navbar-brand" href="#">
          <img src="img/logo PAL.png" width="300px" height="29.7px">
        </a>
        <div class="tombolinput ml-auto">
          <a class="nav-item nav-link btn btn-outline-primary" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Tambah Data</a>
        </div>
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

    <!-- Gambar -->
    <div class="container destinasi">
        <div class="judul">
            <p>DOKUMEN</p>
            <h1><strong>Berkas Kebutuhan<br>Anda</strong></h1>
        </div>
        <div class="imgMain">
            <img src="img/rectangle.png">
        </div>
    </div>
    <!-- Akhir Gambar -->

    <!-- Form -->
    <!-- form -->
    <div class="container destinasi">
        <div class="pilihan">
            <div class="search">
                <input class="form-control me-2 cari" type="search"aria-label="Search">
                <button type="button" class="btn1">Cari</button>
            </div>
            <div class="multiple">
                <button type="button" class="lebar">Label</button>
                <button type="button" class="lebar">Judul Dokumen</button>
                <button type="button" class="lebar">Judul Proyek</button>
                <button type="button" class="lebar">Tahun</button>
            </div>
        </div>
    </div>
    <!-- Akhir Form -->

    <!-- Tabel -->
    <div class="container tabel">
        <table class="table table-bordered">
            <thead>
                <tr>
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
                        <a href="input.php?op=edit$id=<?php echo $id?>"><button type="button" class="btn btn-outline-primary">Edit</button></a>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Akhir Tabel -->
</body>
</html>