<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/home.css">

  </head>

  <body>
 
    <!-- Header Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid navbar">
        <a class="navbar-brand" href="input.php">
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

    <!-- Main -->
    <div class="container-fluid home">

      <!-- Gambar -->
      <div class="kotak">
        <h6>INFORMASI</h6>
        <a class="tulisan">Katalog Berkas<br>PT.PAL Indonesia</a>
      </div>
      <div class="row justify-content-end">

      <!-- informasi -->
        <img src="img/foto-home.jpg" class="img-fluid imgMain" width="871" height="577px">
        <div class="kotakElemen"></div>
  
      <!-- Btn Search --> 
        <div class="btn-cari">
          <button type="button" class="btn-search btn-primary btn-lg scrollto">
            <img src="img/search.png" class="search" width="26px" height="auto">
          </button>
        </div>
      </div>
    </div>
    <!-- Akhir Main -->

    <!-- Informasi Jumlah Berkas -->
    <div class="container data">
      <div class="elemen el1"></div>
      <div class="elemen el2"></div>
      <div class="elemen el3"></div>
      <div class="elemen el4">
        <div class="deskripsi">
          <h1>1.045</h1>
          <p>Data</p>
        </div>
      </div>
      <div class="elemen el3"></div>
      <div class="elemen el2"></div>
      <div class="elemen el1"></div>
    </div>
    <!-- Akhir Info Jumlah Berkas -->

    <!-- Kolom Cari -->
    <div class="container-fluid pencarian">
      <div class="row kotakcari">
        <div class="col-12 col-md-6 kiri">
          <img src="img/img cari.png" class="imgCari" width="552.76px" height="457px">
        </div>
        <div class="col-12 col-md-6 kanan">
        <div class="penjelasan">
          <h6>PENCARIAN</h6>
          <a>Cari Berkas<br>Kebutuhan Anda</a>
          <p>Pilih salah satu kategori pencarian lalu masukkan kata kunci</p>
        </div>
        <div class="kolomCari">
          <div class="pilihanKategori">  
            <a class="btn btn-outline-secondary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Label</a>
            <button class="btn btn-outline-secondary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2"> <span> Judul </span> Dokumen</button>
            <a class="btn btn-outline-secondary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample3"><span> Judul </span> Proyek</a>
            <button class="btn btn-outline-secondary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample4">Tahun</button>
          </div>
          <div class="carii">
            <input class="form-control me-2 cari" type="search" placeholder="Ketik pencarian di sini" aria-label="Search">
            <button type="button" class="btn btn-primary btn-src">Cari</button>
          </div>
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
    <div class="container-fluid prosedurPengguna">
      <div class="row pp">
        <div class="col-12">
          <div class="row justify-content-center">
        <div class="col-lg col-md col-sm prosedur">
          <div class="atas"></div>
          <div class="logoProsedur">
            <img src="img/icon-web.png" alt="">
          </div>
          <h3>WEBSITE</h3>
          <p>Membuka website terlebih<br>dahulu</p>
        </div>
        <div class="angka1">
          <h3>1</h3>
        </div>
        <div class="col-lg col-md col-sm prosedur">
          <div class="atas"></div>
          <div class="logoProsedur">
            <img src="img/icon-web.png" alt="">
          </div>
          <h3>WEBSITE</h3>
          <p>Membuka website terlebih<br>dahulu</p>
        </div>
        <div class="angka2">
          <h3>2</h3>
        </div>
        <div class="col-lg col-md col-sm prosedur">
          <div class="atas"></div>
          <div class="logoProsedur">
            <img src="img/icon-web.png" alt="">
          </div>
          <h3>WEBSITE</h3>
          <p>Membuka website terlebih<br>dahulu</p>
        </div>
        <div class="angka3">
          <h3>3</h3>
        </div>
        <div class="col-lg col-md col-sm prosedur">
          <div class="atas"></div>
          <div class="logoProsedur">
            <img src="img/icon-web.png" alt="">
          </div>
          <h3>WEBSITE</h3>
          <p>Membuka website terlebih<br>dahulu</p>
        </div>
        <div class="angka4">
          <h3>4</h3>
        </div>
        </div>
        </div>
      </div>
    </div>
    <!-- Akhir Prosedur Pengguna -->
    

  </body>
  <footer>
    <div class="container-fluid footer">
    <p>Copyright &copy; PT PAL 2022 Powered By SI UB 19</p>
    </div>
</footer>
</html>