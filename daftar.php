<?php
session_start();
// if (isset($_SESSION['verified_user_id'])) {
//     $_SESSION['status']= "logout berhasil";
//     header("location:login.php");
//     exit();
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="admin/public/assets/img/favicon.png" rel="icon">
  <link href="admin/public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="admin/public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="admin/public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="admin/public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="admin/public/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="admin/public/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="admin/public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="admin/public/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="admin/public/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="admin/public/assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">ILOCATION</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">
                

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Welcome Admin</h5>
                    <p class="text-center small">Enter your email & password to login</p>
                  </div>
                  <?php
                if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>mantap</strong> <?php echo $_SESSION['status']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                    unset($_SESSION['status']);
                }
                ?>
                  <form class="row g-3 needs-validation" action="proses_register.php" method="POST" novalidate>


                  <div class="col-12">
                      <label for="yourUsername" class="form-label">username</label>
                      <div class="input-group has-validation">
                        <input type="username" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>


                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <input type="email" name="email" class="form-control" id="youremail" required>
                        <div class="invalid-feedback">Please enter your email.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" name="register" type="submit">Register</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="pages-register.html">Create an account</a></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="admin/public/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="admin/public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="admin/public/assets/vendor/chart.js/chart.min.js"></script>
  <script src="admin/public/assets/vendor/echarts/echarts.min.js"></script>
  <script src="admin/public/assets/vendor/quill/quill.min.js"></script>
  <script src="admin/public/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="admin/public/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="admin/public/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="admin/public/assets/js/main.js"></script>

</body>

</html>