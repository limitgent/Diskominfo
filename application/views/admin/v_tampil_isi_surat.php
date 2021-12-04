<!doctype html>
<html lang="en">
  <head>
   <?php
            $surat = //surat
            $filename = $su->file;
            header ('Content-type: application/pdf');
            header ('Content-Disposition: inline; filename="'. $filename . '"');
            header ('Content-Transfer-Encoding: binary');
            header ('Accept-Ranges: bytes');
            @readfile($file);
    ?>