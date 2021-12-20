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
          <th class="text-center">Nomor Surat</th>
          <th class="text-center">Tanggal Pengiriman</th>
          <th class="text-center">Perihal</th>
          <th class="text-center">Departemen</th>
          <th class="text-center">File</th>
          <!-- <th class="text-center">Aksi</th> -->
          </tr>
        </thead>
        <tbody>
        <?php
        foreach ($surat as $su ) { ?>
            <tr>
              <td class="text-center"><?= $su->nomor_surat ?></td>
              <td class="text-center"><?= $su->tgl_kirim ?></td>
              <td class="text-center"><?= $su->perihal ?></td>
              <td class="text-center"><?= $su->departemen ?></td>
              <td class="text-center"><?= $su->file ?></td>  
            
          </td>
          <?php } ?>
          </table>
</div>
<div class="col-sm-12"></div>
  <!-- <iframe src="file" width="100%" title="Iframe Example"></iframe> -->
  <iframe src="<?php echo base_url('arsip/'.$su->file)?>" style="border:2px solid blue;" height="600px" width="100%" title="iframe example"></iframe>
</div>