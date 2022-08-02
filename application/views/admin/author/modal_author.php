<!-- Modal add -->
<div class="modal fade" id="addAuthor" role="dialog">
    <div class="modal-dialog">
        <form class="form" action="<?= base_url('admin/author/add'); ?>" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Author</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <label for="title" class="col-sm-2 control-label">Author's Fullname</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="i_fullname" placeholder="Mark Zukerburg" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="title" class="col-sm-2 control-label">Author's Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="i_email" placeholder="markzukerburg@gmail.com" required>
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

<!-- Modal Edit -->

<?php
$x = 0;
foreach ($author->result_array() as $i) : $x++;
    $id = $i['author_id'];
    $fullname = $i['fullname'];
    $email = $i['email'];
?>

    <div class="modal fade" id="editAuthor<?= $id; ?>" role="dialog">
        <div class="modal-dialog">
            <form class="form" action="<?= base_url('admin/author/update/' . $id); ?>" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Author</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <label for="title" class="col-sm-2 control-label">Author's Fullname</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="i_fullname" placeholder="Mark Zukerburg" value="<?= $fullname;; ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="title" class="col-sm-2 control-label">Author's Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="i_email" placeholder="markzukerburg@gmail.com" value="<?= $email; ?>" required>
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
foreach ($author->result_array() as $i) : $x++;
    $id = $i['author_id'];
    $fullname = $i['fullname'];
    $email = $i['email'];
?>
    <div class="modal fade" id="deleteAuthor<?= $id; ?>" role="dialog">
        <div class="modal-dialog">
            <form class="form" action="<?= base_url('admin/author/delete/' . $id); ?>" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Read to Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">X</span></button>
                    </div>
                    <div class="modal-body">
                        Pilih delete untuk menghapus Author dengan nama <?= $fullname; ?>
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