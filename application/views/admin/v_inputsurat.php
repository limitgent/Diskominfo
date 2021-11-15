<div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Surat</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Row -->
                <!-- Disini tempat membuat Edit Profil nya! -->
            </div>
            <div class="col-lg-10">
                <form action="<?php echo base_url() . 'admin/C_opd/input_surat/'; ?>" method="post">
                     <div class="form-group">
                        <label for="id_surat"> ID surat : </label>
                        <input type="text" name="id_surat" id="id_surat" value="<?= $id_surat; ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="id_opd"> ID OPD : </label>
                        <input type="text" name="id_opd" id="id_opd" value="<?= $id_opd; ?>" class="form-control" readonly>
                    </div> -->
                    <div class="form-group">
                        <label for="tgl_kirim"> Tanggal Kirim : </label>
                        <input type="date" class="form-control form-control-user" id="tgl_kirim" name="tgl_kirim" placeholder="masukkan tanggal kirim" title="Isikan data dengan benar" required pattern="[a-zA-Z\s]+">
                    </div>
                    <div class="form-group">
                        <label for="tgl_terima"> Tanggal Terima : </label>
                        <input type="date" class="form-control form-control-user" id="tgl_terima" name="tgl_terima" placeholder="masukkan tanggal terima" title="Isikan data dengan benar" required>
                    </div>
                    <div class="form-group">
                        <label for="file"> File : </label>
                        <input type="file" name="file" class="form-control form-control-user" id="file" placeholder="upload file surat" title="Isikn data dengan benar" required>
                    </div>
                    <hr>
                    <button type="submit" name="submit" class="btn btn-success btn-user btn-block">Tambah</button>
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