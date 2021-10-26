<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Atur Janji</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Content Row -->
        <!-- Disini tempat membuat Edit Profil nya! -->
    </div>
    <div class="col-lg-10">
        <?php
        foreach ($aturjanji as $atj) { ?>
            <form action="<?php echo base_url() . 'admin/janji_temu/update_janji/'; ?>" method="post">
                <div class="form-group">
                    <label for="id_janji"> ID Janji: </label>
                    <input type="text" class="form-control form-control-user" id="id_janji" name="id_janji" value="<?php echo $atj->id_janji ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="id_opd"> ID OPD: </label>
                    <input type="text" class="form-control form-control-user" id="id_opd" name="id_opd" value="<?php echo $atj->id_opd ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="nip"> NIP Karyawan Dikominfo: </label>
                    <input type="text" class="form-control form-control-user" id="nip" name="nip" value="<?php echo $atj->nip ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="hari_tgl"> Hari/Tgl: </label>
                    <input type="text" class="form-control form-control-user" id="hari_tgl" name="hari_tgl" value="<?php echo $atj->hari_tgl ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="jam"> Jam: </label>
                    <input type="text" class="form-control form-control-user" id="jam" name="jam" value="<?php echo $atj->jam ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="atas_nama"> Atas Nama: </label>
                    <input type="text" class="form-control form-control-user" id="atas_nama" name="atas_nama" value="<?php echo $atj->atas_nama ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="perihal"> Perihal: </label>
                    <input type="text" class="form-control form-control-user" id="perihal" name="perihal" value="<?php echo $atj->perihal ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="no_telpon_user"> No. Telpon: </label>
                    <input type="text" class="form-control form-control-user" id="no_telpon_user" name="no_telpon_user" value="<?php echo $atj->no_telpon_user ?>" readonly>
                </div>

                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Status</span>
                    </div>
                    <select name="status" class="form-control" id="status">
                        <option value="Belum Terkonfirmasi" <?= $atj->status == "Belum Terkonfirmasi" ? "selected" : "" ?>>Belum Terkonfirmasi</option>
                        <option value="Menunggu Konfirmasi" <?= $atj->status == "Menunggu Konfirmasi" ? "selected" : "" ?>>Menunggu Konfirmasi</option>
                        <option value="Terima" <?= $atj->status == "Terima" ? "selected" : ""; ?>>Terima</option>
                        <option value="Tolak" <?= $atj->status == "Tolak" ? "selected" : ""; ?>>Tolak</option>
                    </select>
                </div>

                <hr>
                <div class="form-group text-center">
                    <button class="btn btn-primary px-2 mr-1" type="submit">Simpan</button>
                    <button class="btn btn-secondary" onclick="window.history.back()"><i class="fas fa-arrow-left"></i></button>
                </div>
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