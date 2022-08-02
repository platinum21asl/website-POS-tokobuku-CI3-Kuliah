<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <?php $this->load->view("admin/_partials/head.php"); ?>
</head>

<body>
    
    <?php $this->load->view("admin/_partials/navbar.php"); ?>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php $this->load->view("admin/_partials/sidebar.php"); ?>
        </div>
        <div id="layoutSidenav_content">
            <div class="container">
                <div class="row mt-4">
                    <div class="col mt-3">
                        <h1>About Us</h1>
                        <?php $this->load->view("admin/_partials/breadcrumb.php"); ?>
                        <p>Ini halaman about</p>
                    </div>
                </div>
            </div>
            <?php $this->load->view("admin/_partials/footer.php"); ?>
        </div>
    </div>
    <?php $this->load->view("admin/_partials/modal.php"); ?>
    <?php $this->load->view("admin/_partials/js.php"); ?>
</body>

</html>