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
            foreach ($divisi as $div ) { ?>
                <form action="<?php echo base_url() . 'admin/Janji/update_divisi/'; ?>" method="post">
                    <div class="form-group">
                        <label for="id_divisi"> ID Divisi: </label>
                        <input type="text" class="form-control form-control-user"  id="id_divisi" name="id_divisi" value="<?php echo $div->id_divisi ?>" readonly>
                        
                    </div>
                    <div class="form-group">
                        <label for="nama_divisi"> Nama Divisi : </label>
                        <input type="text" class="form-control form-control-user" id="nama_divisi" name="nama_divisi" placeholder="Masukan Nama Divisi Baru" title="Isikan data dengan benar" value="<?php echo $div->nama_divisi ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="ket_divisi"> Keterangan Divisi : </label>
                        <input type="text" name="ket_divisi" class="form-control form-control-user" id="ket_divisi" placeholder="Masukkan Perubahan Keterangan Divisi" title="Isikn data dengan benar" value="<?php echo $div->ket_divisi ?>" required>
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