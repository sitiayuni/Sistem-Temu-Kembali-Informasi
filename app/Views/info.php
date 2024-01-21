<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Temu Kembali Informasi</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url("assets/images/logos/favicon.png") ?>" />
    <link rel="stylesheet" href="<?= base_url("assets/css/styles.min.css") ?>" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="<?= base_url("publikasi") ?>" class="text-nowrap logo-img">
                        <img src="<?= base_url("assets/images/logos/STKI.png") ?>" width="180" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="sidebar-item mt-3">
                            <a class="sidebar-link" href="<?= base_url("publikasi") ?>" aria-expanded="false">
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">Publikasi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="<?= base_url("info") ?>" aria-expanded="false">
                                <span>
                                    <i class="ti ti-info-circle"></i>
                                </span>
                                <span class="hide-menu">Info</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <h5 class="card-title fw-semibold">Publikasi</h5>
                    </ul>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <!--  Row 1 -->
                <div class="row">
                    <div class="col">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                                    <div class="mb-3 mb-sm-0">
                                        <h5 class="card-title fw-semibold">Pencarian</h5>
                                    </div>
                                    <div>
                                        <select class="form-select">
                                            <option value="9">All</option>
                                            <option value="1">Fakultas Ekonomi dan Bisnis</option>
                                            <option value="2">Fakultas Hukum</option>
                                            <option value="3">Fakultas Pertanian</option>
                                            <option value="4">Fakultas Keguruan dan Ilmu Pendidikan</option>
                                            <option value="5">Fakultas Teknik</option>
                                            <option value="6">Fakultas Ilmu Sosial dan Ilmu Politik</option>
                                            <option value="7">Fakultas Matematika dan Ilmu Pengetahuan Alam
                                            </option>
                                            <option value="8">Fakultas Kedokteran</option>
                                        </select>
                                    </div>
                                </div>
                                <form class="row g-3">
                                    <div class="col g-3">
                                        <input type='text' class="form-control" id="inputPassword2" placeholder="Contoh: Teknik dan Manajemen Pesemaian">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mb-3">Cari</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="<?= base_url("assets/libs/jquery/dist/jquery.min.js") ?>"></script>
                <script src="<?= base_url("assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js") ?>"></script>
                <script src="<?= base_url("assets/js/sidebarmenu.js") ?>"></script>
                <script src="<?= base_url("assets/js/app.min.js") ?>"></script>
                <script src="<?= base_url("assets/libs/apexcharts/dist/apexcharts.min.js") ?>"></script>
                <script src="<?= base_url("assets/libs/simplebar/dist/simplebar.js") ?>"></script>
                <script src="<?= base_url("assets/js/dashboard.js") ?>"></script>
</body>

</html>