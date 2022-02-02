<div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <?php 
            foreach ($data_karyawan as $datakar ) ?>
                <h1 class="h3 mb-0 text-gray-800">Detail Karyawan </h1>
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
                        <label for="nip"> NIP atau NIK : </label>
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
                    <div class="form-group">
                        <?php
                        if ($datakar->foto == '') { ?>
                            <label>Belum Ada Gambar</label><br>
                        <?php } else { ?>
                            <img src="<?php echo base_url('assets/img/karyawan/' . $datakar->foto) ?>" width="90" height="110"><br>
                      <?php } ?>
                    </div>
                   
                    <hr>
                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-2">
                                                <a href="<?= base_url('admin/Janji/detail_divisi/'.$this->uri->segment(5));?>" class="btn btn-outline-secondary p-2 w-100">Kembali</a>
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