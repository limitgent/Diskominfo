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
              <a title="Edit" data-toggle="tooltip" data-placement="top" data-original-title="Edit">  
              <a class="btn btn-primary" href="<?php echo base_url('admin/Janji/edit_divisi/'. $div->id_divisi); ?>"><i class="fas fa-pencil-alt"></i></a>
              <a title="Hapus" data-toggle="tooltip" data-placement="top" data-original-title="Hapus">
              <a class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?=$div->id_divisi; ?>"><i class="fas fa-trash"></i></a>
              <a title="Detail" data-toggle="tooltip" data-placement="top" data-original-title="Detail">
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

<?php
        foreach($divisi as $div) :    
    ?>
        <!--  delete Modal -->
        <div class="modal fade" id="deleteModal<?= $div->id_divisi?>" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="deletePaketModalTitle">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deletePaketModalTitle">Hapus data</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-justify">Apakah anda yakin akan menghapus data Pembayaran dengan ID<em><strong> <?= $div->nama_divisi;?></strong></em></h5>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-outline-secondary" type="button" data-dismiss="modal"> Batal </button>
                        <a href="<?php echo base_url() ?>admin/Janji/hapus_divisi/<?php echo $div->id_divisi ?>" role="button" class="btn btn-success"> Ya </a>
                      </div>
                </div>
            </div>
        </div>

    <?php
        endforeach;
    ?>

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