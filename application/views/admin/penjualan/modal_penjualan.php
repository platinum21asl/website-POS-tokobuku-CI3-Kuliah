<div class="modal fade" id="ShowBuku" role="dialog">
    <div class="modal-dialog modal-lg">
        <form class="form-horizontal" action="" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pilih Buku</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="col-sm-13">
                    <div class="box-body table-responsive">
                        <table class="table table-bordered table-display" id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Authors</th>
                                    <th>Categories</th>
                                    <th>Qty</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($book->result_array() as $i) :
                                    $id = $i['book_id'];
                                    $title = $i['title'];
                                    $price = $i['price'];
                                    $discount = $i['discount'];
                                ?>
                                    <tr>
                                        <td><?= $id; ?></td>
                                        <td><?= $title; ?></td>
                                        <?php
                                        $temp = "";
                                        foreach ($book1->result_array() as $i) :
                                            $id1 = $i['book_id'];
                                            $author = $i['fullname'];
                                            if ($id == $id1) {
                                                if ($temp != "") {
                                                    $temp = $temp . ', 
                                                    &nbsp' . $author;
                                                } else {
                                                    $temp = $author;
                                                }
                                            }
                                        endforeach;

                                        ?>
                                        <td> <?= $temp; ?></td>
                                        <?php
                                        $temp = "";
                                        foreach ($book2->result_array() as $i) :
                                            $id1 = $i['book_id'];
                                            $book_category = $i['name'];
                                            if ($id == $id1) {
                                                if ($temp != "") {
                                                    $temp = $temp . ', 
                                                        &nbsp' . $book_category;
                                                } else {
                                                    $temp = $book_category;
                                                }
                                            }
                                        endforeach;
                                        ?>

                                        <td><?= $temp; ?>
                                        </td>
                                        <td>

                                            <input type="number" name="quantity" id="<?= $id; ?>" value="1" class="form-control" style="width: 65px;">

                                        </td>

                                        <td>
                                            <div style="width: 78px;">
                                                <button class="add_cart btn btn-success btn-block" type="submit" data-productid="<?= $id; ?>" data-productname="<?= $title; ?>" data-productprice="<?= $price;  ?>" data-productdiscount="<?= $discount; ?>">
                                                    <i class="fa fa-cart-plus"></i> Add
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>



<!-- Modal Search Customer-->
<div class="modal fade" id="showCustomer" role="dialog">
    <div class="modal-dialog modal-lg">
        <form class="form-horizontal" action="" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pilih Customer</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="box-body table-responsive">
                        <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="25%">No.Member</th>
                                    <td style="display:none;">Id</td>
                                    <th width="30%">Name</th>
                                    <th width="25%">Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $x = 1;
                                foreach ($customer->result_array() as $i) :
                                    $id = $i['customer_id'];
                                    $name = $i['name'];
                                    $phone = $i['phone'];
                                    $no_member = $i['no_member'];
                                ?>
                                    <tr>
                                        <td><?php echo $no_member; ?></td>
                                        <td style="display:none;"><?php echo $id; ?></td>
                                        <td><?php echo $name; ?></td>

                                        <td> <?php echo $phone; ?></td>
                                    </tr>
                                <?php
                                    $x++;
                                endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- End Modal Search Customer-->