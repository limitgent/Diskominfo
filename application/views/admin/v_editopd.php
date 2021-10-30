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
            foreach ($opd as $op ) { ?>
                <form action="<?php echo base_url() . 'admin/C_opd/update/'; ?>" method="post">
                    <div class="form-group">
                        <label for="id_divisi"> ID OPD: </label>
                        <input type="text" class="form-control form-control-user"  id="id_opd" name="id_opd" value="<?php echo $op->id_opd ?>" readonly>
                        
                    </div>
                    <div class="form-group">
                        <label for="nama_divisi"> Nama OPD : </label>
                        <input type="text" class="form-control form-control-user" id="nama_opd" name="nama_opd" placeholder="Masukan Nama OPD Baru" title="Isikan data dengan benar" value="<?php echo $op->nama_opd ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="ket_divisi"> Username : </label>
                        <input type="text" name="username_opd" class="form-control form-control-user" id="username_opd" placeholder="Masukkan Username Baru" title="Isikn data dengan benar" value="<?php echo $op->username_opd ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="ket_divisi"> Passoword : </label>
                        <input type="text" name="password_opd" class="form-control form-control-user" id="password_opd" placeholder="Masukkan Username Baru" title="Isikn data dengan benar" value="<?php echo $op->password_opd ?>" required>
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