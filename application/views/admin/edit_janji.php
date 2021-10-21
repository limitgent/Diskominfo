<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Janji Temu</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Content Row -->
        <!-- Disini tempat membuat Edit Profil nya! -->
    </div>
    <div class="col-lg-10">
        <?php
        foreach ($aturjanji as $atj) { ?>
            <form action="<?php echo base_url() . 'admin/janji_temu/update/'; ?>" method="post">

                <div class="form-group">
                    <label for="nip"> NIP Karyawan : </label>
                    <input type="text" name="nip" id="nip" value="<?= $nip; ?>" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="id_opd"> ID OPD : </label>
                    <input type="text" name="id_opd" id="id_opd" value="<?= $id_opd; ?>" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="hari_tgl"> Hari/Tgl : </label>
                    <input type="text" name="hari_tgl" id="hari_tgl" value="<?= $hari_tgl; ?>" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="jam"> Jam : </label>
                    <input type="text" name="jam" id="jam" value="<?= $jam; ?>" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="atas_nama"> Atas Nama : </label>
                    <input type="text" name="atas_nama" id="atas_nama" value="<?= $atas_nama; ?>" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="perihal"> Perihal : </label>
                    <input type="text" name="perihal" id="perihal" value="<?= $perihal; ?>" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="no_telpon_user"> No. Telpon : </label>
                    <input type="text" name="no_telpon_user" id="no_telpon_user" value="<?= $no_telpon_user; ?>" class="form-control" readonly>
                </div>



                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Status</span>
                    </div>
                    <select name="status" class="form-control" id="status">
                        <option value="0" <?= $trs->status == 0 ? "selected" : ""; ?>>0. Belum dikonfirmasi</option>
                        <option value="1" <?= $trs->status == 1 ? "selected" : ""; ?>>1. Menunggu konfirmasi</option>
                        <option value="2" <?= $trs->status == 2 ? "selected" : ""; ?>>2. Terima</option>
                        <option value="3" <?= $trs->status == 3 ? "selected" : ""; ?>>3. Tolak</option>
                </div>
                <hr>
                <button type="submit" name="submit" class="btn btn-success btn-user btn-block">Simpan</button>
            </form>
        <?php } ?>
        <br>
        <div class="text-center">
            <div class="row">

            </div>
            <!-- Batas edit profil -->
            <!-- Content Row -->
            <div class="row">

                <!-- Content Column -->
                <div class="col-lg-6 mb-4">

                </div>

            </div>

        </div>
        <!-- /.container-fluid -->

    </div>