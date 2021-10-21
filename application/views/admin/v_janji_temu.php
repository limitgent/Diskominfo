<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Janji Temu <a class="btn btn-primary" href="<?= base_url() . 'admin/janji_temu/tambah_janji/'; ?>">
            <i class="fas fa-user-plus" disabled></i></a></h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Janji Temu</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th>Hari/Tgl</th>
                            <th>Jam</th>
                            <th>Atas Nama</th>
                            <th>Perihal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($aturjanji as $atj) { ?>
                            <tr>

                                <td><?= $atj->hari_tgl ?></td>
                                <td><?= $atj->jam ?></td>
                                <td><?= $atj->atas_nama ?></td>
                                <td><?= $atj->perihal ?></td>
                                <td><?= $atj->status ?></td>
                                <td>
                                    <a class="btn btn-primary" href="<?php echo base_url('admin/janji_temu/edit_janji/' . $atj->id_janji); ?>"><i class="fas fa-pencil-alt"></i></a>
                                    <a class="btn btn-danger" href="<?php echo base_url('admin/janji_temu/hapus_janji/' . $atj->id_janji); ?>"><i class="fas fa-trash"></i></a>
                                    <a class="btn btn-warning" href="<?php echo base_url('admin/janji_temu/detail_janji/' . $atj->id_janji); ?>"><i class="fas fa-info-circle"></i></a>
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
            <span>Copyright &copy; Your Website 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->