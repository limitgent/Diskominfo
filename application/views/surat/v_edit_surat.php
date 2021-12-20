<div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Edit Surat</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Row -->
                <!-- Disini tempat membuat Edit Profil nya! -->
            </div>
            <div class="col-lg-10">
            <?php 
            foreach ($surat as $su ) { ?>
                <form action="<?php echo base_url() . 'surat/C_kirim_surat/update_kirim_surat/'; ?>" method="post">
                    <div class="form-group">
                        <label for="no_surat"> Nomor Surat : </label>
                        <input type="text" class="form-control form-control-user" id="no_surat" name="no_surat" placeholder="masukkan nomor surat" title="masukkan nomor surat dengan benar" required>
                    </div>
                    <div class="form-group">
                        <label for="tgl_kirim"> Tanggal Kirim : </label>
                        <input type="date" class="form-control form-control-user" id="tgl_kirim" name="tgl_kirim" placeholder="masukkan tanggal kirim" title="tentukan hari dan tanggal" required>
                    </div>
                    <div class="form-group">
                        <label for="perihal"> Perihal : </label>
                        <input type="text" class="form-control form-control-user" id="perihal" name="perihal" placeholder="masukkan perihal Anda dalam mengirim surat" title="masukkan perihal surat dengan benar" required>
                    </div>
                    <div class="form-group">
                        <label for="departemen"> Departemen : </label>
                        <input type="text" class="form-control form-control-user" id="departemen" name="departemen" placeholder="masukkan asal departemen Anda" title="masukkan departemen Anda dengan benar" required>
                    </div>
                    <div class="form-group">
                        <label for="file"> File : </label>
                        <fieldset class="form-group">
                        <?php
                        if($su->file==''){?>
                            <label>Tidak Ada File</label><br>
                        <?php }else{ ?>
                        <file src="<?php echo base_url('assets/user/arsip/'.$su->file)?>" width="90" height="110"><br>
                        <?php }?>
                            <fieldset class="form-group">
                                <div>
                                    <?php echo $su->file; ?></div>
                                       <input type="file" class="form-control" id="file" name="file" value="<?= $su->file;?>">
                            </fieldset>
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