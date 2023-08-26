<?php

  include_once("./model/connection.php");
  include_once("./model/doctors.php");
  include_once("./model/laboratrists.php");
  include_once("./model/nurses.php");
  include_once("./model/patients.php");
  include_once("./model/pharmacists.php");
  include_once("./model/accountants.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Ayao Medical Center </title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon" />
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />

    <!--  Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
        <a href="Dashboard.php" class="logo d-flex align-items-center">
          <img src="img/logo.png" alt="" />
          <span class="d-none d-lg-block">Ayao Medical Center </span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div>
      <!-- End Logo -->

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <li class="nav-item dropdown pe-3">
            <a
              class="nav-link nav-profile d-flex align-items-center pe-0"
              href="#"
              data-bs-toggle="dropdown"
            >
              <!-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> -->
              <span class="d-none d-md-block dropdown-toggle ps-2"
                >Welcome! Dr. Yaw</span
              > </a
            ><!-- End Profile Iamge Icon -->

            <ul
              class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile"
            >
              <li class="dropdown-header">
                <h6> Dr. Yaw <i class="bi bi-patch-check-fill"></i></h6>
                <span>Administrator</span>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a
                  class="dropdown-item d-flex align-items-center"
                  href="users-profile.php"
                >
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a
                  class="dropdown-item d-flex align-items-center"
                  href="pages-login.php"
                >
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </a>
              </li>
            </ul>
            <!-- End Profile Dropdown Items -->
          </li>
          <!-- End Profile Nav -->
        </ul>
      </nav>
      <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
      <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
          <a class="nav-link" href="Dashboard.php">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            data-bs-target="#forms-nav"
            data-bs-toggle="collapse"
            href="#"
          >
            <i class="bi bi-person-check"></i><span>Administrator</span
            ><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul
            id="forms-nav"
            class="nav-content collapse"
            data-bs-parent="#sidebar-nav"
          >
            <li>
              <a href="manage_Admin.php">
                <i class="bi bi-circle"></i><span>Manage Administrator</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Forms Nav -->

        <li class="nav-item">
          <a
            class="nav-link collapsed"
            data-bs-target="#tables-nav"
            data-bs-toggle="collapse"
            href="#"
          >
            <i class="bi bi-people"></i><span>Doctors</span
            ><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul
            id="tables-nav"
            class="nav-content collapse"
            data-bs-parent="#sidebar-nav"
          >
            <li>
              <a href="manage_Doctors.php">
                <i class="bi bi-circle"></i><span>Manage Doctors</span>
              </a>
            </li>
          </ul>
        </li>
       <!-- End Tables Nav -->


       <li class="nav-item">
          <a
            class="nav-link collapsed"
            data-bs-target="#Patients-nav"
            data-bs-toggle="collapse"
            href="#"
          >
            <i class="bi bi-people"></i><span>Patients</span
            ><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul
            id="Patients-nav"
            class="nav-content collapse"
            data-bs-parent="#sidebar-nav"
          >
            <li>
              <a href="manage_Patients.php">
                <i class="bi bi-circle"></i><span>Manage Patients</span>
              </a>
            </li>
          </ul>
        </li>
       <!-- End Tables Nav -->



        <li class="nav-item">
          <a
            class="nav-link collapsed"
            data-bs-target="#Nurses-nav"
            data-bs-toggle="collapse"
            href="#"
          >
            <i class="bi bi-people"></i><span>Nurses</span
            ><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul
            id="Nurses-nav"
            class="nav-content collapse"
            data-bs-parent="#sidebar-nav"
          >
            <li>
              <a href="manage_Nurses.php">
                <i class="bi bi-circle"></i><span>Manage Nurses</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Tables Nav -->


        <li class="nav-item">
          <a
            class="nav-link collapsed"
            data-bs-target="#Pharmacists-nav"
            data-bs-toggle="collapse"
            href="#"
          >
            <i class="bi bi-people"></i><span>Pharmacists</span
            ><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul
            id="Pharmacists-nav"
            class="nav-content collapse"
            data-bs-parent="#sidebar-nav"
          >
            <li>
              <a href="manage_Pharmacists.php">
                <i class="bi bi-circle"></i><span>Manage Pharmacists</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Tables Nav -->


        <li class="nav-item">
          <a
            class="nav-link collapsed"
            data-bs-target="#Laboratrists-nav"
            data-bs-toggle="collapse"
            href="#"
          >
            <i class="bi bi-people"></i><span>Laboratrists</span
            ><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul
            id="Laboratrists-nav"
            class="nav-content collapse"
            data-bs-parent="#sidebar-nav"
          >
            <li>
              <a href="manage_Laboratrists.php">
                <i class="bi bi-circle"></i><span>Manage Laboratrists</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Tables Nav -->


        <li class="nav-item">
          <a
            class="nav-link collapsed"
            data-bs-target="#Accountants-nav"
            data-bs-toggle="collapse"
            href="#"
          >
            <i class="bi bi-people"></i><span>Accountants</span
            ><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul
            id="Accountants-nav"
            class="nav-content collapse"
            data-bs-parent="#sidebar-nav"
          >
            <li>
              <a href="manage_Accountants.php">
                <i class="bi bi-circle"></i><span>Manage Accountants</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Tables Nav -->


        <li class="nav-item">
          <a
            class="nav-link collapsed"
            data-bs-target="#charts-nav"
            data-bs-toggle="collapse"
            href="#"
          >
            <i class="bi bi-person-gear"></i><span>General Services</span
            ><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul
            id="charts-nav"
            class="nav-content collapse"
            data-bs-parent="#sidebar-nav"
          >
            <li>
              <a href="pages-managevehicles.php">
                <i class="bi bi-circle"></i><span>Manage Vehicles</span>
              </a>
            </li>
            <li>
              <a href="manage-brands.php">
                <i class="bi bi-circle"></i><span>Manage Brands</span>
              </a>
            </li>
            <li>
              <a href="manage-testimonials.php">
                <i class="bi bi-circle"></i><span>Manage Testimonials</span>
              </a>
            </li>
            <li>
              <a href="manage-bookings.php">
                <i class="bi bi-circle"></i><span>Manage Bookings</span>
              </a>
            </li>
            <li>
              <a href="manage-subscribers.php">
                <i class="bi bi-circle"></i><span>Manage Subscribers</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Charts Nav -->
        

        <!-- <li class="nav-heading">Pages</li> -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="pages-contact.php">
            <i class="bi bi-envelope"></i>
            <span>Contact Us</span>
          </a>
        </li>
        <!-- End Contact Page Nav -->
      </ul>
    </aside>
    <!-- End Sidebar-->

    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="Dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12">
            <div class="row">
              <!-- Cars Card -->
              <div class="col-xxl-4 col-md-4">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">Doctors</h5>

                    <div class="d-flex align-items-center">
                      <div
                        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                      >
                        <i class="bi  bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6><?php echo get_doctors_count(); ?></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Cars Card -->

              <!-- Brand Card -->
              <div class="col-xxl-4 col-md-4">
                <div class="card info-card revenue-card">
                  <div class="card-body">
                    <h5 class="card-title">Nurses</h5>

                    <div class="d-flex align-items-center">
                      <div
                        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                      >
                        <i class="bi  bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6><?php echo get_nurses_count(); ?></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Brand Card -->

              <!-- Customers Card -->
              <div class="col-xxl-4 col-md-4">
                <div class="card info-card customers-card">
                  <div class="card-body">
                    <h5 class="card-title">Pharmacists</h5>

                    <div class="d-flex align-items-center">
                      <div
                        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                      >
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6><?php echo get_pharmacists_count(); ?></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Customers Card -->

              <div class="col-xxl-4 col-md-4">
                <div class="card info-card customers-card">
                  <div class="card-body">
                    <h5 class="card-title">Laboratrists</h5>

                    <div class="d-flex align-items-center">
                      <div
                        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                      >
                        <i class="bi  bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6><?php echo get_laboratrists_count(); ?></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xxl-4 col-md-4">
                <div class="card info-card customers-card">
                  <div class="card-body">
                    <h5 class="card-title">Accountants</h5>

                    <div class="d-flex align-items-center">
                      <div
                        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                      >
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6><?php echo get_accountants_count(); ?></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xxl-4 col-md-4">
                <div class="card info-card customers-card">
                  <div class="card-body">
                    <h5 class="card-title">Patients</h5>

                    <div class="d-flex align-items-center">
                      <div
                        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                      >
                        <i class="bi  bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6><?php echo get_patients_count(); ?></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Recent Sales -->
              <div class="col-12">
                <div class="card recent-sales overflow-auto">
                  <div class="card-body">

                  </div>
                </div>
              </div>
              <!-- End Recent Sales -->
            </div>
          </div>
          <!-- End Left side columns -->
        </div>
      </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="copyright">
        &copy; Copyright <strong><span>Ayao Medical Center</span></strong
        >. All Rights Reserved
      </div>
      <div class="credits">Designed by <a href="#">Group 34</a></div>
    </footer>
    <!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!--  JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
