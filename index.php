<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<head>


    <?php include "assets/head.php";?>


</head>

<body>

<div class="auth-page-wrapper pt-5">

    <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
        <div class="bg-overlay"></div>

        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
            </svg>
        </div>
    </div>


    <div class="auth-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-sm-5 mb-4 text-white-50">
                        <div>
                            <a href="" class="d-inline-block auth-logo">
                                <img src="assets/images/logo_all_white.svg" alt="" height="50">
                            </a>
                        </div>
                        <p class="mt-3 fs-15 fw-medium">Kaizen Rent S.A. - SoRent v2.1</p>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">

                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-danger">Cześć !</h5>
                                <p class="text-muted">Wpisz swoje dane do logowania</p>
                            </div>
                            <div class="p-2 mt-4">
                                <form action="assets/login_config.php" method="post">

                                    <div class="mb-3">
                                        <label for="username" class="form-label">Login</label>
                                        <input type="text" class="form-control" id="username" placeholder="Wpisz Login" name="username" required>
                                    </div>

                                    <!-- <div class="mb-3">
                                        <div class="float-end">
                                            <a href="#" class="text-muted">Zapomniałeś hasła ?</a>
                                        </div>
                                     -->
                                        <label class="form-label" for="password-input">Hasło</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input type="password"  name="password" class="form-control pe-5 password-input" placeholder="Wpisz hasło" id="password-input" required>
                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                        </div>
                                    </div>

                                    <!-- <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                        <label class="form-check-label" for="auth-remember-check">Zapamiętaj mnie</label>
                                    </div>
                                    -->
                                    <div class="mt-4">
                                        <button class="btn btn-danger w-100" type="submit">Zaloguj</button>
                                    </div>


                                </form>
                            </div>
                        </div>

                    </div>


                    <div class="mt-4 text-center">
                        <p class="mb-0">Nie masz jeszcze konta ? <a href="mailto:m.bajor@kaizenerent.pl" class="fw-semibold text-primary text-decoration-underline"> Zgłoś </a> </p>
                    </div>

                </div>
            </div>

        </div>

    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="mb-0 text-muted">&copy;
                            <script>document.write(new Date().getFullYear())</script> Kaizen Rent S.A.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>


<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
<script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="assets/js/plugins.js"></script>


<script src="assets/libs/particles.js/particles.js"></script>

<script src="assets/js/pages/particles.app.js"></script>

<script src="assets/js/pages/password-addon.init.js"></script>
</body>


</html>