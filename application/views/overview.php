<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("_partials/head.php") ?>
</head>

<body>

  <?php $this->load->view("_partials/header.php") ?>
  <?php $this->load->view("_partials/hero.php") ?>

  <main id="main">

  <?php $this->load->view("_partials/about-us.php") ?>
  <?php $this->load->view("_partials/services.php") ?>
  <?php $this->load->view("_partials/call-to-action.php") ?>
  <?php $this->load->view("_partials/featured-services.php") ?>
  <?php //$this->load->view("_partials/features.php") ?>
  <?php //$this->load->view("_partials/pricing.php") ?>
  <?php //$this->load->view("_partials/testimonials.php") ?>
  <?php //$this->load->view("_partials/faq.php") ?>
  <?php $this->load->view("_partials/contact.php") ?>

  </main><!-- End #main -->

  <?php $this->load->view("_partials/footer.php") ?>
  <?php $this->load->view("_partials/scrolltop.php") ?>

  <div id="preloader"></div>

  <?php $this->load->view("_partials/js.php") ?>

</body>
</html>