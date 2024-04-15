<nav class="navbar navbar-expand-lg navigation fixed-top" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url('/') ?>">
      <img src="<?= base_url('assets/images/nemo.png') ?>" alt="" width="80" height="80">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsid" aria-controls="navbarsid" aria-expanded="false" aria-label="Toggle navigation">
      <span class="ti-view-list"></span>
    </button>
    <div class="collapse text-center navbar-collapse" id="navbarsid">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <?php if ($this->session->userdata('is_login') == TRUE) : ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hello, <?= $this->session->userdata('nama_pengguna') ?></a>
            <div class="dropdown-menu" aria-labelledby="dropdown">
              <a href="<?= base_url('auth/logout') ?>" class="dropdown-item">Logout</a>
            </div>
          </li>
        <?php endif ?>
        <?php if ($this->session->userdata('is_login') == FALSE) : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth') ?>">Mulai memilih</a>
          </li>
        <?php endif ?>
      </ul>
    </div>
  </div>
</nav>