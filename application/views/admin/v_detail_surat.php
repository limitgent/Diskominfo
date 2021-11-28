<div class="container-fluid">
    <div class="row justify-content-center py-3">
        <div class="col-md-8 card p-0 shadow mb-4">
            <div class="card-header pb-0">
                <h2 class="font-weight-bolder mb-0">Detail Data Surat</h2>
                <ul class="breadcrumb bg-transparent ml-n3 mt-n3 mb-0">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>admin/C_dashboard"><i class="fa fa-home"></i> Pintu Diskominfo</a></li>
                </ul>
            </div>
            <div class="card-body">

                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>ID Surat</th>
                                <th>:</th>
                                <th><?= $su->id_surat ?></th>
                            </tr>
                            <tr>
                                <th>ID OPD</th>
                                <th>:</th>
                                <th><?= $su->id_opd ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tanggal Kirim</td>
                                <td>:</td>
                                <td><?= $su->tgl_kirim ?></td>
                            </tr>

                            <tr>
                                <td>Tanggal Terima</td>
                                <td>:</td>
                                <td><?= $su->tgl_terima ?></td>
                            </tr>

                            <tr>
                                <td>Perihal</td>
                                <td>:</td>
                                <td><?= $su->perihal ?></td>
                            </tr>
                            <tr>
                                <td>File</td>
                                <td>:</td>
                                <td><?= $su->file ?></td>
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