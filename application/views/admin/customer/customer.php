<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Customer</title>
    <?php $this->load->view("admin/_partials/head.php"); ?>
</head>

<body>
    <?php $this->load->view("admin/_partials/navbar.php"); ?>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php $this->load->view("admin/_partials/sidebar.php"); ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">

                    <h3>Customer</h3>
                    <div class="container">
                        <?php $this->load->view("admin/_partials/breadcrumb.php"); ?>
                    </div>


                    <!-- box-header -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            List Customer
                            <a type="button" data-bs-toggle="modal" data-bs-target="#addcustomer" class="btn btn-primary">
                                Add (+)
                            </a>
                        </div>


                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>No_Member</th>
                                        <th>Gender</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $x = 1; ?>
                                    <?php foreach ($customer->result_array() as $i) : ?>
                                        <?php
                                        $id = $i['customer_id'];
                                        $nama = $i['name'];
                                        $email = $i['email'];
                                        $no_member = $i['no_member'];
                                        $gender = $i['gender'];
                                        $phone = $i['phone'];
                                        $address = $i['address']; ?>

                                        <tr>
                                            <td><?= $x; ?></td>
                                            <td><?= $nama; ?></td>
                                            <td><?= $email; ?></td>
                                            <td><?= $no_member; ?></td>
                                            <td><?= $gender; ?></td>
                                            <td><?= $phone; ?></td>
                                            <td><?= $address; ?></td>
                                            <td>
                                                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editcustomer<?= $id; ?>">Edit</a>
                                                <a type="button" data-bs-toggle="modal" data-bs-target="#deletecustomer<?= $id; ?>" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <?php $x++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </main>
            <?php $this->load->view("admin/_partials/footer.php"); ?>
        </div>
    </div>
    <?php $this->load->view("admin/customer/modal_customer.php"); ?>
    <!-- The Modal -->
    <?php $this->load->view("admin/_partials/modal.php"); ?>
    <?php $this->load->view("admin/_partials/js.php"); ?>
</body>


</html>