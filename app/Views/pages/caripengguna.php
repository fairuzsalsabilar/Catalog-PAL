    <?= $this->extend('layout/templateUser'); ?>

    <?= $this->section('content1'); ?>

    <!-- Hero -->
    <section class="hero" id ="hero">
        <div class="container mt-4 mx-auto">
          <div class="row">
            <div class="col-12 col-lg-5">
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
                  <div class="btn btn-group-toggle d-flex flex-row justify-content-start" data-toggle="buttons">
                    <label class="btn btn-outline-secondary">
                      <input type="radio" name="kategori" value="LABEL" checked> Label
                    </label>
                    <label class="btn btn-outline-secondary">
                      <input type="radio" name="kategori" value="JUDUL_DOKUMEN"> Dokumen
                    </label>
                    <label class="btn btn-outline-secondary">
                      <input type="radio" name="kategori" value="JUDUL_PROYEK"> Proyek
                    </label>
                    <label class="btn btn-outline-secondary">
                      <input type="radio" name="kategori" value="TANGGAL"> Tahun
                    </label>
                  </div>
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
          <div class="col-12 d-flex inline-block heading">
            <p>Hasil pencarian</p>
          </div>
        </div>
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
                      <th scope="col">File</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $urut=1 + (10*($currentPage-1));
                foreach ($data as $d) {
                  // var_dump($user);
                ?>
                  <tr>
                      <th scope="row"><?php echo $urut++ ?></th>
                      <td><?= $d['LABEL'] ?></td>
                      <td><?= $d['JUDUL_DOKUMEN'] ?></td>
                      <td><?= $d['JUDUL_PROYEK'] ?></td>
                      <td><?= $d['PENYEDIA'] ?></td>
                      <td><?= $d['TANGGAL'] ?></td>
                      <td><?= $d['REFF_KONTRAK'] ?></td>
                      <td><?= $d['FILE'] ?></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
              <?= $pager->links('data_catalog', 'data_catalog_pagination') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Input -->  
    <?= $this->endSection(); ?>

</body>
</html>