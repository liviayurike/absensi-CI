<div class="row">
    <div class="col-12">
        <div class="card">
            <form action="<?php echo site_url('informasi/update'); ?>" method="post" enctype="multipart/form-data">
                <div class="card-header">
                    <h4 class="card-title">Edit Informasi</h4>
                </div>
                <div class="card-body border-top py-0 my-3">
                    <h4 class="text-muted my-3">Informasi</h4>
                    <div class="form-group">
                        <label for="judul_info">Judul Informasi : </label>
                        <input type="hidden" name="id_info" value="<?= $this->uri->segment(3) ?>">
                        <input type="text" name="judul_info" id="judul_info" value="<?= $informasi->judul_info ?>" class="form-control" placeholder="Masukkan Judul Informasi" required="reuqired" />
                    </div>

                    <div class="form-group">
                        <label for="isi">Isi Informasi : </label>
                        <input type="text" name="isi" id="isi" value="<?= $informasi->isi ?>" class="form-control" placeholder="Masukkan Isi Informasi" required="reuqired" />
                    </div>
                    <div class="form-group">
                        <label for="file">File : </label>
                        <?php if ($informasi->file != null) { ?>
                            <div>
                                <p> <?= $informasi->file ?> </p>
                            </div>
                        <?php
                        } ?>
                        <input type="file" name="file" id="file" value="<?= $informasi->file ?>" class="form-control" placeholder="Pilih" />
                        <small style="color: red">*Biarkan kosong jika tidak diganti</small>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan <i class="fa fa-save"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>