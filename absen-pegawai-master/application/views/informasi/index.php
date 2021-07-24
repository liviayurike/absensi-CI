<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-block">
                <h4 class="card-title float-left">Data Informasi Umum</h4>
                <div class="d-inline ml-auto float-right">
                    <a href="<?= base_url('informasi/create') ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped datatable">
                        <thead>
                            <th>No</th>
                            <th width="30%">Informasi</th>
                            <th>File</th>
                            <th>Aksi</th>
                            <!-- <th></th> -->
                        </thead>
                        <tbody>
                            <?php foreach ($informasi as $j => $i) : ?>
                                <tr>
                                    <td><?= $j + 1 ?></td>
                                    <td>
                                        <span class="font-weight-bold"><?= $i->judul_info ?></span> <br>
                                        <span class="text-muted"> <?= $i->isi ?></span>
                                    </td>
                                    <td>
                                        <a><?= $i->file ?></a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('informasi/edit/' . $i->id_info) ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                        <a href="<?= base_url('informasi/destroy/' . $i->id_info) ?>" class="btn btn-danger btn-sm btn-delete ml-2" onclick="return false"><i class="fa fa-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>