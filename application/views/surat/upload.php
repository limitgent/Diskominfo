<h3> UPLOAD DOKUMEN </h3>

<form action="" method="POST" enctype="multipart/form-data">
    <b> File Upload</b> <input type="file" name="NamaFile">
    <input type="submit" name="proses" value="Upload">
</form>

<?php
$koneksi = mysqli_connect("localhost","root","root","db_pintu");

if(isset($_POST['proses'])){
    $direktori = "uploads/";
    $file_name=$_FILES['NamaFile']['name'];
    move_uploaded_file($_FILES['NamaFIle']['tmp_name'],$direktori.$file_name);

    mysqli_query($koneksi, "insert into dokumen set file='$file_name'");

    echo "<b<File Berhasil di Upload";
}
?>