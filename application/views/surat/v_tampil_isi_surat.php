<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kirim Surat</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Content Row -->
    </div>
    <div class="col-lg-10">
    <?php echo form_open_multipart('surat/C_kirim_surat/aksi_tambah_surat') ;?>
    
        <div class="form-group">
                <label for="no_surat"> Nomor Surat : </label>
                <input type="text" name="id_surat" id="id_surat" value="<?= $id_surat; ?>" class="form-control" readonly>
            </div>
        <div class="form-group">
                <label for="id_opd"> Nama OPD : </label>
                <fieldset class="form-group">
                <select name="id_opd" id="id_opd" class\="custom-select">
                <?php
                foreach ($opd as $s) :
            ?>
                <option value="<?= $s->id_opd;?>"><?= $s->nama_opd;?></option>
            <?php
                endforeach;
            ?>
            </select>
            </fieldset>             
            </div>
                <label for="tgl_kirim"> Tanggal Kirim : </label>
                <input type="date" class="form-control form-control-user" id="tgl_kirim" name="tgl_kirim" placeholder="masukkan tanggal kirim" title="tentukan hari dan tanggal" required>
            </div>
            <div class="form-group">
                <label for="perihal"> Perihal : </label>
                <input type="text" class="form-control form-control-user" id="perihal" name="perihal" placeholder="masukkan perihal Anda dalam mengirim surat" title="masukkan perihal surat dengan benar" required>
            </div>
            
            <div class="form-group">
                <label for="file"> File : </label>
                <input type="file" class="form-control form-control-user" id="dokumen" name="dokumen" placeholder="masukkan file surat" title="masukkan soft file surat" required>
            </div>

        <div class="form-group text-center">`
                <button class="btn btn-primary px-2 mr-1" type="submit" value="upload">Kirim</button>
                <button class="btn btn-secondary" onclick="window.history.back()"><i class="fas fa-arrow-left"></i></button>
            </div>
            <?php echo form_close();?>
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
        <!-- /.container-fluid -->

    </div>