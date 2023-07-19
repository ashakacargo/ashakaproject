  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="<?= base_url('../../overview') ?>" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="<?= base_url('../../img/logo-1.png') ?>" alt="">
        <h1>ASHAKA CARGO</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?= base_url('../../') ?>" class="active">Home</a></li>
          <li><a href="<?= base_url('../../about') ?>">About</a></li>
          <!-- <li><a href="services.html">Service</a></li> -->
          <!-- <li><a href="pricing.html">Pricing</a></li> -->
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="<?= base_url('../../darat') ?>">Ekspedisi Darat</a></li>
              <li><a href="<?= base_url('../../laut') ?>">Ekspedisi Laut</a></li>
              <li><a href="<?= base_url('../../udara') ?>">Ekspedisi Udara</a></li>
              <li class="dropdown"><a href="#"><span>Jasa Kirim</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="<?= base_url('../../motor') ?>">Motor</a></li>
                  <li><a href="<?= base_url('../../mobil') ?>">Mobil</a></li>
                  <li><a href="<?= base_url('../../alatberat') ?>">Alat Berat</a></li>
                </ul>
              </li>
              <li><a href="<?= base_url('../../sewatruck') ?>">Sewa Truck</a></li>
              <li><a href="<?= base_url('../../jasapindahan') ?>">Jasa Pindahan</a></li>
            </ul>
          </li>
          <li><a href="<?= base_url('../../contact') ?>">Contact</a></li>
          <!-- <li><a class="get-a-quote" href="get-a-quote.html">Get a Quote</a></li> -->
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->