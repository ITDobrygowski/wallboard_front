<!doctype html>
<html lang="pl" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">
<head>

    <?php include "assets/head.php"; ?>

    <?php
    // We need to use sessions, so you should always start sessions using the below code.
    session_start();
    // If the user is not logged in redirect to the login page...
    if (!isset($_SESSION['loggedin'])) {
        header('Location: index.php');
        exit;
    }
    ?>

</head>

<body>

<!-- Begin page -->
<div id="layout-wrapper">

    <header id="page-topbar">
        <div class="layout-width">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box horizontal-logo">
                        <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/favicon.svg" alt="" height="22">
                        </span>
                            <span class="logo-lg">
                            <img src="assets/images/logo.svg" alt="" height="30">
                        </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/favicon_white.svg" alt="" height="22">
                        </span>
                            <span class="logo-lg">
                            <img src="assets/images/logo_white.svg" alt="" height="30">
                        </span>
                        </a>
                    </div>
                    <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    </button>
                </div>

                <div class="d-flex align-items-center">
                    <div class="ms-1 header-item d-none d-sm-flex">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
                            <i class='bx bx-fullscreen fs-22'></i>
                        </button>
                    </div>
                    <div class="ms-1 header-item d-none d-sm-flex">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                            <i class='bx bx-moon fs-22'></i>
                        </button>
                    </div>

                    <div class="dropdown ms-sm-3 header-item topbar-user" style="padding-right:15px;">
                        <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">

                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">Wybrany oddział: </span>
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text fw-bolder"><?php echo $wybrany_oddzial; ?></span>

                            </span>
                        </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->


                            <a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Zablokuj ekran</span></a>
                            <a class="dropdown-item" href="assets/logout.php"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Wyloguj</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <!-- Dark Logo-->
            <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/favicon.svg" alt="" height="22">
                    </span>
                <span class="logo-lg">
                        <img src="assets/images/logo.svg" alt="" height="30">
                    </span>
            </a>
            <!-- Light Logo-->
            <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/favicon_white.svg" alt="" height="22">
                    </span>
                <span class="logo-lg">
                        <img src="assets/images/logo_white.svg" alt="" height="30">
                    </span>
            </a>
            <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                <i class="ri-record-circle-line"></i>
            </button>
        </div>

        <div id="scrollbar">
            <div class="container-fluid">

                <div id="two-column-menu">
                </div>
                <?php
                include "assets/wall_menu.php";
                ?>
            </div>
            <!-- Sidebar -->
        </div>

        <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">WALLBOARD SERWISOWY</h4>
                            <?php

                            $data_teraz = strtotime(date("Y-m-d H:i:s"));
                            $data_serwera = strtotime('2023-11-12 23:34:50');
                            $diff = $data_teraz - $data_serwera;
                            $roznica = floor($diff / (60));
                            echo $roznica;
                            if ($roznica < 60) {
                                $status_serwera = "<span class='badge bg-success'>PRAWIDŁOWA</span>";
                            }
                            else
                            {
                                $status_serwera = "<span class='badge bg-danger'>NIEPRAWIDŁOWA</span>";
                            }
                            ?>
                            <div class="page-title-right">
                                Synchronizacja danych:  <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"><?php echo $status_serwera ;?></span>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">

                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-danger rounded-circle fs-3">
                                            <i class="ri-calendar-line align-middle"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1">
                                            OCZEKUJĄCE</p>
                                        <h4 class=" mb-0">0</h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-end">
                                        <span class="badge bg-danger">6.24%</span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-primary rounded-circle fs-3">
                                            <i class="ri-calendar-event-line align-middle"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1">
                                            Zaplanowane</p>
                                        <h4 class=" mb-0">11</h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-end">
                                        <span class="badge bg-primary">6.24%</span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-secondary rounded-circle fs-3">
                                            <i class="ri-calendar-check-line align-middle"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1">
                                            Zaakceptowane</p>
                                        <h4 class=" mb-0">40</h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-end">
                                        <span class="badge bg-secondary">6.24%</span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-success rounded-circle fs-3">
                                            <i class="ri-roadster-line align-middle"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1">
                                            Rozpoczęte</p>
                                        <h4 class=" mb-0">20</h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-end">
                                        <span class="badge bg-success">6.24%</span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->



                </div><!-- end row -->
                <div class="row" style="padding-top:50px;">
                    <div class="col-md-12">



                        <!-- Striped Rows -->
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Data rozpoczęcia</th>
                                <th scope="col">Status</th>
                                <th scope="col">Nr. rejestracyjny</th>
                                <th scope="col">Model pojazdu</th>
                                <th scope="col">Wykonujący</th>
                                <th scope="col">Adres</th>
                                <th scope="col">Typ zlecenia</th>
                                <th scope="col">Oddział</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row" class="user-select-all">5187611</th>
                                <td class="user-select-all">2023-11-09 11:01</td>
                                <td><span class="badge bg-success">Rozpoczęte</span></td>
                                <td class="user-select-all">DLU4085A</td>
                                <td class="user-select-all">Audi Q5</td>
                                <td>brak kierowcy</td>
                                <td class="user-select-all"><i class="ri-close-circle-line align-middle bg-danger text-light" style="padding:3px;font-size:17px;"></i> brak adresu</td>
                                <td>Podstaw do serwisu</td>
                                <td>Bielsko-Biała</td>

                            </tr>
                            <tr>
                                <th scope="row" class="user-select-all">5187611</th>
                                <td class="user-select-all">2023-11-09 11:01</td>
                                <td><span class="badge bg-success">Rozpoczęte</span></td>
                                <td class="user-select-all">DLU4085A</td>
                                <td class="user-select-all">Audi Q5</td>
                                <td><i class="ri-close-circle-line align-middle bg-danger text-light" style="padding:3px;font-size:17px;"></i> brak kierowcy</td>
                                <td class="user-select-all">asdasdasdasdasd asdasdasdasdasd asdasdasdasdasd</td>
                                <td>Podstaw do serwisu</td>
                                <td>Bielsko-Biała</td>

                            </tr>
                            <tr>
                                <th scope="row" class="user-select-all">5187611</th>
                                <td class="user-select-all">2023-11-09 11:01</td>
                                <td><span class="badge bg-success">Rozpoczęte</span></td>
                                <td class="user-select-all">DLU4085A</td>
                                <td class="user-select-all">Audi Q5</td>
                                <td>brak kierowcy</td>
                                <td class="user-select-all"><i class="ri-close-circle-line align-middle bg-danger text-light" style="padding:3px;font-size:17px;"></i> brak adresu</td>
                                <td>Podstaw do serwisu</td>
                                <td>Bielsko-Biała</td>

                            </tr>

                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <?php include "assets/footer.php";?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->



<!--start back-to-top-->
<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
</button>
<!--end back-to-top-->

<!--preloader-->
<div id="preloader">
    <div id="status">
        <div class="spinner-border text-primary avatar-sm" role="status">
            <span class="visually-hidden">Wczytywanie...</span>
        </div>
    </div>
</div>

<!-- JAVASCRIPT -->
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
<script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="assets/js/plugins.js"></script>

<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- Vector map-->
<script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
<script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

<!-- Dashboard init -->
<script src="assets/js/pages/dashboard-analytics.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
</body>

</html>