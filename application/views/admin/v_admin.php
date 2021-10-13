<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<h1 class="h3 mb-2 text-gray-800">Data Admin <a class="btn btn-primary" href="<?= base_url() . 'admin/C_admin/tambah'; ?>">
<i class="fas fa-user-plus" disabled></i></a></h1>'

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Admin</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Username</th>
            <th>Nama Admin</th>
            <th>Password</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Username</th>
            <th>Nama Admin</th>
            <th>Password</th>
            <th>Aksi</th>
          </tr>
        </tfoot>
        <tbody>
        <?php 
        foreach ($admin as $ad ) { ?>
          <tr>
            <td><?=$ad->username?></td>
            <td><?=$ad->nama_admin?></td>
            <td><?=$ad->password?></td>
            <td>
              <a class="btn btn-primary" href="<?php echo base_url('admin/C_admin/edit/'. $ad->id_admin); ?>"><i class="fas fa-pencil-alt"></i></a>
              <a class="btn btn-danger" href="<?php echo base_url('admin/C_admin/hapus/'. $ad->id_admin); ?>"><i class="fas fa-trash"></i></a>
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