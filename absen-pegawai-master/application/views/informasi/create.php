<div class="row">
    <div class="col-12">
        <div class="card">
            <?php echo form_open_multipart('informasi/store'); ?>
            <div class="card-header">
                <h4 class="card-title">Tambah Informasi</h4>
            </div>
            <div class="card-body border-top py-0 my-3">
                <h4 class="text-muted my-3">Informasi</h4>
                <div class="form-group">
                    <label for="judul_info">Judul Informasi : </label>
                    <input type="text" name="judul_info" id="judul_info" class="form-control" placeholder="Masukkan Judul Informasi" required="reuqired" />
                </div>
                <div class="form-group">
                    <label for="isi">Isi Informasi : </label>
                    <input type="text" name="isi" id="isi" class="form-control" placeholder="Masukkan Isi Informasi" required="reuqired" />
                </div>
                <div class="form-group">
                    <label for="file">File : </label>
                    <input type="file" name="file" id="file" class="form-control" />
                    <small style="color: red">*Biarkan kosong jika tidak ada</small>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan <i class="fa fa-save"></i></button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>