<!-- Modal add -->
<div class="modal fade" id="addlevel" role="dialog">
    <div class="modal-dialog">
        <form class="form" action="<?= base_url('admin/level/add'); ?>" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Level</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <label for="title" class="col-sm-2 control-label">Level's Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="i_nama" placeholder="Mark Zukerburg" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
$x = 0;
foreach ($level->result_array() as $i) : $x++;
    $id = $i['level_id'];
    $nama = $i['name'];

?>

    <div class="modal fade" id="editlevel<?= $id; ?>" role="dialog">
        <div class="modal-dialog">
            <form class="form" action="<?= base_url('admin/level/update/' . $id); ?>" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Level</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <label for="title" class="col-sm-2 control-label">Level Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="i_nama" placeholder="Mark Zukerburg" value="<?= $nama; ?>" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">EDIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php endforeach; ?>

<!-- Modal Delete -->

<?php
$x = 0;
foreach ($level->result_array() as $i) : $x++;
    $id = $i['level_id'];
    $nama = $i['name'];

?>
    <div class="modal fade" id="deletelevel<?= $id; ?>" role="dialog">
        <div class="modal-dialog">
            <form class="form" action="<?= base_url('admin/level/delete/' . $id); ?>" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Read to Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        Pilih delete untuk menghapus Level dengan nama <?= $nama; ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php endforeach; ?>