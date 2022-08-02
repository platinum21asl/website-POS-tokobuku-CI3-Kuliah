<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Create Account Employee</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" method="POST" action="<?= base_url('auth/Employee/registration'); ?>">

                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="name" name="name" type="text" value="<?= set_value('name'); ?>" placeholder="Fullname" />
                                        <label for="inputFirstName" Enter>Fullname</label>
                                        <?= form_error('name', '<small class ="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="nip" name="nip" type="text" value="<?= set_value('nip'); ?>" placeholder="NIP" />
                                        <label for="inputFirstName">NIP</label>
                                        <?= form_error('nip', '<small class ="text-danger">', '</small>'); ?>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" name="email" type="text" value="<?= set_value('email'); ?>" placeholder="name@example.com" />
                                        <label for="inputEmail">Email address</label>
                                        <?= form_error('email', '<small class ="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="phone" name="phone" type="text" value="<?= set_value('phone'); ?>" placeholder="0832xxx xxx xxx" />
                                        <label for="inputEmail">Phone</label>
                                        <?= form_error('phone', '<small class ="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="address" name="address" type="text" value="<?= set_value('address'); ?>" placeholder="address" />
                                        <label for="inputEmail">Address</label>
                                        <?= form_error('address', '<small class ="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input class="form-control mb-md-0" id="gender" name="gender" type="text" placeholder="Enter Gender" />
                                                <label class="small mb-1" for="inputName">Gender</label>
                                                <?php form_error('gender', '<small class="text-danger>', '</small>') ?>
                                            </div>
                                        </div>
                                        <!-- INI COmbo BOX -->
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <select class="form-select mb-md-0" id="level" name="level" type="text">
                                                    <option value="">Pilih Level</option>
                                                    <?php foreach ($datalevel as $value) : ?>
                                                        <option value="<?= $value->level_id; ?>">
                                                            <?= $value->name; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- End of ComboBOX -->
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputPassword" name="password1" type="password" placeholder="Create a password" />
                                                <label for="inputPassword">Password</label>
                                                <?= form_error('password1', '<small class ="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" name="password2" />
                                                <label for="inputPasswordConfirm">Confirm Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="<?= base_url('auth/Employee'); ?>">Have an account? Go to login</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2021</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>