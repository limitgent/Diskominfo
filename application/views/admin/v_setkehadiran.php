<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Divisi Kominfo</h6>
  </div>
  <h5 class="mt-2">Nama Admin</h5>
    <fieldset class="form-group<?=form_error('id_admin') ? 'has-error' : null?>">
        <select name="id_admin" id="id_admin" class="custom-select">
            <option value=""> Pilih Admin </option>
                <?php
                    foreach ($admin as $detailAdmin) :
                ?>
                    <option value="<?= $detailAdmin->id_admin; ?>"><?= $detailAdmin->nama_admin; ?></option>
                <?php
                    endforeach;
                 ?>
                                                </select>
                                                <?= form_error('id_admin', '<small class="text-form text-danger mt-2 ml-2">', '</small>'); ?>
                                            </fieldset>
                                            
  

</div>
      <!-- End of Main Content -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->