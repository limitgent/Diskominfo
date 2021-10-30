<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<h1 class="h3 mb-2 text-gray-800">Data OPD <a class="btn btn-primary" href="<?= base_url() . 'admin/C_opd/tambah_opd/'; ?>">
<i class="fas fa-user-plus" disabled></i></a></h1>'

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Data OPD</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID OPD</th>
            <th>Username</th>
            <th>Nama OPD</th>
            <th>Password</th>
            <th>Aksi</th>
          </tr>
        </thead>
        
        <tbody>
        <?php 
        foreach ($opd as $op ) { ?>
          <tr>
            <td><?=$op->id_opd?></td>
            <td><?=$op->username_opd?></td>
            <td><?=$op->nama_opd?></td>
            <td><?=$op->password_opd?></td>
            <td>
              <a class="btn btn-primary" href="<?php echo base_url('admin/C_opd/edit/'. $op->id_opd); ?>"><i class="fas fa-pencil-alt"></i></a>
              <a class="btn btn-danger" href="<?php echo base_url('admin/C_opd/hapus_opd/'. $op->id_opd); ?>"><i class="fas fa-trash"></i></a>
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