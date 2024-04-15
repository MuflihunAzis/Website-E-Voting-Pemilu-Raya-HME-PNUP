<!doctype html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="GYm,fitness,business,company,agency,multipurpose,modern,bootstrap4">

  <!-- theme meta -->
  <meta name="theme-name" content="gymfit" />

  <meta name="author" content="Themefisher.com">

  <title>HME-PNUP | Pemilu Raya</title>

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.min.css') ?>">
  <!-- Icofont Css -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/icofont/icofont.min.css') ?>">
  <!-- Themify Css -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/themify/css/themify-icons.css') ?>">
  <!-- animate.css -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/animate-css/animate.css') ?>">
  <!-- Magnify Popup -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/magnific-popup/dist/magnific-popup.css') ?>">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/slick-carousel/slick/slick.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/plugins/slick-carousel/slick/slick-theme.css') ?>">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>

<body>


  <!-- Section Menu Start -->
  <!-- Header Start -->
  <?php $this->load->view('layouts/_navbar') ?>


  <!-- Header Close -->

  <div class="main-wrapper ">
    <!-- Slider Start -->
    <section class="slider">
      <div class="container">
        <div class="row">
          <?php if ($this->session->userdata('status') == 0) : ?>
            <div class="col-md-8">
              <span class="h6 d-inline-block mb-4 subhead text-uppercase">Ayo memilih</span>
              <h2 class="text-uppercase text-white mb-5">Pemilu Raya <span class="text-color">Himpunan Mahasiswa Elektro</span><br>Politeknik Negeri Ujung Pandang</h2>

              <a href="#course" class="btn btn-main">Lihat calon<i class="ti-angle-right ml-3"></i></a>

            </div>
          <?php endif ?>
          <?php if ($this->session->userdata('status') == 1) : ?>
            <div class="col-md-8">
              <h2 class="text-uppercase text-white mb-5">Terima kasih <span class="text-color"><?= $this->session->userdata('nama_pengguna') ?></span><br>Telah berpartisipasi dalam pemilu raya ini</h2>
            </div>
          <?php endif ?>
        </div>
      </div>
    </section>
    <!-- Section Slider End -->
    <?php $this->load->view($page) ?>

    <?php if(isset($status_choose)) : ?>
    <div class="modal fade" id="modal-success" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h5 class="text-center"><?= $status_choose ?></h5>
          </div>
        </div>
      </div>
    </div>
    <?php endif ?>
    <!-- Section Footer Start -->
    <!-- footer Start -->
    <footer class="footer bg-black-50">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 mb-5 mb-lg-0">
            <h2 class="text-white mb-4">HME-PNUP</h2>
            <p>PEMILU RAYA HIMPUNAN MAHASISWA ELEKTRO <br> POLITEKNIK NEGERI UJUNG PANDANG</p>
          </div>
          <div class="col-lg-6 col-md-5">
            <div class="footer-widget">
              <h4 class="mb-4 text-white letter-spacing text-uppercase">mubes xxx</h4>
              <p>Sekretariat HME-PNUP, Politeknik Negeri Ujung Pandang</p>
              <span class="text-white">+62 85213806325 (Muflihun)</span>
              <span class="text-white">hmepoliupg.ac.id</span>
            </div>
          </div>
        </div>

        <div class="row align-items-center mt-5 px-3 bg-black mx-1">
          <div class="col-lg-4">
            <p class="text-white mt-3">Gymfit © 2019 , Theme By <a href="https://themefisher.com/" class="text-color">Themefisher.com</a></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Section Footer End -->

    <!-- Section Footer Scripts -->
  </div>

  <!-- 
    Essential Scripts
    =====================================-->


  <!-- Main jQuery -->
  <script src="<?= base_url('assets/plugins/jquery/jquery.js') ?>"></script>
  <!-- Bootstrap 4.3.1 -->
  <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
  <!-- Slick Slider -->
  <script src="<?= base_url('assets/plugins/slick-carousel/slick/slick.min.js') ?>"></script>
  <!--  Magnific Popup-->
  <script src="<?= base_url('assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js') ?>"></script>


  <script src="<?= base_url('assets/js/script.js') ?>"></script>
  <script>
    $('#modal-success').modal('show');
  </script>
</body>

</html>