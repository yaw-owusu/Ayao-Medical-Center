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
          <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle" href="#">
              <i class="bi bi-search"></i>
            </a>
          </li>
          <!-- End Search Icon-->

          <li class="nav-item dropdown pe-3">
            <a
              class="nav-link nav-profile d-flex align-items-center pe-0"
              href="#"
              data-bs-toggle="dropdown"
            >
              <span class="d-none d-md-block dropdown-toggle ps-2"
                >Welcome! Dr. Yaw </span
              > </a
            ><!-- End Profile Iamge Icon -->

            <ul
              class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile"
            >
              <li class="dropdown-header">
                <h6>Dr. Yaw <i class="bi bi-patch-check-fill"></i></h6>
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
          <a class="nav-link collapsed" href="Dashboard.php">
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
            <i class="bi bi-person-check"></i><span>Administrators</span
            ><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul
            id="forms-nav"
            class="nav-content collapse"
            data-bs-parent="#sidebar-nav"
          >
            <li>
              <a href="manage-Administrators.php">
                <i class="bi bi-circle"></i><span>Manage Administrators</span>
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
        <h1>Profile</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Users</li>
            <li class="breadcrumb-item active">Profile</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class="section profile">
        <div class="row">
          <div class="col-xl-4">
            <div class="card">
              <div
                class="card-body profile-card pt-4 d-flex flex-column align-items-center"
              >
                <h2>Hello! Yaw <i class="bi bi-patch-check-fill"></i></h2>
                <h3>Administrator</h3>
                <div class="social-links mt-2">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="facebook"
                    ><i class="bi bi-facebook"></i
                  ></a>
                  <a href="#" class="instagram"
                    ><i class="bi bi-instagram"></i
                  ></a>
                  <a href="#" class="linkedin"
                    ><i class="bi bi-linkedin"></i
                  ></a>
                  <a href="#" class="whats app"
                    ><i class="bi bi-whatsapp"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-8">
            <div class="card">
              <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">
                  <li class="nav-item">
                    <button
                      class="nav-link active"
                      data-bs-toggle="tab"
                      data-bs-target="#profile-overview"
                    >
                      Overview
                    </button>
                  </li>

                  <li class="nav-item">
                    <button
                      class="nav-link"
                      data-bs-toggle="tab"
                      data-bs-target="#profile-edit"
                    >
                      Edit Profile
                    </button>
                  </li>

                  <li class="nav-item">
                    <button
                      class="nav-link"
                      data-bs-toggle="tab"
                      data-bs-target="#profile-settings"
                    >
                      Settings
                    </button>
                  </li>

                  <li class="nav-item">
                    <button
                      class="nav-link"
                      data-bs-toggle="tab"
                      data-bs-target="#profile-change-password"
                    >
                      Change Password
                    </button>
                  </li>
                </ul>
                <div class="tab-content pt-2">
                  <div
                    class="tab-pane fade show active profile-overview"
                    id="profile-overview"
                  >
                    <h5 class="card-title">About</h5>
                    <p class="small fst-italic">
                      Sunt est soluta temporibus accusantium neque nam maiores
                      cumque temporibus. Tempora libero non est unde veniam est
                      qui dolor. Ut sunt iure rerum quae quisquam autem eveniet
                      perspiciatis odit. Fuga sequi sed ea saepe at unde.
                    </p>

                    <h5 class="card-title">Profile Details</h5>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Full Name</div>
                      <div class="col-lg-9 col-md-8">Ofosu-Manu Yaw Owusu</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Company</div>
                      <div class="col-lg-9 col-md-8">Ayao Medical Center</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Job</div>
                      <div class="col-lg-9 col-md-8">Doctor</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Country</div>
                      <div class="col-lg-9 col-md-8">Ghana</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Address</div>
                      <div class="col-lg-9 col-md-8">
                        A108 Adam Street, Accra, ACC 535022
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Phone</div>
                      <div class="col-lg-9 col-md-8">0245931671</div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Email</div>
                      <div class="col-lg-9 col-md-8">
                        yawowusuofosumanu@gmail.com
                      </div>
                    </div>
                  </div>

                  <div
                    class="tab-pane fade profile-edit pt-3"
                    id="profile-edit"
                  >
                    <!-- Profile Edit Form -->
                    <form>
                      <div class="row mb-3">
                        <label
                          for="profileImage"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Profile Image</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <div class="pt-2">
                            <a
                              href="#"
                              class="btn btn-primary btn-sm"
                              title="Upload new profile image"
                              ><i class="bi bi-upload"></i
                            ></a>
                            <a
                              href="#"
                              class="btn btn-danger btn-sm"
                              title="Remove my profile image"
                              ><i class="bi bi-trash"></i
                            ></a>
                          </div>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="fullName"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Full Name</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="fullName"
                            type="text"
                            class="form-control"
                            id="fullName"
                            value="Ofosu-Manu Yaw Owusu"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="about"
                          class="col-md-4 col-lg-3 col-form-label"
                          >About</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <textarea
                            name="about"
                            class="form-control"
                            id="about"
                            style="height: 100px"
                          >
                          Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea
                          >
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="company"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Company</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="company"
                            type="text"
                            class="form-control"
                            id="company"
                            value="Ayao Medical Center"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="Job"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Job</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="job"
                            type="text"
                            class="form-control"
                            id="Job"
                            value="Doctor"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="Country"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Country</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="country"
                            type="text"
                            class="form-control"
                            id="Country"
                            value="Ghana"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="Address"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Address</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="address"
                            type="text"
                            class="form-control"
                            id="Address"
                            value="A108 Adam Street, Accra, ACC 535022"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="Phone"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Phone</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="phone"
                            type="text"
                            class="form-control"
                            id="Phone"
                            value="0245931671"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="Email"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Email</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="email"
                            type="email"
                            class="form-control"
                            id="Email"
                            value="yawowusuofosumanu@gmail.com"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="Twitter"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Twitter Profile</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="twitter"
                            type="text"
                            class="form-control"
                            id="Twitter"
                            value="https://twitter.com/#"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="Facebook"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Facebook Profile</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="facebook"
                            type="text"
                            class="form-control"
                            id="Facebook"
                            value="https://facebook.com/#"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="Instagram"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Instagram Profile</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="instagram"
                            type="text"
                            class="form-control"
                            id="Instagram"
                            value="https://instagram.com/#"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="Linkedin"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Linkedin Profile</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="linkedin"
                            type="text"
                            class="form-control"
                            id="Linkedin"
                            value="https://linkedin.com/#"
                          />
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                          Save Changes
                        </button>
                      </div>
                    </form>
                    <!-- End Profile Edit Form -->
                  </div>

                  <div class="tab-pane fade pt-3" id="profile-settings">
                    <!-- Settings Form -->
                    <form>
                      <div class="row mb-3">
                        <label
                          for="fullName"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Email Notifications</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <div class="form-check">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              id="changesMade"
                              checked
                            />
                            <label class="form-check-label" for="changesMade">
                              Changes made to your account
                            </label>
                          </div>
                          <div class="form-check">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              id="newProducts"
                              checked
                            />
                            <label class="form-check-label" for="newProducts">
                              Information on new products and services
                            </label>
                          </div>
                          <div class="form-check">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              id="proOffers"
                            />
                            <label class="form-check-label" for="proOffers">
                              Marketing and promo offers
                            </label>
                          </div>
                          <div class="form-check">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              id="securityNotify"
                              checked
                            />
                            <label
                              class="form-check-label"
                              for="securityNotify"
                            >
                              Security alerts
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                          Save Changes
                        </button>
                      </div>
                    </form>
                    <!-- End settings Form -->
                  </div>

                  <div class="tab-pane fade pt-3" id="profile-change-password">
                    <!-- Change Password Form -->
                    <form>
                      <div class="row mb-3">
                        <label
                          for="currentPassword"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Current Password</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="password"
                            type="password"
                            class="form-control"
                            id="currentPassword"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="newPassword"
                          class="col-md-4 col-lg-3 col-form-label"
                          >New Password</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="newpassword"
                            type="password"
                            class="form-control"
                            id="newPassword"
                          />
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label
                          for="renewPassword"
                          class="col-md-4 col-lg-3 col-form-label"
                          >Re-enter New Password</label
                        >
                        <div class="col-md-8 col-lg-9">
                          <input
                            name="renewpassword"
                            type="password"
                            class="form-control"
                            id="renewPassword"
                          />
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                          Change Password
                        </button>
                      </div>
                    </form>
                    <!-- End Change Password Form -->
                  </div>
                </div>
                <!-- End Bordered Tabs -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="copyright">
        &copy; Copyright <strong><span>Hospify App</span></strong
        >. All Rights Reserved
      </div>
      <div class="credits">Designed by <a href="#">Group 33</a></div>
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

    <!--  Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
