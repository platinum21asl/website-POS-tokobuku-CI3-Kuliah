<!-- Modal add -->
<div class="modal fade" id="addbookcategory" role="dialog">
    <div class="modal-dialog">
        <form class="form" action="<?= base_url('admin/bookcategory/add'); ?>" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Book Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <label for="title" class="col-sm-2 control-label">Book Category's Fullname</label>
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


<!-- Modal Edit -->

<?php
$x = 0;
foreach ($book_category->result_array() as $i) : $x++;
    $id = $i['book_category_id'];
    $nama = $i['name'];

?>

    <div class="modal fade" id="editbookcategory<?= $id; ?>" role="dialog">
        <div class="modal-dialog">
            <form class="form" action="<?= base_url('admin/bookcategory/update/' . $id); ?>" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Book Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <label for="title" class="col-sm-2 control-label">Book Category Nama</label>
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
foreach ($book_category->result_array() as $i) : $x++;
    $id = $i['book_category_id'];
    $nama = $i['name'];

?>
    <div class="modal fade" id="deletebookcategory<?= $id; ?>" role="dialog">
        <div class="modal-dialog">
            <form class="form" action="<?= base_url('admin/bookcategory/delete/' . $id); ?>" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Read to Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        Pilih delete untuk menghapus book category dengan nama <?= $nama; ?>
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