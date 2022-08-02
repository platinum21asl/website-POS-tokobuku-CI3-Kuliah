<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard SB-admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="<?= base_url('/css/styles.css'); ?>" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
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
                <h1>Tugas Container</h1>
                <?php $this->load->view("admin/_partials/breadcrumb.php"); ?>
                <div class="row mt-4">
                    <div class="col mt-3">
                        <div class="container bg-warning">
                            <h5 class="text-center">Container 1 Gambar</h5>
                            <div class="row">
                                <div class="col-sm-4 bg-primary">
                                    <center>
                                        <div class="text-center" style="width: 18rem;">
                                            <img src=" <?= base_url('/assets/img/1.png'); ?>" class="card-img-top" alt">
                                            <div class="card-body">
                                                <h6>Logo UAJY</h6>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                                <div class="col-sm-4 bg-secondary">
                                    <center>
                                        <div class=" text-center" style="width: 18rem;">
                                            <img src=" <?= base_url('/assets/img/2.png'); ?>" class="card-img-top " alt">
                                            <div class="card-body">
                                                <h6>Daniel Renato Marlen_191710096</h6>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                                <div class="col-sm-4 bg-success">
                                    <center>
                                        <div class="text-center" style="width: 18rem;">
                                            <img src=" <?= base_url('/assets/img/3.jpg'); ?>" class="card-img-top " alt">
                                            <div class="card-body">
                                                <h6>Gedung Bonaventura</h6>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="container bg-success">
                            <h5 class="text-center">Container 2 Gambar</h5>
                            <div class="row">
                                <div class="col-sm-6 bg-primary">
                                    <center>
                                        <div class="text-center" style="width: 18rem;">
                                            <ul class="list-unstyled ">
                                                <h3>Pengalaman Belajar SIWEB</h3>
                                                <p>Baiklah, Mari Kita lihat.! Pengalaman yang Cukup menarik membuat adrenaline saya semakin meningkat ketika dihadapan ini mata kuliah. </p>
                                            </ul>
                                        </div>
                                    </center>

                                </div>
                                <div class="col-sm-6 bg-warning">
                                    <center>
                                        <div class="text-center " style="width: 18rem;">
                                            <h4 class="">Kepada Dosen dan Asdos</h4>
                                            <p>Saya hanya ingin memberi satu saran saja, yaitu, tolong soal ungudied nya di perjelas secara jelas, seperti memiliki struktur kalimat yang jelas..</p>
                                            <p>Terima Kasih!</p>
                                        </div>
                                    </center>

                                </div>

                            </div>
                        </div>
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