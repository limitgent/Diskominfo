<section class="upcoming-meetings" id="meetings">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading">
          <?php
          foreach ($karyawan as $kar) { ?>
            <br>
            <br>
            <h2>Divisi <?= $kar->nama_divisi ?></h2>
        </div>
      </div>

      <div class="container profile-page">
        <div class="row">
          <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="card profile-header">
              <div class="body">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-12">
                    <div class="profile-image float-md-right"> <img src="<?php echo base_url('assets/img/karyawan/' . $kar->foto) ?>" alt="Foto Karyawan"> </div>
                  </div>
                  <div class="col-lg-8 col-md-8 col-12">
                    <h4 class="m-t-0 m-b-0"><strong><?= $kar->nama_karyawan ?></strong></h4>
                    <span class="job_post"><?= $kar->nip ?></span>
                    <br>
                    <span class="job_post"><?= $kar->jabatan ?></span>
                    <p><?= $kar->status ?></p>
                    <br>
                    <div class="card-body">
                    <?php
                      if ($kar->status == 'Dikantor') { ?>
                         <a href="<?= base_url('user/c_aturjanji/tambah_janji/' . $kar->nip); ?>"><button type="button" class="btn btn-primary btn-min-width mr-1 mb-1"><i class="ft-plus"> </i>Atur Janji</button></a>
                      <?php } ?>
                     
                    </div>
                    <br>
                    <p class="social-icon m-t-5 m-b-0">
                      <a title="Twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                      <a title="Facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                      <a title="Google-plus" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                      <a title="Behance" href="javascript:void(0);"><i class="fa fa-behance"></i></a>
                      <a title="Instagram" href="javascript:void(0);"><i class="fa fa-instagram "></i></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
    </div>
  </div>

</section>