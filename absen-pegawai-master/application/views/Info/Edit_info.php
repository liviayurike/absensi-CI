<div class="row">
    <div class="col-12">
        <div class="card">
            <form action="<?= base_url('Info/update') ?>" method="post">
                <div class="card-header">
                    <h4 class="card-title">Edit Info</h4>
                </div>
                <div class="card-body border-top py-0 my-3">
                    <h4 class="text-muted my-3">Info</h4>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="Judul_Info">Judul : </label>
                                <input type="text" name="Judul_Info" id="Judul_Info" value="<?= $Info->Judul_Info ?>" class="form-control" placeholder="Masukan Judul Info" required="reuqired" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="form-group">
                                <label for="Isi Info">Isi : </label>
                                <input type="Isi_Info" name="Isi_Info" id="Isi_Info" value="<?= $Info->Isi_Info ?>" class="form-control" placeholder="Masukan Isi Info Lengkap" required="reuqired" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan <i class="fa fa-save"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>