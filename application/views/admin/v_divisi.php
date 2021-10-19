<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Divisi Kominfo</h6>
  </div>
  <div class="card-content collapse show">
      <div class="card-body">
          <a href="<?= base_url() . 'admin/Janji/tambah_divisi'; ?>"><button type="button" class="btn btn-primary btn-min-width mr-1 mb-1"><i class="ft-plus"> </i> Tambah Divisi</button></a>
      </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID Divisi</th>
            <th>Nama Divisi</th>
            <th>Ket Divisi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        foreach ($divisi as $div ) { ?>
          <tr>
            <td><?=$div->id_divisi?></td>
            <td><?=$div->nama_divisi?></td>
            <td><?=$div->ket_divisi?></td>
            <td>
              <a class="btn btn-primary" href="<?php echo base_url('admin/Janji/edit_divisi/'. $div->id_divisi); ?>"><i class="fas fa-pencil-alt"></i></a>
              <a class="btn btn-danger" href="<?php echo base_url('admin/Janji/hapus_divisi/'. $div->id_divisi); ?>"><i class="fas fa-trash"></i></a>
              <a class="btn btn-warning" href="<?php echo base_url('admin/Janji/detail_divisi/'. $div->id_divisi); ?>"><i class="fas fa-info-circle"></i></a>
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