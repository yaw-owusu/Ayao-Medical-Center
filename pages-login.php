<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Ayao Medical Center</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon" />
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

  <!--  CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />

  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
  <main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col">
              <div class="d-flex justify-content-center py-4">
                <a href="index.php" class="logo d-flex align-items-center w-auto">
                  <img src="img/logo.png" alt="" />
                  <span class="d-none d-lg-block">Ayao Medical Center</span>
                </a>
              </div>
              <!-- End Logo -->

              <main id="main" class="main">
                <div class="pagetitle">
                  <h1 class="text-center">Login</h1>
                </div>
                <!-- End Page Title -->

                <section class="section">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="my-4"></div>

                          <!-- Default Tabs -->
                          <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                Admin
                              </button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                Patient
                              </button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                Doctor
                              </button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="view-all-tab" data-bs-toggle="tab" data-bs-target="#view-all" type="button" role="tab" aria-controls="view-all" aria-selected="false">
                                Pharmacist
                              </button>
                            </li>
                          </ul>
                          <div class="tab-content pt-2" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                              <div class="container">
                                <form id="AdminLoginForm" action=".?action=login" method="post" class="row g-3 mt-3 needs-validation">
                                  <div class="col-md-8 offset-md-2">

                                    <div class="col-12">
                                      <label for="adminLoginEmail" class="form-label">Email</label>
                                      <input type="email" class="form-control" id="adminLoginEmail" name="adminLoginEmail" />
                                    </div>
                                    <div class="col-12">
                                      <label for="adminLoginPassword" class="form-label">Password</label>
                                      <input type="password" class="form-control" id="adminLoginPassword" name="adminLoginPassword" />
                                    </div>
                                    <input type="hidden" name="type" value="admin"/>
                                    <div class="text-center mt-3">
                                      <button type="submit" class="btn btn-primary">
                                        Login
                                      </button>

                                    </div>
                                  </div>
                                </form>
                                <!-- Vertical Form -->
                              </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                              <div class="container">
                                <form id="patientLoginForm" action=".?action=createAdmin" method="post" class="row g-3 mt-3 needs-validation">
                                  <div class="col-md-8 offset-md-2">

                                    <div class="col-12">
                                      <label for="patientLoginEmail" class="form-label">Email</label>
                                      <input type="email" class="form-control" id="patientLoginEmail" name="patientLoginEmail" />
                                    </div>
                                    <div class="col-12">
                                      <label for="patientLoginPassword" class="form-label">Password</label>
                                      <input type="password" class="form-control" id="patientLoginPassword" name="patientLoginPassword" />
                                    </div>

                                    <div class="text-center mt-3">
                                      <button type="submit" class="btn btn-primary">
                                        Login
                                      </button>

                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                              <div class="container">
                                <form id="doctorLoginForm" action=".?action=createAdmin" method="post" class="row g-3 mt-3 needs-validation">
                                  <div class="col-md-8 offset-md-2">

                                    <div class="col-12">
                                      <label for="doctorLoginEmail" class="form-label">Email</label>
                                      <input type="email" class="form-control" id="doctorLoginEmail" name="doctorLoginEmail" />
                                    </div>
                                    <div class="col-12">
                                      <label for="doctorLoginPassword" class="form-label">Password</label>
                                      <input type="password" class="form-control" id="doctorLoginPassword" name="doctorLoginPassword" />
                                    </div>

                                    <div class="text-center mt-3">
                                      <button type="submit" class="btn btn-primary">
                                        Login
                                      </button>

                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="view-all" role="tabpanel" aria-labelledby="view-all-tab">
                              <div class="container">
                                <form id="pharmacistLoginForm" action=".?action=createAdmin" method="post" class="row g-3 mt-3 needs-validation">
                                  <div class="col-md-8 offset-md-2">

                                    <div class="col-12">
                                      <label for="pharmaLoginEmail" class="form-label">Email</label>
                                      <input type="email" class="form-control" id="pharmaLoginEmail" name="pharmaLoginEmail" />
                                    </div>
                                    <div class="col-12">
                                      <label for="pharmaLoginPassword" class="form-label">Password</label>
                                      <input type="password" class="form-control" id="pharmaLoginPassword" name="pharmaLoginPassword" />
                                    </div>

                                    <div class="text-center mt-3">
                                      <button type="submit" class="btn btn-primary">
                                        Login
                                      </button>

                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                          <!-- End Default Tabs -->
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </main>

              <!-- <div class="card mb-3">
                  <div class="card-body">
                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4">
                        Login to Your Account
                      </h5>
                      <p class="text-center small">
                        Enter your email & password to login
                      </p>
                    </div>

                    <form class="row g-3 needs-validation" novalidate>
                      <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group has-validation">
                          <input
                            type="text"
                            name="email"
                            class="form-control"
                            id="email"
                            required
                          />
                          <div class="invalid-feedback">
                            Please enter your email.
                          </div>
                        </div>
                      </div>

                      <div class="col-12">
                        <label for="yourPassword" class="form-label"
                          >Password</label
                        >
                        <input
                          type="password"
                          name="password"
                          class="form-control"
                          id="yourPassword"
                          required
                        />
                        <div class="invalid-feedback">
                          Please enter your password!
                        </div>
                      </div>
                      <div class="col-12">
                        <p class="small mb-0">
                          Forgot Password ?
                          <a href="pages-emailconfirm.php">Click here</a>
                        </p>
                      </div>

                      <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">
                          Login
                        </button>
                      </div>
                      <br />
                      <div class="col-12">
                        <p class="small mb-0">
                          Don't have account?
                          <a href="pages-register.php">Register here</a>
                        </p>
                      </div>
                    </form>
                  </div>
                </div> -->

              <div class="credits">Designed by <a href="#">Group 34</a></div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
  <!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!--  Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>