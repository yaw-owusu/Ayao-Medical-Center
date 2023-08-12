<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Swift Car Rentals</title>
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

    <!-- CSS Files -->
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

    <!-- Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <img src="img/logo.png" alt="" />
          <span class="d-none d-lg-block">Swift Car Rentals</span>
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
                >Welcome! Nana</span
              > </a
            ><!-- End Profile Iamge Icon -->

            <ul
              class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile"
            >
              <li class="dropdown-header">
                <h6>Nana Yaw <i class="bi bi-patch-check-fill"></i></h6>
                <span>Administrator</span>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a
                  class="dropdown-item d-flex align-items-center"
                  href="users-profile.html"
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
                  href="pages-login.html"
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
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
      <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
          <a class="nav-link collapsed" href="index.html">
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
              <a href="manage-admin.html">
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
            <i class="bi bi-people"></i><span>Users</span
            ><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul
            id="tables-nav"
            class="nav-content collapse"
            data-bs-parent="#sidebar-nav"
          >
            <li>
              <a href="manage-users.html">
                <i class="bi bi-circle"></i><span>Manage Users</span>
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
              <a href="pages-managevehicles.html">
                <i class="bi bi-circle"></i><span>Manage Vehicles</span>
              </a>
            </li>
            <li>
              <a href="manage-brands.html">
                <i class="bi bi-circle"></i><span>Manage Brands</span>
              </a>
            </li>
            <li>
              <a href="manage-testimonials.html">
                <i class="bi bi-circle"></i><span>Manage Testimonials</span>
              </a>
            </li>
            <li>
              <a href="manage-bookings.html">
                <i class="bi bi-circle"></i><span>Manage Bookings</span>
              </a>
            </li>
            <li>
              <a href="manage-subscribers.html">
                <i class="bi bi-circle"></i><span>Manage Subscribers</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- End Charts Nav -->

        <!-- <li class="nav-heading">Pages</li> -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="pages-contact.html">
            <i class="bi bi-envelope"></i>
            <span>Contact Us</span>
          </a>
        </li>
        <!-- End Contact Page Nav -->
      </ul>
    </aside>

    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Manage Administrators</h1>
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
                    <button
                      class="nav-link active"
                      id="home-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#home"
                      type="button"
                      role="tab"
                      aria-controls="home"
                      aria-selected="true"
                    >
                      Add
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link"
                      id="profile-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#profile"
                      type="button"
                      role="tab"
                      aria-controls="profile"
                      aria-selected="false"
                    >
                      Edit
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link"
                      id="contact-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#contact"
                      type="button"
                      role="tab"
                      aria-controls="contact"
                      aria-selected="false"
                    >
                      Delete
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link"
                      id="view-all-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#view-all"
                      type="button"
                      role="tab"
                      aria-controls="view-all"
                      aria-selected="false"
                    >
                      View All
                    </button>
                  </li>
                </ul>
                <div class="tab-content pt-2" id="myTabContent">
                  <div
                    class="tab-pane fade show active"
                    id="home"
                    role="tabpanel"
                    aria-labelledby="home-tab"
                  >
                    <div class="container">
                      <form class="row g-3 mt-3">
                        <div class="col-md-8 offset-md-2">
                          <div class="col-12">
                            <label for="inputNanme4" class="form-label"
                              >Name</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="inputNanme4"
                            />
                          </div>
                          <div class="col-12">
                            <label for="inputEmail4" class="form-label"
                              >Email</label
                            >
                            <input
                              type="email"
                              class="form-control"
                              id="inputEmail4"
                            />
                          </div>
                          <div class="col-12">
                            <label for="inputNanme4" class="form-label"
                              >Phone Number</label
                            >
                            <input
                              type="password"
                              class="form-control"
                              id="inputNanme4"
                            />
                          </div>

                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                              Add
                            </button>
                            <button type="reset" class="btn btn-secondary">
                              Reset
                            </button>
                          </div>
                        </div>
                      </form>
                      <!-- Vertical Form -->
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="profile"
                    role="tabpanel"
                    aria-labelledby="profile-tab"
                  >
                    <div class="container">
                      <form class="row g-3 mt-3">
                        <div class="col-md-8 offset-md-2">
                          <div class="col-12">
                            <label for="inputNanme4" class="form-label"
                              >Name</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="inputNanme4"
                            />
                          </div>
                          <div class="col-12">
                            <label for="inputEmail4" class="form-label"
                              >Email</label
                            >
                            <input
                              type="email"
                              class="form-control"
                              id="inputEmail4"
                            />
                          </div>
                          <div class="col-12">
                            <label for="inputNanme4" class="form-label"
                              >Phone Number</label
                            >
                            <input
                              type="password"
                              class="form-control"
                              id="inputNanme4"
                            />
                          </div>

                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                              Update
                            </button>
                            <button type="reset" class="btn btn-secondary">
                              Reset
                            </button>
                          </div>
                        </div>
                      </form>
                      <!-- Vertical Form -->
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="contact"
                    role="tabpanel"
                    aria-labelledby="contact-tab"
                  >
                    <div class="container">
                      <form class="row g-3 mt-3" action="">
                        <div class="col-md-8 offset-md-2">
                          <label for="vehicleId"
                            >Select the Administrator to delete</label
                          >
                          <select
                            class="form-select my-2"
                            name="vehicleId"
                            id="vehicleId"
                          >
                            <option value="#id1">Nana Yaw</option>
                            <option value="#id2">Pendy</option>
                            <option value="#id3">M.K</option>
                          </select>
                        </div>

                        <div class="text-center">
                          <button type="submit" class="btn btn-danger">
                            Delete
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="view-all"
                    role="tabpanel"
                    aria-labelledby="view-all-tab"
                  >
                    <div class="container">
                      <div class="row">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">All Administrators</h5>
                              <table class="table table-borderless datatable">
                                <thead>
                                  <tr>
                                    <th scope="col">Admin ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Role</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row"><a href="#">#2457</a></th>
                                    <td>Nana Yaw</td>
                                    <td>
                                      <a href="#" class="text-primary"
                                        >admin@mail.com</a
                                      >
                                    </td>
                                    <td>0558157666</td>

                                    <td>
                                      <span class="badge bg-success"
                                        >Admin</span
                                      >
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><a href="#">#2458</a></th>
                                    <td>Pendy</td>
                                    <td>
                                      <a href="#" class="text-primary"
                                        >pendy@mail.com</a
                                      >
                                    </td>
                                    <td>0268157666</td>

                                    <td>
                                      <span class="badge bg-success"
                                        >Admin</span
                                      >
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><a href="#">#2459</a></th>
                                    <td>Maxi</td>
                                    <td>
                                      <a href="#" class="text-primary"
                                        >maxi@mail.com</a
                                      >
                                    </td>
                                    <td>0208157666</td>

                                    <td>
                                      <span class="badge bg-success"
                                        >Admin</span
                                      >
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
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
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="copyright">
        &copy; Copyright <strong><span>Swift Car Rentals</span></strong
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

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
