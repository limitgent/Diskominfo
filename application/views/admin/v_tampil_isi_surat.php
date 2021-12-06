<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="row">
  <div class="col-sm-12">
    <table class="table table-bordered">
    <thead>
          <tr>
          <th class="text-center">ID Surat</th>
          <th class="text-center">ID OPD</th>
          <th class="text-center">Tanggal Kirim</th>
          <th class="text-center">Tanggal Terima</th>
          <th class="text-center">Perihal</th>
          <th class="text-center">File</th>
          <!-- <th class="text-center">Aksi</th> -->
          </tr>
        </thead>
        <tbody>
        <?php 
      
        foreach ($surat as $su ) { ?>
          <tr>
            <td class="text-center"><?= $su->id_surat ?></td>
            <td class="text-center"><?= $su->id_opd ?></td>
            <td class="text-center"><?= $su->tgl_kirim ?></td>
            <td class="text-center"><?= $su->tgl_terima ?></td>
            <td class="text-center"><?= $su->perihal ?></td>
            <td class="text-center"><?= $su->file ?></td>  
          
        </td>
        <?php } ?>
      <!--<tr>
        <th width="100px">ID Surat</th>
        <th width="30px">:</th>
        <td><?= $surat['id_surat'] ?></td>
      </tr>
      <tr>
        <th width="100px">ID OPD</th>
        <th width="30px">:</th>
        <td><?= $surat['id_opd'] ?></td>
      </tr>
      <tr>
        <th width="100px">Perihal</th>
        <th width="30px">:</th>
        <td><?= $surat['perihal'] ?></td>
      </tr> -->
</table>
</div>
<div class="col-sm-12"></div>
  <!-- <iframe src="file" width="100%" title="Iframe Example"></iframe> -->
  <iframe src="<?php echo base_url('uploads/'.$su->file)?>" style="border:2px solid blue;" height="600px" width="100%" title="iframe example"></iframe>
</div>
