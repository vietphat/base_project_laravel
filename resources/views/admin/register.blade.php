<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/ad/assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="/ad/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="/ad/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/ad/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/ad/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="/ad/assets/css/custom.min.css" rel="stylesheet" type="text/css" />


</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="index.html" class="d-inline-block auth-logo">
                                    <img src="/ad/assets/images/logo-light.png" alt="" height="20">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-10">
                        <div class="card mt-4">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Create New Account</h5>
                                </div>
                                <div class="p-2 mt-4">
                                    <form action="{{ route('admin.register') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <x-input name="email" label="Email" type="email" />
                                                <x-input name="password" label="Password" type="password" />
                                                <x-input name="confirm_password" label="Confirm Password"
                                                    type="password" />
                                                <x-input name="address" label="Address" type="address" />
                                            </div>
                                            <div class="col-lg-6">
                                                <x-input name="fullname" label="Fullname" />
                                                <x-input name="phone_number_1" label="Phonenumber 1" type="phone" />
                                                <x-input name="phone_number_2" label="Phonenumber 2" type="phone" />
                                            </div>
                                        </div>
                                </div>

                                <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                    <h5 class="fs-13">Password must contain:</h5>
                                    <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b>
                                    </p>
                                    <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter
                                        (a-z)</p>
                                    <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b>
                                        letter (A-Z)</p>
                                    <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)
                                    </p>
                                </div>

                                <div class="mt-4">
                                    <button class="btn btn-success w-100" type="submit">Sign Up</button>
                                </div>

                                <div class="mt-4 text-center">
                                    <div class="signin-other-title">
                                        <h5 class="fs-13 mb-4 title text-muted">Create account with</h5>
                                    </div>

                                    <div>
                                        <button type="button"
                                            class="btn btn-primary btn-icon waves-effect waves-light"><i
                                                class="ri-facebook-fill fs-16"></i></button>
                                        <button type="button"
                                            class="btn btn-danger btn-icon waves-effect waves-light"><i
                                                class="ri-google-fill fs-16"></i></button>
                                        <button type="button"
                                            class="btn btn-dark btn-icon waves-effect waves-light"><i
                                                class="ri-github-fill fs-16"></i></button>
                                        <button type="button"
                                            class="btn btn-info btn-icon waves-effect waves-light"><i
                                                class="ri-twitter-fill fs-16"></i></button>
                                    </div>
                                </div>
                                </form>

                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                    <div class="mt-4 text-center">
                        <p class="mb-0">Already have an account ? <a href="{{ route('admin.get_login_page') }}"
                                class="fw-semibold text-primary text-decoration-underline"> Signin </a> </p>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="/ad/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/ad/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/ad/assets/libs/node-waves/waves.min.js"></script>
    <script src="/ad/assets/libs/feather-icons/feather.min.js"></script>
    <script src="/ad/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="/ad/assets/js/plugins.js"></script>

    <!-- particles js -->
    <script src="/ad/assets/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="/ad/assets/js/pages/particles.app.js"></script>
    <!-- validation init -->
    <script src="/ad/assets/js/pages/form-validation.init.js"></script>
    <!-- password create init -->
    <script src="/ad/assets/js/pages/passowrd-create.init.js"></script>
</body>

</html>
