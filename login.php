<?php
$data = [
    [

        'name' => 'John Doe',
        'age' => 30,
        'city' => 'New York',
        'country' => 'USA',
        'hobbies' => ['reading', 'swimming', 'coding'],
    ]

];

if (isset($_SESSION['name']) && isset($_SESSION['email'])) {
    header("Location: dashboard.php");
    exit;
};

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS -->
    <link rel="stylesheet" href="bootstrap-5.3.3/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <!-- END CSS -->

</head>

<body>

    <!-- hero section -->
    <div class="container-fluid mt-5">
        <div class="row d-flex flex-column justify-content-center align-items-center">
            <div class="col-md-9">

                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <img src="./img/poto.jfif" alt="">
                    </div>
                    <div class="col text-center d-flex flex-column justify-content-center">
                        <h1>SELAMAT DATANG DI PPKD JAKARTA PUSAT</h1>
                        <p>Jl, Karet Pasar Baru Barat V No.23 - Karet Tengsin Jakarta Pusat</p>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        <img src="./img/poto.jfif" alt="">
                    </div>
                </div>
                <!-- END HEADING -->


                <nav class="navbar  navbar-expand-lg shadow-lg mt-5 align-items-center" data-bs-theme="dark"
                    style="background-color: #bee1fa;">
                    <!-- <a href="" class="navbar-brand ms-5 fs-1 text-dark">AWS</a> -->
                    <button class="navbar-toggler mx-5 my-2 bg-dark" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navAltMarkup" aria-controls="navAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                        </span>
                    </button>
                    <div class="collapse navbar-collapse ms-5" id="navAltMarkup">
                        <div class="navbar-nav">
                            <a href="./index.php" class="nav-link active fs-5 text-dark">Home</a>
                            <a href="./login.php" class="nav-link active fs-5 text-dark"><strong>Login</strong></a>
                            <a href="" class="nav-link active fs-5 text-dark">Departement</a>
                        </div>
                    </div>
                </nav>
                <!-- END NAVBAR -->


                <marquee behavior="" direction="" class="my-3">Angkatan 3 Sedang Membuat Project WEB</marquee>

                <section id="login">
                    <div class="login mb-5">
                        <div class="row mx-auto justify-content-center">
                            <div class="col-md-6">
                                <div class="card shadow">
                                    <div class="card-header d-flex justify-content-center bg-info">
                                        <h2>Login Page</h2>
                                    </div>

                                    <?php
                                    if (isset($_GET['error']) && $_GET['error'] == "login-gagal") {
                                    ?>
                                    <div class="alert alert-danger" role="alert">
                                        Email atau Password anda salah!
                                    </div>

                                    <?php
                                    };
                                    ?>

                                    <div class="card-body">
                                        <!-- START LOGIN FORM -->
                                        <form method="POST" action="controller/control-login.php">
                                            <div class="mb-3">
                                                <label class="form-label fw-semibold fs-5">Email address</label>
                                                <input name="email" type="email" class="form-control"
                                                    placeholder="Your Email">
                                                <div id="emailHelp" class="form-text">We'll never share your email with
                                                    anyone else.</div>
                                            </div>
                                            <div class="">
                                                <label class="form-label fw-semibold fs-5">Password</label>
                                                <input name="password" type="password" class="form-control"
                                                    placeholder="Your Password">
                                                <div class="forget d-flex justify-content-end align-items-center">
                                                    <a href="" class="text-decoration-none  fs-6 fst-italic text-muted"
                                                        type="button" class="mt-2 text-muted fs-sm fst-italic"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModalPass">Forget
                                                        password?</a>
                                                </div>
                                            </div>
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">Remember Me</label>
                                            </div>
                                            <div
                                                class="button d-flex flex-column justify-content-center align-items-center w-100">
                                                <button type="submit" name="login"
                                                    class="btn btn-info w-25">Submit</button> \
                                                <p type="button" class="mt-2 text-muted fs-sm fst-italic"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    Don't have any account? Register Here
                                                </p>
                                            </div>
                                        </form>
                                        <!-- END LOGIN FORM -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END LOGIN SECTION -->


                <footer class=" px-2 mb-3" style="background-color: #bee1fa;">
                    <div class="row">
                        <div class="col-6">
                            <p class="text-muted">Copyright @ 2024 Ebenhaiser J. Caprisiano</p>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <p class="text-muted">Privasi Policy</p>
                        </div>
                    </div>
                </footer>
                <!-- END FOOTER -->


            </div>
        </div>
    </div>

    <!-- ===============================================     MODAL    ================================================= -->
    <!-- START REGISTER MODAL -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Register Page</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label fw-semibold fs-5">Username</label>
                            <input type="text" class="form-control" placeholder="Your Username">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold fs-5">Email address</label>
                            <input type="email" class="form-control" placeholder="Your Email">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold fs-5">Create Password</label>
                            <input type="password" class="form-control" placeholder="Your Password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">I already have
                        account</button>
                    <button type="button" class="btn btn-primary">Register</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END REGISTER MODAL -->

    <!-- START RESET PASSWORD MODAL-->
    <div class="modal fade" id="exampleModalPass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Reset Password Page</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label fw-semibold fs-5">Reset Password</label>
                            <input type="password" class="form-control" placeholder="New Password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success">Reset</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END RESET PASSWORD MODAL -->
    <!-- =============================================     END MODAL     ================================================ -->


    <!-- JAVA SCRIPT -->
    <script src="bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- END JAVA SCRIPT -->

</body>

</html>