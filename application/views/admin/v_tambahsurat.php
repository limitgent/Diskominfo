<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Janji</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Content Row -->
    </div>
    <div class="col-lg-10">
        <form action="<?php echo base_url() . 'admin/C_surat/aksi_tambah_surat'; ?>" method="post">

        <div class="form-group">
                <label for="id_surat"> ID Surat : </label>
                <input type="text" name="id_surat" id="id_surat" value="<?= $id_surat; ?>" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="id_opd"> ID OPD : </label>
                <input type="text" class="form-control form-control-user" id="id_opd" name="id_opd" placeholder="Masukkan ID OPD" title="isikan data dengan benar" required>
            </div>
            <div class="form-group">
                <label for="tgl_kirim"> Tanggal Kirim : </label>
                <input type="date" class="form-control form-control-user" id="tgl_kirim" name="tgl_kirim" placeholder="masukkan tanggal kirim" title="tentukan hari dan tanggal" required>
            </div>
            <div class="form-group">
                <label for="tgl_terima"> Tanggal Terima : </label>
                <input type="date" class="form-control form-control-user" id="tgl_terima" name="tgl_terima" placeholder="masukkan tanggal terima" title="tentukan hari dan tanggal" required>
            </div>
            <div class="form-group">
                <label for="perihal"> Perihal : </label>
                <input type="text" class="form-control form-control-user" id="perihal" name="perihal" placeholder="masukkan perihal surat" title="masukkan perihal surat dengan benar" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" name="status" id="status" required>
                    <option>Pilih Status :</option>
                    <option>Belum Terkonfirmasi</option>
                    <option>Menunggu Konfirmasi</option>
                    <option>Terima</option>
                    <option>Tolak</option>
                </select>
            </div>

            <div class="form-group text-center">
                <button class="btn btn-primary px-2 mr-1" type="submit">Simpan</button>
                <button class="btn btn-secondary" onclick="window.history.back()"><i class="fas fa-arrow-left"></i></button>
            </div>
            </form>
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