<section class="upcoming-meetings" id="meetings">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="section-heading">
            <br>
            <h2>Tambah Janji</h2>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Content Row -->
        </div>
        <?php
        foreach ($karyawan as $kar) { ?>
            <form action="<?php echo base_url() . 'user/c_aturjanji/aksitambah_janji/'; ?>" method="post">
                <div class="panel-middle row">

                    <div class="group-input col-md-4">
                        <div class="input-group mb-2">
                            <span class="input-group-text">Karyawan :</span>
                            <!--    <input type="text" class="form-control form-control-user" id="nip" name="nip" placeholder="NIP Karyawan Yang Ingin Ditemui " title="Isikan data dengan benar" required> -->
                            <input type="hidden" name="nip" id="nip" value="<?php echo $kar->nip ?>" class="form-control" readonly>
                            <input type="text" name="nama_karyawan" id="nama_karyawan" value="<?php echo $kar->nama_karyawan ?>" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="group-input col-md-4">
                        <div class="input-group mb-2">
                            <span class="input-group-text">Hari/Tgl :</span>
                            <input type="date" class="form-control form-control-user" id="hari_tgl" name="hari_tgl" placeholder="Tentukan Hari dan Tgl" title="Isikan data dengan benar" required>
                        </div>
                    </div>

                    <div class="group-input col-md-4">
                        <div class="input-group mb-2">
                            <span class="input-group-text">Jam :</span>
                            <input type="time" class="form-control form-control-user" id="jam" name="jam" placeholder="Tentukan Waktu" title="Isikan data dengan benar" required>
                        </div>
                    </div>

                    <div class="group-input col-md-4">
                        <div class="input-group mb-2">
                            <span class="input-group-text">Instansi :</span>
                            <input type="text" class="form-control form-control-user" id="instansi" name="instansi" placeholder="Masukkan Nama Instansi Anda" title="Isikan data dengan benar" required>
                        </div>
                    </div>

                    <div class="group-input col-md-4">
                        <div class="input-group mb-2">
                            <span class="input-group-text">Atas Nama :</span>
                            <input type="text" class="form-control form-control-user" id="atas_nama" name="atas_nama" placeholder="Masukkan Nama Anda" title="Isikan data dengan benar" required>
                        </div>
                    </div>

                    <div class="group-input col-md-4">
                        <div class="input-group mb-2">
                            <span class="input-group-text">Perihal :</span>
                            <input type="text" class="form-control form-control-user" id="perihal" name="perihal" placeholder="Masukkan Perihal Janji" title="Isikan data dengan benar" required>
                        </div>
                    </div>

                    <div class="group-input col-md-4">
                        <div class="input-group mb-2">
                            <span class="input-group-text">No. Telpon :</span>
                            <input type="text" class="form-control form-control-user" id="no_telpon_user" name="no_telpon_user" placeholder="Masukkan No. Telpon Anda" title="Isikan data dengan benar" required>
                        </div>
                    </div>
                    <div class="group-input col-md-4">
                        <div class="input-group mb-2">

                            <input type="hidden" name="id_janji" id="id_janji" value="<?= $id_janji; ?>" class="form-control" readonly>
                        </div>
                    </div>

                    <!--  <div class="group-input col-md-4">
                    <div class="input-group mb-2">
                        <span class="input-group-text">Status :</span>
                        <input type="text" name="status" id="status" value="Belum Terkonfirmasi" class="form-control" readonly>
                    </div>
                </div> -->
                </div>
    </div>
    <br>
    <br>
    <div class="form-group text-center">
        <button class="btn btn-primary px-2 mr-1" type="submit">Simpan</button>
        <button class="btn btn-secondary" onclick="window.history.back()">Batal</button>
    </div>
<?php } ?>
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

</section>