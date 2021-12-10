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

        <form action="<?php echo base_url() . 'admin/janji_temu/aksitambah_janji'; ?>" method="post">

            <div class="form-group">
                <label for="id_janji"> ID Janji : </label>
                <input type="text" name="id_janji" id="id_janji" value="<?= $id_janji; ?>" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="id_opd"> ID OPD : </label>
                <input type="text" class="form-control form-control-user" id="id_opd" name="id_opd" placeholder="Masukkan ID OPD" title="Isikan data dengan benar" required>
            </div>
            <div class="form-group">
                <label for="nip"> NIP Karyawan Diskominfo : </label>
                <input type="text" class="form-control form-control-user" id="nip" name="nip" placeholder="Masukkan NIP Karyawan Yang Ingin Ditemui" title="Isikan data dengan benar" required>
            </div>
            <div class="form-group">
                <label for="hari_tgl"> Hari/Tgl : </label>
                <input type="date" class="form-control form-control-user" id="hari_tgl" name="hari_tgl" placeholder="Tentukan Hari dan Tgl" title="Isikan data dengan benar" required>
            </div>
            <div class="form-group">
                <label for="jam"> Jam : </label>
                <input type="time" class="form-control form-control-user" id="jam" name="jam" placeholder="Tentukan Waktu" title="Isikan data dengan benar" required>
            </div>
            <div class="form-group">
                <label for="atas_nama"> Atas Nama : </label>
                <input type="text" class="form-control form-control-user" id="atas_nama" name="atas_nama" placeholder="Masukan Nama" title="Isikan data dengan benar" required>
            </div>
            <div class="form-group">
                <label for="perihal"> Perihal : </label>
                <input type="text" class="form-control form-control-user" id="perihal" name="perihal" placeholder="Masukan Perihal Janji" title="Isikan data dengan benar" required>
            </div>
            <div class="form-group">
                <label for="no_telpon_user"> No. Telpon : </label>
                <input type="text" class="form-control form-control-user" id="no_telpon_user" name="no_telpon_user" placeholder="Masukan No. Telpon Tamu" title="Isikan data dengan benar" required>
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