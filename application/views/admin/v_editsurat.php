<div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Edit Divisi</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Row -->
                <!-- Disini tempat membuat Edit Profil nya! -->
            </div>
            <div class="col-lg-10">
            <?php 
            foreach ($surat as $su ) { ?>
                <form action="<?php echo base_url() . 'admin/C_opd/update/'; ?>" method="post">
                    <div class="form-group">
                        <label for="id_surat"> ID SURAT: </label>
                        <input type="text" class="form-control form-control-user"  id="id_surat" name="id_surat" value="<?php echo $su->id_surat ?>" readonly>
                        
                    </div>
                    <!--<div class="form-group">
                        <label for="id_divisi"> ID OPD: </label>
                        <input type="text" class="form-control form-control-user"  id="id_opd" name="id_opd" value="<?php echo $su->id_opd ?>" readonly>
                        
                    </div>-->
                    <div class="form-group">
                        <label for="tgl_kirim"> Tanggal Kirim : </label>
                        <input type="text" class="form-control form-control-user" id="tgl_kirim" name="tgl_kirim" placeholder="Masukan Nama OPD Baru" title="Isikan data dengan benar" value="<?php echo $su->tgl_kirim ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tgl_terima"> tanggal Terima </label>
                        <input type="text" name="tgl_terima" class="form-control form-control-user" id="tgl_terima" placeholder="Masukkan Username Baru" title="Isikn data dengan benar" value="<?php echo $su->tgl_terima ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="file"> FILE: </label>
                        <input type="text" name="file" class="form-control form-control-user" id="file" placeholder="Masukkan Username Baru" title="Isikn data dengan benar" value="<?php echo $su->file ?>" required>
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