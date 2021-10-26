<div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Detail Karyawan</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Row -->
                <!-- Disini tempat membuat Edit Profil nya! -->
            </div>
            <div class="col-lg-10">
            <?php 
            foreach ($data_karyawan as $datakar ) { ?>
                    <div class="form-group">
                        <label for="id_divisi"> ID Divisi: </label>
                        <input type="text" class="form-control form-control-user"  id="id_divisi" name="id_divisi" value="<?php echo $datakar->id_divisi ?>" readonly>
                        
                    </div>
                    <div class="form-group">
                        <label for="nip"> NIP : </label>
                        <input type="text" class="form-control form-control-user"  id="nip" name="nip" value="<?php echo $datakar->nip ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama_karyawan"> Nama Karyawan : </label>
                        <input type="text" class="form-control form-control-user"  id="nama_karyawan" name="nama_karyawan" value="<?php echo $datakar->nama_karyawan ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="jabatan"> Jabatan : </label>
                        <input type="text" class="form-control form-control-user"  id="jabatan" name="jabatan" value="<?php echo $datakar->jabatan ?>" readonly>
                    </div>
                    <hr>
                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-2">
                                                <a href="<?= base_url('admin/Janji/hapus_karyawan/'.$datakar->nip);?>" class="btn btn-outline-secondary p-2 w-100">Hapus Data</a>
                                            </div>
                                            <div class="col-sm-12 col-md-2">
                                            <a href="<?= base_url('admin/Janji/edit_karyawan/'.$datakar->nip);?>" class="btn btn-outline-secondary p-2 w-100">Edit Data</a>
                                            </div>
                                        </div>
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