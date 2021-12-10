<div class="container-fluid">
    <div class="row justify-content-center py-3">
        <div class="col-md-6 card p-0 shadow mb-4">
            <div class="card-header pb-0">
                <h2 class="font-weight-bolder mb-0">Detail Data Janji Temu </h2>
                <ul class="breadcrumb bg-transparent ml-n3 mt-n3 mb-0">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>admin/C_dashboard"><i class="fa fa-home"></i> Pintu Diskominfo</a></li>
                </ul>
            </div>
            <div class="card-body">

                <?php foreach ($detail as $dtl) {
                    $kry = $this->db->query("SELECT nama_karyawan FROM karyawan WHERE nip = '$dtl->nip'")->row(); ?>

                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>ID Janji</th>
                                <th>:</th>
                                <th><?= $dtl->id_janji ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kepada</td>
                                <td>:</td>
                                <td><?= $kry->nama_karyawan ?></td>
                            </tr>

                            <tr>
                                <td>Dari</td>
                                <td>:</td>
                                <td><?= $dtl->instansi ?></td>
                            </tr>

                            <tr>
                                <td>Atas Nama</td>
                                <td>:</td>
                                <td><?= $dtl->atas_nama ?></td>
                            </tr>

                            <tr>
                                <td>No. Telpon</td>
                                <td>:</td>
                                <td><?= $dtl->no_telpon_user ?></td>
                            </tr>

                            <tr>
                                <td>Hari/Tgl</td>
                                <td>:</td>
                                <td><?= $dtl->hari_tgl ?></td>
                            </tr>

                            <tr>
                                <td>Jam</td>
                                <td>:</td>
                                <td><?= $dtl->jam ?></td>
                            </tr>

                            <tr>
                                <td>Perihal</td>
                                <td>:</td>
                                <td><?= $dtl->perihal ?></td>
                            </tr>

                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td><?php if ($dtl->status == "") { ?>
                                        <span class="badge badge-pill px-4 badge-secondary">Belum Terkonfirmasi</span>
                                    <?php } else if ($dtl->status == "Belum Terkonfirmasi") { ?>
                                        <span class="badge badge-pill px-4 badge-secondary">Belum Terkonfirmasi</span>
                                    <?php } else if ($dtl->status == "Menunggu Konfirmasi") { ?>
                                        <span class="badge badge-pill px-4 badge-warning">Menunggu Konfirmasi</span>
                                    <?php } else if ($dtl->status == "Terima") { ?>
                                        <span class="badge badge-pill px-4 badge-primary">Terima</span>
                                    <?php } else if ($dtl->status == "Tolak") { ?>
                                        <span class="badge badge-pill px-4 badge-danger">Tolak</span>

                                    <?php } ?>
                                </td>
                            </tr>

                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    <div class="form-group text-center">
        <button class="btn btn-secondary" onclick="window.history.back()"><i class="fas fa-arrow-left"></i></button>
    </div>

</div>
<?php } ?>