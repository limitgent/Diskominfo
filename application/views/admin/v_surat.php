<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"> Surat <a class="btn btn-primary" href="<?= base_url() . 'admin/C_surat/tambah_surat/'; ?>">
            <i class="fas fa-user-plus" disabled></i></a></h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Surat</h6>
  </div>
  <div class="card-body">
  <div class="table-responsive">
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
          <th class="text-center">ID Surat</th>
          <th class="text-center">ID OPD</th>
          <th class="text-center">Tanggal Kirim</th>
          <th class="text-center">Tanggal Terima</th>
          <th class="text-center">Perihal</th>
          <th class="text-center">File</th>
          <th class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        foreach ($surat as $su ) { ?>
          <tr>
            <td class="text-center"><?= $su->id_surat ?></td>
            <td class="text-center"><?= $su->id_opd ?></td>
            <td class="text-center"><?= $su->tgl_kirim ?></td>
            <td class="text-center"><?= $su->tgl_terima ?></td>
            <td class="text-center"><?= $su->perihal ?></td>
            <td class="text-center"><?= $su->file ?></td>
            
        </td>
        <td class="text-center">
              <a class="btn btn-primary" href="<?php echo base_url('admin/C_surat/edit_surat/'. $su->id_surat); ?>"><i class="fas fa-pencil-alt"></i></a>
              <a class="btn btn-danger" href="<?php echo base_url('admin/C_surat/hapus_surat/'. $su->id_surat); ?>"><i class="fas fa-trash"></i></a>

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