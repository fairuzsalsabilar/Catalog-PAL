<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> -->

    <!-- CSS -->
    <link rel="stylesheet" href="/css/home.css">

  </head>

<body>
 
    <!-- Header Navbar -->
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


    <!-- Main -->
    <div class="container mx-auto row">

      <!-- Gambar -->
      <div class="container col-lg-12 col-md-6 bgMain" style="background-image: url(img/foto-home.jpg);">
        <div class="kotak container h-50 w-50 mb-5 col-md-6">
          <h6 class="ms-2">INFORMASI</h6>
          <p class="tulisan ms-3">Katalog Berkas<br>PT. PAL Indonesia</p>
          <div class="position-relative pt-5">
          </div>
        </div>
      </div>
      <div class="btn-cariHome d-flex justify-content-end">
          <a href="<?php echo site_url('/caripengguna')?>" button type="button" class="btn-search d-flex align-items-center justify-content-center btn-primary btn-lg m-0 rounded border border-2">
            <img src="/img/search.png" class="gbr-cari" width="26px" height="auto">
          </button></a>
        </div>

      <!-- <div class="kotak">
        <h6>INFORMASI</h6>
        <a class="tulisan">Katalog Berkas<br>PT.PAL Indonesia</a>
      </div> -->
      <!-- <div class="row relative"> -->
        <!-- informasi -->
        <!-- <img src="/img/foto-home.jpg" class="img-fluid w-75 m-0 col-md-12" width="871" height="577px"> -->
        <!-- <div class="kotakElemen"></div> -->
        <!-- Btn Search --> 
        <!-- <div class="btn-cari m-0 col-md-6 float-start">
          <button type="button" class="btn-search btn-primary btn-lg m-0">
            <img src="/img/search.png" class="" width="26px" height="auto">
          </button>
        </div> -->
      <!-- </div> -->

    </div>
    <!-- Akhir Main -->

    <!-- Informasi Jumlah Berkas -->
    <div class="container row data mx-auto">
      <div class="elemen col-4 col-2 w-25 el1"></div>
      <div class="elemen col-4 col-2 el2"></div>
      <div class="elemen col-4 col-2 el3"></div>
      <div class="elemen col-4 col-2 el4 position-relative">
        <div class="position-absolute top-50 start-50 translate-middle">
          <img src="/img/boat (4).png" class="w-100 h-auto img-fluid">
        </div>
      </div>
      <div class="elemen col-4 col-2 el3"></div>
      <div class="elemen col-4 col-2 el2"></div>
      <div class="elemen col-4 col-2 w-25 el1"></div>
    </div>
    <!-- Akhir Info Jumlah Berkas -->

    <!-- Kolom Cari -->
    <div class="container-fluid pencarian">
      <div class="row kotakcari pt-5">
        <div class="col-md-6 mt-5">
          <img src="/img/img cari.png" class="w-100 h-auto img-fluid hhh">
        </div>
        <div class="col-md-6 pt-5 mt-3">
          <div class="row">
            <div class="penjelasan col-md-12 mt-5 mb-5">
              <h5 class="">KATALOG PT. PAL Indonesia</h5>
              <a style="font-size: 50px; color: #03428B; font-weight: 500; margin-bottom: 3%; line-height: 70px;">Cari Berkas<br>Kebutuhan Anda</a><br><br>
              <p>Katalog PT. PAL Indonesia merupakan sebuah katalog yang digunakan untuk membantu mencari semua data yang tersedia di PT. PAL Indonesia. Dengan adanya Aplikasi Katalog Dokumen Berbasis Website ini dapat memudahkan para karyawan khususnya Divisi Kawasan untuk menemukan atau mencari dokumen yang dibutuhkan.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Kolom Cari -->

    <!-- Prosedur Pengguna -->
    <div class="tulisanProsedur">
      <h1>Prosedur Pengguna</h1>
    </div>
    <div class="kotakBawah"></div>
    <div class="container-fluid prosedurPengguna m-0">
      <div class="row pp mx-auto">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-sm col-md col-sm prosedur position-relative">
              <div class="atas"></div>
              <div class="logoProsedur">
                <img src="/img/icon-web.png" alt="">
              </div>
              <h3>WEBSITE</h3>
              <p>Membuka website terlebih dahulu</p>
              <div class="angka1 position-absolute bottom-0 start-0">
                <h3>1</h3>
              </div>
            </div>
            <div class="col-sm col-md col-sm prosedur position-relative">
              <div class="atas"></div>
              <div class="logoProsedur">
                <img src="/img/icon-search.png" alt="">
              </div>
              <h3>PENCARIAN</h3>
              <p>Masuk ke kolom Pencarian</p>
              <div class="angka1 position-absolute bottom-0 start-0">
                <h3>2</h3>
              </div>
            </div>
            <div class="col-sm col-md col-sm prosedur position-relative">
              <div class="atas"></div>
              <div class="logoProsedur">
                <img src="img/input.png" alt="">
              </div>
              <h3>INPUT</h3>
              <p>Masukkan nama berkas yang ingin dicari</p>
              <div class="angka1 position-absolute bottom-0 start-0">
                <h3>3</h3>
              </div>
            </div>
            <div class="col-sm col-md col-sm prosedur position-relative">
              <div class="atas"></div>
              <div class="logoProsedur">
                <img src="img/output.png" alt="">
              </div>
              <h3>OUTPUT</h3>
              <p>Berkas yang dicari akan ditampilkan</p>
              <div class="angka1 position-absolute bottom-0 start-0">
                <h3>4</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Prosedur Pengguna -->
    

    <footer>
        <div class="container-fluid mb-0 mt-0 footer">
            <div class="row">
                <div class="col-12 d-flex justify-content-center tulisan">
                    <p>Copyright &copy; PT PAL 2022 Powered By SI UB 19</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>