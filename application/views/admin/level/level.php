<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Level</title>
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

                    <h3>Level</h3>
                    <div class="container">
                        <?php $this->load->view("admin/_partials/breadcrumb.php"); ?>
                    </div>


                    <!-- box-header -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            List Level
                            <a type="button" data-bs-toggle="modal" data-bs-target="#addlevel" class="btn btn-primary">
                                Add (+)
                            </a>
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $x = 1; ?>
                                    <?php foreach ($level->result_array() as $i) : ?>
                                        <?php
                                        $id = $i['level_id'];
                                        $nama = $i['name']; ?>

                                        <tr>
                                            <td><?= $x; ?></td>
                                            <td><?= $nama; ?></td>
                                            <td>
                                                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editlevel<?= $id; ?>">Edit</a>
                                                <a type="button" data-bs-toggle="modal" data-bs-target="#deletelevel<?= $id; ?>" class="btn btn-danger">Delete</a>
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
    <?php $this->load->view("admin/level/modal_level.php"); ?>
    <!-- The Modal -->
    <?php $this->load->view("admin/_partials/modal.php"); ?>
    <?php $this->load->view("admin/_partials/js.php"); ?>
</body>

</html>