<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Setting Karyawan Divisi</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>NIP</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        foreach ($karyawan as $kar ) { ?>
          <tr>
            <td><?=$kar->nip?></td>
            <td><?php
            if($kar->foto==''){?>
              <label>Belum Ada Gambar</label><br>
                <?php }else{ ?>
                  <img src="<?php echo base_url('assets/img/karyawan/'.$kar->foto)?>" width="90" height="110"><br>
                  <?php }?></td></td>
            <td><?=$kar->nama_karyawan?></td>
            <td><?=$kar->jabatan?></td>
            <td><?php
            if($kar->status==''){?>
              <label>Belum Ada Status</label><br>
                <?php }else{ ?>
                    <?=$kar->status?>
                  <?php }?></td>
            <td>
            <button type="button" data-toggle="modal" data-target="#UbahStatus<?=$kar->nip;?>" class="btn btn-success">
            Ubah Status
             </button> 
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
    <!--   Modal Ubah StATUS -->

<?php
        foreach($karyawan as $kar) :    
    ?>
        
        <div class="modal fade" id="UbahStatus<?= $kar->nip?>" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="konfirmasiModalTitle">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="konfirmasiModalTitle">Setting Status Karyawan</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="<?php echo base_url() ?>admin/Janji/updatestatus/<?php echo $kar->nip ?>">
                    <div class="modal-body">

                        <input type="hidden" name="id_divisi" id="id_divisi" value="<?php echo $kar->id_divisi;?>">
                        <input type="hidden" name="nip" id="nip" value="<?= $kar->nip;?>">
                        <div class="form-group">
                            <label for="useraname"> Nama Karyawan : </label>
                            <input type="text" name="nama_karyawan" id="nama_karyawan" value="<?php echo $kar->nama_karyawan;?>"readonly>
                        </div>
                        <div class="form-group">
                        <img src="<?php echo base_url('assets/img/karyawan/'.$kar->foto)?>" width="90" height="110" >
                        </div>
                        <input type="hidden" name="jabatan" id="jabatan" value="<?php echo $kar->jabatan;?>">               
                        <h5 class="text-left"> Apakah <?php echo $kar->nama_karyawan;?> ada di Kantor ? </h5>
                        <select name="status" id="status" >
                            <option>Dikantor</option>
                            <option>Tidak Hadir</option>
                        </select>

                       
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success">Update Status</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    <?php
        endforeach;
    ?>
</div>
  <body>
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
