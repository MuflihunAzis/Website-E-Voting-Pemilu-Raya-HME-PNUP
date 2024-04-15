<!-- Section Course Start -->
<?php if($this->session->userdata('status') == 0 ) : ?>
<section class="section course bg-gray" id="course">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <div class="section-title">
          <div class="divider mb-3"></div>
          <h2>Kandidat Calon</h2>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <?php foreach ($content as $item) : ?>
        <div class="col-lg-4 col-md-6 mb-5">
          <div class="card border-3 rounded-0 p-0 mb-5 mb-lg-0 shadow-sm">
             <div class="card-header">
              <h2 class="text-center"><?= "0$item->id_calon" ?></h2>
            </div>
            <img src="https://placehold.co/400x500" alt="" class="img-fluid">
            <div class="card-body">
              <h4 class="font-secondary mb-0 text-center">Nama calon</h4>
            </div>
            <div class="card-footer">
              <button data-toggle="modal" data-target="<?= "#show-visi-misi-$item->id_calon" ?>" type="button" class="btn btn-secondary btn-md btn-block">Tetapkan pilihan</button>
            </div>
          </div>
        </div>
        <!-- modal dialog -->
        <div class="modal fade" id="<?= "show-visi-misi-$item->id_calon" ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">VISI dan MISI</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="<?= ($this->session->userdata('is_login') == TRUE ? base_url('home/pilih') : '#' ) ?>" method="POST">
                <div class="modal-body">
                  <div class="row mb-3">
                    <input type="hidden" name="id_calon" id="id_calon" value="<?= $item->id_calon ?>">
                    <label class="col-md-12 col-form-label"><b>Visi</b></label>
                    <p id="visi" class="col-md-12"><?= $item->visi ?></p>
                    <label class="col-md-12 col-form-label"><b>Misi</b></label>
                    <ol id="misi" style="margin-left: -6px;">
                      <?php foreach(json_decode($item->misi) as $item) : ?>
                        <li><?= $item ?></li>
                      <?php endforeach ?>
                    </ol>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <?php if($this->session->userdata('is_login') == TRUE) : ?>
                  <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah anda yakin ingin memilih kandidat calon ini?')">Pilih</button>
                  <?php endif ?>
                  <?php if($this->session->userdata('is_login') == FALSE) : ?>
                  <a href="<?= base_url('auth') ?>" class="btn btn-primary" onclick="alert('Silahkan login terlebih dahulu!!')">Pilih</a>
                  <?php endif ?>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- end modal dialog -->
      <?php endforeach ?>
    </div>

  </div>
</section>
<?php endif ?>
<!-- Section Course ENd -->