    <?= $this->extend('layout/template'); ?>

    <?= $this->section('content'); ?>

    <!-- Hero -->
    <section class="hero" id ="hero">
        <div class="container mt-4 mx-auto">
          <div class="row">
            <div class="col-12 col-lg-5">
              <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success mt-3" role="alert">
                  <?= session()->getFlashdata('pesan'); ?>
                </div>
              <?php endif; ?>
              <h6 class="headingInfo">DOKUMEN</h6>
              <p class="tulisan">Berkas Kebutuhan<br>Anda</p>
            </div>
            <div class="col-12 col-lg-7 d-none d-lg-block">
              <img src="/img/Rectangle.png" class="gambarMain">
            </div>
          </div>

          <!-- Pencarian -->
          <div class="row">
            <div class="col-10 mx-auto Pencarian">
              <form action="" method="get">
                <div class="kolomCari d-flex inline-block">
                  <input class="form-control" name="keyword" type="text" placeholder="Ketik pencarian di sini">
                  <button type="submit" class="btn btn-src">Cari</button>
                </div>
                <div class="kategori">
                  <button class="btn btn-outline-secondary" name="kategori" type="submit">Label</button>
                  <button class="btn btn-outline-secondary" name="kategori" type="submit">Dokumen</button>
                  <button class="btn btn-outline-secondary" name="kategori" type="submit">Proyek</button>
                  <button class="btn btn-outline-secondary" name="kategori" type="submit">Tahun</button>
                </div>
              </form>
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
                <?php
                $no=1 + (10*($currentPage-1));
                foreach ($data as $x) {
                  // var_dump($user);
                ?>
                  <tr>
                      <th scope="row"><?= $no++ ?></th>
                      <td><?= $x['label'] ?></td>
                      <td><?= $x['judul_dokumen'] ?></td>
                      <td><?= $x['judul_proyek'] ?></td>
                      <td><?= $x['penyedia'] ?></td>
                      <td><?= $x['tanggal'] ?></td>
                      <td><?= $x['reff_kontrak'] ?></td>
                      <td scope="row">
                        <div class="btn-group btn-group-sm" role="group" aria-label="Default button group">
                          <a href="<?= base_url('/editBerkas');?>/<?= $x['id_berkas'];?>">
                            <button type="button" class="me-2 btn btn-outline-primary">
                            Edit
                            </button>
                          </a>  
                          <a href="<?= base_url('/delete');?>/<?= $x['id_berkas']; ?>">
                            <button type="button" class="btn btn-danger">
                            Delete
                            </button>
                          </a>
                        </div>
                        <!-- <button type="button" class="btn btn-outline-primary btnEdit">Edit</button></a>
                        <button type="button" class="btn btn-danger btn-delete">Delete</button> -->
                      </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              <?= $pager->links('data_catalog', 'data_catalog_pagination'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Input -->
  <?= $this->endSection(); ?>
    