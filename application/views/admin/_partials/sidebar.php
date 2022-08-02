<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav <?= $this->uri->segment(2) == "" ? 'active' : '' ?>">
            <div class="sb-sidenav-menu-heading text-success">Core</div>
            <a class="nav-link" href="<?= base_url('admin/overview'); ?>">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard

            </a>
            <a class="nav-link" href="<?= base_url('admin/Overview/about'); ?>">
                <div class="sb-nav-link-icon"><i class="far fa-address-card"></i></div>
                about
            </a>
            <a class="nav-link" href="<?= base_url('admin/Overview/contact'); ?>">
                <div class="sb-nav-link-icon"><i class="fas fa-id-card-alt"></i></div>
                contact
            </a>
            <div class="sb-sidenav-menu-heading text-success">Tugas</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Kumpulan Tugas
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="<?= base_url('admin/Overview/biodata'); ?>">Data Diri</a>
                    <a class="nav-link" href="<?= base_url('admin/Overview/deskripsi'); ?>">Deskripsi Diri</a>
                    <a class="nav-link" href="<?= base_url('admin/Overview/container'); ?>">Tugas Container</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#DataMaster" aria-expanded="false" aria-controls="collapsecontainer">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Data Master
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="DataMaster" aria-labelledby="headingone" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="<?= site_url('admin/author'); ?>">Author</a>
                    <a class="nav-link" href="<?= site_url('admin/bookcategory'); ?>">Book Category</a>
                    <a class="nav-link" href="<?= site_url('admin/supplier'); ?>">Supplier</a>
                    <a class="nav-link" href="<?= site_url('admin/customer'); ?>">Customer</a>
                    <a class="nav-link" href="<?= site_url('admin/level'); ?>">Level</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#grocery" aria-expanded="false" aria-controls="collapsecontainer">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Grocery Toko Buku
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="grocery" aria-labelledby="headingone" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="<?= site_url('grocerytokobuku/author'); ?>">Author</a>
                    <a class="nav-link" href="<?= site_url('grocerytokobuku/book_category'); ?>">Book Category</a>
                    <a class="nav-link" href="<?= site_url('grocerytokobuku/supplier'); ?>">Supplier</a>
                    <a class="nav-link" href="<?= site_url('grocerytokobuku/customer'); ?>">Customer</a>
                    <a class="nav-link" href="<?= site_url('grocerytokobuku/level'); ?>">Level</a>
                    <a class="nav-link" href="<?= site_url('grocerytokobuku/book'); ?>">Book</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#groceryexampl" aria-expanded="false" aria-controls="collapsecontainer">
                <!-- data-bs-target="#groceryexamples" -->
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Grocery Example
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="groceryexamples" aria-labelledby="headingone" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="<?= site_url('examples/customers_management'); ?>">
                        <div class="sb-nav-link-icon">
                            <li class="fas fa-chart-area"></li>
                        </div>Customer
                    </a>
                    <a class="nav-link" href="<?= site_url('examples/orders_management'); ?>">
                        <div class="sb-nav-link-icon">
                            <li class="fas fa-chart-area"></li>
                        </div>Orders
                    </a>
                    <a class="nav-link" href="<?= site_url('examples/products_management'); ?>">
                        <div class="sb-nav-link-icon">
                            <li class="fas fa-chart-area"></li>
                        </div>Products
                    </a>
                    <a class="nav-link" href="<?= site_url('examples/offices_management'); ?>">
                        <div class="sb-nav-link-icon">
                            <li class="fas fa-chart-area"></li>
                        </div>Offices
                    </a>
                    <a class="nav-link" href="<?= site_url('examples/employees_management'); ?>">
                        <div class="sb-nav-link-icon">
                            <li class="fas fa-chart-area"></li>
                        </div>Employees
                    </a>
                    <a class="nav-link" href="<?= site_url('examples/film_management'); ?>">
                        <div class="sb-nav-link-icon">
                            <li class="fas fa-chart-area"></li>
                        </div>Film
                    </a>
                    <a class="nav-link" href="<?= site_url('examples/multigrids'); ?>">
                        <div class="sb-nav-link-icon">
                            <li class="fas fa-chart-area"></li>
                        </div>Multigrid[BETA]
                    </a>

                </nav>
            </div>
            <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                Pages
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                        Authentication
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="login.html">Login</a>
                            <a class="nav-link" href="register.html">Register</a>
                            <a class="nav-link" href="password.html">Forgot Password</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                        Error
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="401.html">401 Page</a>
                            <a class="nav-link" href="404.html">404 Page</a>
                            <a class="nav-link" href="500.html">500 Page</a>
                        </nav>
                    </div>
                </nav>
            </div> -->
            <div class="sb-sidenav-menu-heading text-success">Transaksi</div>
            <a class="nav-link" href="<?= base_url('admin/penjualan'); ?>">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Penjualan
            </a>
            <a class="nav-link" href="<?= site_url('admin/penjualan/list_penjualan') ?>">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Laporan Penjualan
            </a>
            <a class="nav-link" href="<?= site_url('admin/penjualan/chart') ?>">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Chart Penjualan
            </a>

            <a class="nav-link" href="<?= base_url('admin/pembelian'); ?>">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Pembelian
            </a>
            <a class="nav-link" href="<?= site_url('admin/pembelian/list_pembelian') ?>">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Laporan Pembelian
            </a>
            <a class="nav-link" href="<?= site_url('admin/pembelian/chart') ?>">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Chart Pembelian
            </a>
            <!-- <div class="sb-sidenav-menu-heading text-success">Addons</div>
            <a class="nav-link" href="charts.html">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Charts
            </a>
            <a class="nav-link" href="tables.html">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Tables
            </a> -->
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Daniel Renato Marlen
    </div>
</nav>