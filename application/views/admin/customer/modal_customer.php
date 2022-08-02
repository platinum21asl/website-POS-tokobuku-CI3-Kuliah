<!-- Modal add -->
<div class="modal fade" id="addcustomer" role="dialog">
    <div class="modal-dialog">
        <form class="form" action="<?= base_url('admin/customer/add'); ?>" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Customer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <label for="title" class="col-sm-2 control-label">Customer's Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="i_nama" placeholder="Mark Zukerburg" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="title" class="col-sm-2 control-label">Customer's Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="i_email" placeholder="markzukerburg@gmail.com" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="title" class="col-sm-2 control-label">Customer's No_Member</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="i_no_member" placeholder="00xx" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="title" class="col-sm-2 control-label">Customer's Gender</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="i_gender" placeholder="-" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="title" class="col-sm-2 control-label">Customer's Phone</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="i_phone" placeholder="08xxxxxxxxxx" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="title" class="col-sm-2 control-label">Customer's Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="i_address" placeholder="Pontianak" required>
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
foreach ($customer->result_array() as $i) : $x++;
    $id = $i['customer_id'];
    $nama = $i['name'];
    $email = $i['email'];
    $no_member = $i['no_member'];
    $gender = $i['gender'];
    $phone = $i['phone'];
    $address = $i['address'];

?>

    <div class="modal fade" id="editcustomer<?= $id; ?>" role="dialog">
        <div class="modal-dialog">
            <form class="form" action="<?= base_url('admin/customer/update/' . $id); ?>" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Supplier</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <label for="title" class="col-sm-2 control-label">Customer's Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="i_nama" placeholder="Mark Zukerburg" value="<?= $nama; ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="title" class="col-sm-2 control-label">Customer's Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="i_email" placeholder="markzukerburg@gmail.com" value="<?= $email; ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="title" class="col-sm-2 control-label">Customer's no_member</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="i_no_member" placeholder="00xx" value="<?= $no_member; ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="title" class="col-sm-2 control-label">Customer's Gender</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="i_gender" placeholder="-" value="<?= $gender; ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="title" class="col-sm-2 control-label">Customer's Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="i_phone" placeholder="08xxxxxxxxxx" value="<?= $phone; ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="title" class="col-sm-2 control-label">Customer's Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="i_address" placeholder="Pontianak" value="<?= $address; ?>" required>
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
foreach ($customer->result_array() as $i) : $x++;
    $id = $i['customer_id'];
    $nama = $i['name'];
    $email = $i['email'];
    $no_member = $i['no_member'];
    $gender = $i['gender'];
    $phone = $i['phone'];
    $address = $i['address'];

?>

    <div class="modal fade" id="deletecustomer<?= $id; ?>" role="dialog">
        <div class="modal-dialog">
            <form class="form" action="<?= base_url('admin/customer/delete/' . $id); ?>" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Read to Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">X</span></button>
                    </div>
                    <div class="modal-body">
                        Pilih delete untuk menghapus Customer dengan nama <?= $nama; ?>
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