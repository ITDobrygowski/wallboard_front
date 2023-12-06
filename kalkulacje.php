<!doctype html>
<html lang="pl" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">
<head>

    <?php include "assets/head.php"; ?>

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
                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Michał Bajor</span>
                                <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">Doradca Klienta Biznesowego</span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Cześć Michał!</h6>
                        <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profil</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Zablokuj ekran</span></a>
                        <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Wyloguj</span></a>
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
                    <?php include "assets/menu.php"?>
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
                                <h4 class="mb-sm-0">KALKULATOR OFERT</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Narzędzia</a></li>
                                        <li class="breadcrumb-item active">Kalkulator ofert</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row justify-content-center">
                                <div class="col-xl-9">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card ribbon-box border ribbon-fill shadow-none mb-lg-0">
                                                <div class="card-body p-4 m-2">
                                                    <div class="ribbon ribbon-secondary">STR</div>

                                                    <div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <h5 class="mb-1 fw-bold">Short Term Rental</h5>
                                                                <p class="text-muted mb-0">1 - 29 dni</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="my-4 text-muted">
                                                    <div>
                                                        <ul class="list-unstyled vstack gap-3 text-muted">
                                                            <li>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Kwota najmu: <b>jedna stawka dobowa</b>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Limit kilometrów: <b>bez limitu</b>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Kaucja zwrotna: <b>500 zł</b>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Zniesienie udziału w szkodzie: <b>do 0 zł</b>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="mt-4">
                                                            <a href="kalkulator_str.php" class="btn btn-soft-danger w-100 waves-effect waves-light">Stwórz kalkulacje</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <!--end col-->
                                        <div class="col-lg-4">
                                            <div class="card ribbon-box border ribbon-fill shadow-none mb-lg-0">
                                                <div class="card-body p-4 m-2">
                                                    <div class="ribbon ribbon-danger">MTR</div>

                                                    <div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <h5 class="mb-1 fw-bold">Medium Term Rental</h5>
                                                                <p class="text-muted mb-0">1 - 12 miesięcy</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="my-4 text-muted">
                                                    <div>
                                                        <ul class="list-unstyled vstack gap-3 text-muted">
                                                            <li>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Limit kilometrów: <b>2000 - 8000</b>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Kaucja zwrotna: <b>jednomiesięczny czynsz</b>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Zniesienie udziału w szkodzie: <b>do 500 zł</b>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Zniesienie udziału w szkodzie plus: <b>do 0 zł</b>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="mt-4">
                                                            <a href="kalkulator_mtr.php" class="btn btn-danger w-100 waves-effect waves-light">Stwórz kalkulacje</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-4">
                                            <div class="card ribbon-box border ribbon-fill shadow-none mb-lg-0">
                                                <div class="card-body p-4 m-2">
                                                    <div class="ribbon ribbon-secondary">LTR</div>

                                                    <div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <h5 class="mb-1 fw-bold">Long Term Rental</h5>
                                                                <p class="text-muted mb-0">12 - 36 miesięcy</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="my-4 text-muted">
                                                    <div>
                                                        <ul class="list-unstyled vstack gap-3 text-muted">
                                                            <li>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Limit kilometrów: <b>2000 - 8000</b>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Kaucja zwrotna: <b>dwumiesięczny czynsz</b>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Zniesienie udziału w szkodzie: <b>do 500 zł</b>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex">
                                                                    <div class="flex-shrink-0 text-success me-1">
                                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        Zniesienie udziału w szkodzie plus: <b>do 0 zł</b>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="mt-4">
                                                            <a href="kalkulator_ltr.php" class="btn btn-soft-danger w-100 waves-effect waves-light">Stwórz kalkulacje</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end col-->
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
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