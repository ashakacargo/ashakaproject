  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">Gratis Jemput Barang Sekarang Juga Khusus Area DKI Jakarta & Bekasi</h2><br>
          <p data-aos="fade-up" data-aos-delay="100">Tracking Status Kiriman Anda</p>

          <form action="<?= base_url('../../search') ?>" method="get" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
            <input type="text" name="keyword" class="form-control" placeholder="Masukkan nomor Airwaybill">
            <button type="submit" class="btn btn-primary">Track</button>
          </form>

          <div class="row gy-4 d-flex justify-content-between" data-aos="fade-up" data-aos-delay="400">

            <?php if(!empty($data)){ ?>
              <div class="col-xs-4 col-xs-offset-4 text-center">
                <table class="table table-bordered table-light">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Connote</th>
                      <th scope="col">Nama Pelanggan</th>
                      <th scope="col">Asal</th>
                      <th scope="col">Tujuan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data as $row) { ?>
                    <tr>
                      <th scope="row"><?= $row['track_connote'] ?></th>
                      <td><?= $row['track_pelanggan'] ?></td>
                      <td><?= $row['track_asal'] ?></td>
                      <td><?= $row['track_tujuan'] ?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            <?php } ?>
            <!-- <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
                <p>Trailer-Trucks</p>
              </div>
            </div> -->
            <!-- End Stats Item -->

            <!-- <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                <p>Wingbox-Trucks</p>
              </div>
            </div> -->
            <!-- End Stats Item -->

            <!-- <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="80" data-purecounter-duration="1" class="purecounter"></span>
                <p>Box-Trucks</p>
              </div>
            </div> -->
            <!-- End Stats Item -->

            <!-- <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
                <p>Blindvan</p>
              </div>
            </div> -->
            <!-- End Stats Item -->

          </div>
        </div>

        <div class="col-lg-3 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="<?php echo base_url('../../img/hero-img-1.svg') ?>" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->