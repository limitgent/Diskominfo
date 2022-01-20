<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Janji Temu</h6>
        </div>


        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                        <tr class="font-weight-bolder">

                            <th class=" text-center">Hari/Tgl</th>
                            <th class="text-center">Jam</th>
                            <th class="text-center">Atas Nama</th>
                            <th class="text-center">Perihal</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($aturjanji as $atj) { ?>
                            <tr>

                                <td class="text-center"><?= $atj->hari_tgl ?></td>
                                <td class="text-center"><?= $atj->jam ?></td>
                                <td class="text-center"><?= $atj->atas_nama ?></td>
                                <td class="text-center"><?= $atj->perihal ?></td>
                                <td class="text-center">
                                    <?php if ($atj->status == "") { ?>
                                        <span class="badge badge-pill px-4 badge-secondary">Belum Terkonfirmasi</span>
                                    <?php } else if ($atj->status == "Belum Terkonfirmasi") { ?>
                                        <span class="badge badge-pill px-4 badge-secondary">Belum Terkonfirmasi</span>
                                    <?php } else if ($atj->status == "Menunggu Konfirmasi") { ?>
                                        <span class="badge badge-pill px-4 badge-warning">Menunggu Konfirmasi</span>
                                    <?php } else if ($atj->status == "Terima") { ?>
                                        <span class="badge badge-pill px-4 badge-primary">Terima</span>
                                    <?php } else if ($atj->status == "Tolak") { ?>
                                        <span class="badge badge-pill px-4 badge-danger">Tolak</span>

                                    <?php } ?>

                                </td>
                                <td class="text-center">
                                    <a class="btn btn-primary" href="<?php echo base_url('admin/janji_temu/edit_janji/' . $atj->id_janji); ?>"><i class="fas fa-pencil-alt"></i></a>
                                    <a class="btn btn-warning" href="<?php echo base_url('admin/janji_temu/detail/' . $atj->id_janji); ?>"><i class="fas fa-info-circle"></i></a>
                                    <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="<?= base_url('admin/janji_temu/hapus_janji/' . $atj->id_janji) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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