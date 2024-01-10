<?= $this->extend('template/template-backend-admin') ?>
<?= $this->section('content') ?>

<div class="col-sm-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"> Daftar <?= $subtitle ?></h3>
            <div class="card-tools">
                <button  class="btn btn-flat btn-primary btn-xs"data-toggle="modal" data-target="#add"><i class="fas fa-plus"> Add</i></button>
        </div>
    </div>
</div>
<div class="card-body p-0">
    <?php
    if (session()->getFlashdata('tambah')) {
        echo '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i>';
        echo session()->getFlashdata('tambah');
        echo '</h5></div>';
        
    }
    ?>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th width=70px>#</th>
                    <th>Pekerjaan</th>
                    <th width=100px>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach ($pekerjaan as $key => $value) {?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $value['pekerjaan']?></td>
                        <td></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</div>

<!---- modal add--->
<div class="modal fade" id="add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Pekerjaan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php echo form_open('pekerjaan/insertData') ?>
                <div class="modal-body">
                <div class="form-group">
                    <label >Pekerjaan</label>
                    <input name="pekerjaan" class="form-control" placeholder="Pekerjaan" required>
                </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>