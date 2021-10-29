<div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Edit Karyawan</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Row -->
                <!-- Disini tempat membuat Edit Profil nya! -->
            </div>
            <div class="col-lg-10">
                <?php
                foreach($karyawan as $kar) ?>
                <?php
                foreach($divisi as $div) ?>
                 <form action="<?php echo base_url() . 'admin/Janji/update_karyawan/'.$div->id_divisi; ?>" method="post">
                    <div class="form-group">
                        <label for="id_divisi"> Nama Divisi : </label>
                        <input type="hidden" class="form-control form-control-user"  id="id_divisi" name="id_divisi" value="<?php echo $div->id_divisi ?>">
                        <input type="text" name="nama_divisi" id="_divisi" value="<?php echo $div->nama_divisi ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nip"> NIP : </label>
                        <input type="text" class="form-control form-control-user" id="nip" name="nip" value="<?php echo $kar->nip ?>" placeholder="Masukan NIP" title="Isikan data dengan benar" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_karyawan"> Nama Karyawan : </label>
                        <input type="text" class="form-control form-control-user" id="nama_karyawan" name="nama_karyawan" value="<?php echo $kar->nama_karyawan ?>" placeholder="Masukan Nama Karyawan" title="Isikan data dengan benar" required>
                    </div>
                    <div class="form-group">
                        <label for="jabatan"> Jabatan : </label>
                        <input type="text" class="form-control form-control-user" id="jabatan" name="jabatan" value="<?php echo $kar->jabatan ?>" placeholder="Masukan Jabatan" title="Isikan data dengan benar" required>
                    </div>
                    <hr>
                    <button type="submit" name="submit" class="btn btn-success btn-user btn-block">Simpan</button>
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

           