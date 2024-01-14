<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Temu Kembali Informasi</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url("assets/images/logos/favicon.png") ?>" />
    <link rel="stylesheet" href="<?= base_url("assets/css/styles.min.css") ?>" />
    <link rel="stylesheet" href="<?= base_url("assets/css/table.css") ?>" />

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
                        <img src="<?= base_url("assets/images/logos/dark-logo.svg") ?>" width="180" alt="" />
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
                <div class="row">
                    <div class="col">
                        <div class="card w-100">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-semibold mb-4">Hasil Pencarian</h5>
                                <div class="table-responsive">
                                    <table class="table text-nowrap mb-0 align-middle">
                                        <thead class="text-dark fs-4">
                                            <tr>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">Judul</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">Fakultas</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">Topik</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">Similarity</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">Url</h6>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Cek apakah panjang list lebih dari 0
                                            if ($searchText["panjang list"] > 0) {
                                                // Loop melalui hasil pencarian
                                                for ($i = 0; $i < $searchText["panjang list"]; $i++) {
                                                    $judul = $searchText["hasil"][$i][1];
                                                    $fakultas = $searchText["hasil"][$i][0];
                                                    $topikArray = $searchText["hasil"][$i][11];
                                                    $similarity = $searchText["hasil"][$i][10];
                                                    $url = $searchText["hasil"][$i][8];
                                            ?>
                                                    <tr>
                                                        <td class="border-bottom-0"><?php echo $judul; ?></td>
                                                        <td class="border-bottom-0"><?php echo $fakultas; ?></td>
                                                        <td class="border-bottom-0">
                                                            <?php
                                                            // Menampilkan semua elemen array pada indeks 11
                                                            foreach ($topikArray as $topikElemen) {
                                                                echo $topikElemen . ' ';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class="border-bottom-0"><?php echo $similarity; ?></td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary" onclick="window.location.href='<?php echo $url; ?>'">
                                                                Buka
                                                            </button>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                            } else {
                                                ?>
                                                <tr>
                                                    <td colspan="5">Tidak ada hasil pencarian.</td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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