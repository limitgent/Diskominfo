<div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Karyawan</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Row -->
                <!-- Disini tempat membuat Edit Profil nya! -->
            </div>
            <div class="col-lg-10">
                <?php
                foreach($divisi as $div) ?>
                 <?php echo form_open_multipart('admin/Janji/aksitambah_karyawan/'.$div->id_divisi) ;?>
                    <div class="form-group">
                        <label for="id_divisi"> Nama Divisi : </label>
                        <input type="hidden" class="form-control form-control-user"  id="id_divisi" name="id_divisi" value="<?php echo $div->id_divisi ?>">
                        <input type="text" name="nama_divisi" id="_divisi" value="<?php echo $div->nama_divisi ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nip"> NIP : </label>
                        <input type="text" class="form-control form-control-user" id="nip" name="nip" placeholder="Masukan NIP" title="Isikan data dengan benar" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_karyawan"> Nama Karyawan : </label>
                        <input type="text" class="form-control form-control-user" id="nama_karyawan" name="nama_karyawan" placeholder="Masukan Nama Karyawan" title="Isikan data dengan benar" required>
                    </div>
                    <div class="form-group">
                        <label for="jabatan"> Jabatan : </label>
                        <input type="text" class="form-control form-control-user" id="jabatan" name="jabatan" placeholder="Masukan Jabatan" title="Isikan data dengan benar" required>
                    </div>
                    <div class="form-group">
                        <label for="foto"> Foto Karyawan : </label>
                        <input type="file" class="form-control form-control-user" id="foto" name="foto" placeholder="Masukan foto" title="Isikan foto Karyawan" required>
                    </div>
                    <hr>
                    <button type="submit" name="submit" class="btn btn-success btn-user btn-block">Tambah</button>
                    <?php echo form_close();?>
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

           
<div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Karyawan Divisi <?php echo $div->nama_divisi ?></h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr> 
            <th>Foto</th>
            <th>NIP</th>
            <th>Nama Karyawan</th>
            <th>Jabatan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        foreach ($karyawan as $kar ) { ?>
          <tr>
            <td>
            <?php
            if($kar->foto==''){?>
              <label>Belum Ada Gambar</label><br>
                <?php }else{ ?>
                  <img src="<?php echo base_url('assets/img/karyawan/'.$kar->foto)?>" width="90" height="110"><br>
                  <?php }?></td>
            <td><?=$kar->nip?></td>
            <td><?=$kar->nama_karyawan?></td>
            <td><?=$kar->jabatan?></td>
            <td>
            <a class="btn btn-primary" href="<?php echo base_url('admin/Janji/edit_karyawan/'. $kar->nip.'/'.$kar->id_divisi); ?>"><i class="fas fa-pencil-alt"></i></a>
              <a class="btn btn-primary" href="<?php echo base_url('admin/Janji/tampilDetailKaryawan/'. $kar->nip.'/'.$kar->id_divisi); ?>"><i class="fas fa-info-circle"></i></a>
              <a class="btn btn-danger" href="<?php echo base_url('admin/Janji/hapus_karyawan/'. $kar->nip.'/'.$kar->id_divisi); ?>"><i class="fas fa-trash"></i></a>
            </td>
          </tr>
        <?php } ?>
          </tbody>
        </table>
        </div>
    </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
      <!-- End of Main Content -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->