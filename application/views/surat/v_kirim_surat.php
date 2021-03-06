<!-- Begin Page Content -->
<div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Surat</h6>
  </div>
  <?php echo $this->session->flashdata('pesan'); ?>
  <div class="card-body">
  <div class="table-responsive">
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
          <th class="text-center">Nomor Surat</th>
          <th class="text-center">Tanggal Kirim</th>
          <th class="text-center">Perihal</th>
          <th class="text-center">File</th>
          <!-- <th class="text-center">Aksi</th> -->
          </tr>
        </thead>
        <tbody>
        <?php 
      
        foreach ($surat as $su ) { ?>
          <tr>
            <td class="text-center"><?= $su->id_surat ?></td>
            <td class="text-center"><?= $su->tgl_kirim ?></td>
            <td class="text-center"><?= $su->perihal ?></td>
            <td class="text-center"><a href="<?= base_url('assets/admin/upload/' . $su->file) ?>" target="_blank"><?= $su->file ?></a></td>  
          
        </td>
        <td class="text-center">
              <!--<a class="btn btn-primary" href="<?php echo base_url('surat/C_kirim_surat/edit_surat/'. $su->id_surat); ?>"><i class="fas fa-pencil-alt"></i></a>
              <a class="btn btn-danger" href="<?php echo base_url('surat/C_kirim_surat/hapus_surat/'. $su->id_surat); ?>"><i class="fas fa-trash"></i></a>
              <a class="btn btn-warning " href="<?php echo base_url('surat/C_kirim_surat/tampil_isi_surat/'. $su->id_surat); ?>"><i class="fas fa-info-circle"></i></a> -->

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