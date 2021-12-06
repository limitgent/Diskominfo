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
      <tr>
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
      </tr>
</table>
</div>
<div class="col-sm-12"></div>
  <iframe src="<?= base_url('surat/'.$surat['surat'])?>" style="border:2px solid blue;" height="600px" width="100%" title="iframe example"></iframe>
</div>