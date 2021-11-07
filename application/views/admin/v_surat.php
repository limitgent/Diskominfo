<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Surat</h6>
  </div>
  <div class="card-content collapse show">
      <div class="card-body">
          <a href="<?= base_url() . 'admin/C_surat/tambah_surat'; ?>"><button type="button" class="btn btn-primary btn-min-width mr-1 mb-1"><i class="ft-plus"> </i> Tambah Surat</button></a>
      </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID Surat</th>
            <th>ID OPD</th>
            <th>Tanggal Kirim</th>
            <th>Tanggal Terima</th>
            <th>Perihal</th>
            <th>File</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        foreach ($surat as $su ) { ?>
          <tr>
            <td><?=$su->id_surat?></td>
            <td><?=$su->id_opd?></td>
            <td><?=$su->tgl_kirim?></td>
            <td><?=$su->tgl_terima?></td>
            <td><?=$su->perihal?></td>
            <td><?=$su->file?></td>
            <td>
              <a class="btn btn-primary" href="<?php echo base_url('admin/C_surat/edit/'. $su->id_surat); ?>"><i class="fas fa-pencil-alt"></i></a>
              <a class="btn btn-danger" href="<?php echo base_url('admin/C_surat/hapus/'. $su->id_surat); ?>"><i class="fas fa-trash"></i></a>
              
            </td>
          </tr>
        <?php } ?>
          </tbody>
        </table>
        </div>
    </div>
    </div>
    
    </div>
<!-- /.container-fluid -->

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