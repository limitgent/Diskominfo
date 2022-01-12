<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<h1 class="h3 mb-2 text-gray-800"> Data Admin <a class="btn btn-primary" href="<?= base_url() . 'admin/C_admin/tambah_admin/'; ?>">
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
        
        <tbody>
        <?php 
        foreach ($admin as $ad ) { ?>
          <tr>
            <td><?=$ad->username_admin?></td>
            <td><?=$ad->nama_admin?></td>
            <td><?=$ad->password_admin?></td>
            <td>
              <a class="btn btn-primary" href="<?php echo base_url('admin/C_admin/edit/'. $ad->id_admin); ?>"><i class="fas fa-pencil-alt"></i></a>
              <a class="btn btn-danger" href="<?php echo base_url('admin/C_admin/hapus/'. $ad->id_admin); ?>"data-toggle='modal' data-target="#HapusModal"><i class="fas fa-trash"></i></a>
            </td>
          </tr>
        <?php } ?>
          </tbody>
        </table>
        </div>
    </div>
    </div>
    <div class="modal fade" id="HapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin Mau Menghapus</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">data data yang berada di dalam akan terhapus semua</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="<?php echo base_url('admin/C_admin/hapus/'. $ad->id_admin);?>">hapus</a>
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