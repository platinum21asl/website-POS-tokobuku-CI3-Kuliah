<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view("admin/_partials/head.php"); ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    foreach ($css_files as $file) : ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
</head>

<body class="sb-nav-fixed">
    <?php $this->load->view("admin/_partials/navbar.php"); ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php $this->load->view("admin/_partials/sidebar.php"); ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1>Grocery CRUD</h1>
                    <div class="container">
                        <?php $this->load->view("admin/_partials/breadcrumb.php"); ?>
                    </div>
                    <div>
                        <a href='<?php echo site_url('grocerytokobuku/author') ?>'>Author</a> |
                        <a href='<?php echo site_url('grocerytokobuku/book_category') ?>'>Book Category</a> |
                        <a href='<?php echo site_url('grocerytokobuku/supplier') ?>'>Supplier</a> |
                        <a href='<?php echo site_url('grocerytokobuku/customer') ?>'>Customer</a> |
                        <a href='<?php echo site_url('grocerytokobuku/level') ?>'>Level</a> |

                    </div>
                    <div style='height:20px;'></div>
                    <div style="padding: 10px">
                        <?php echo $output; ?>
                    </div>
                    <?php foreach ($js_files as $file) : ?>
                        <script src="<?php echo $file; ?>"></script>
                    <?php endforeach; ?>
                </div>
            </main>
            <?php $this->load->view("admin/_partials/footer.php"); ?>
        </div>

    </div>
    <?php $this->load->view("admin/_partials/modal.php"); ?>
    <?php $this->load->view("admin/_partials/js.php"); ?>
</body>

</html>