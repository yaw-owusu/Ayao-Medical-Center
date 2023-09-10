<?php include("./includes/header.php") ?>
<?php include("./includes/navbar.php") ?>
<?php include("./includes/sidebar.php") ?>


<main id="main" class="main">
    <div class="pagetitle">
        <h1>Manage Doctors</h1>
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
                                    Add
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                    Edit
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                    Delete
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="view-all-tab" data-bs-toggle="tab" data-bs-target="#view-all" type="button" role="tab" aria-controls="view-all" aria-selected="false">
                                    View All
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="container">
                                    <form id="createDoctorForm" action=".?action=createDoctor" method="post" class="row g-3 mt-3 needs-validation">
                                        <div class="col-md-8 offset-md-2">
                                            <div class="col-12">
                                                <label for="createDoctorName" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="createDoctorName" name="createDoctorName" />
                                            </div>
                                            <div class="col-12">
                                                <label for="createDoctorEmail" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="createDoctorEmail" name="createDoctorEmail" />
                                            </div>
                                            <div class="col-12">
                                                <label for="createDoctorPhone" class="form-label">Phone Number</label>
                                                <input type="text" class="form-control" id="createDoctorPhone" name="createDoctorPhone" />
                                            </div>
                                            <div class="col-12">
                                                <label for="createDoctorSpec" class="form-label">Speciality</label>
                                                <input type="text" class="form-control" id="createDoctorSpec" name="createDoctorSpec" />
                                            </div>

                                            <div class="text-center mt-3">
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
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="container">
                                    <?php if (get_doctors_count() < 1) : ?>
                                        <div class="p">No doctor available.</div>
                                    <?php else : ?>
                                        <form id="updateDoctorForm" action=".?action=updateDoctor" method="post" class="row g-3 mt-3 needs-validation">
                                            <div class="col-md-8 offset-md-2">
                                                <div class="col-12">
                                                    <select class="form-select my-2" name="updateDoctorId" id="updateDoctorId">
                                                        <option value="">Select Doctor</option>
                                                        <?php foreach (get_all_doctors() as $doctor) :  ?>
                                                            <option value="<?php echo $doctor["id"]; ?>">
                                                                <?php echo $doctor["name"]; ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <label for="updateDoctorName" class="form-label">Name</label>
                                                    <input type="text" class="form-control" id="updateDoctorName" />
                                                </div>
                                                <div class="col-12">
                                                    <label for="updateDoctorEmail" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="updateDoctorEmail" />
                                                </div>
                                                <div class="col-12">
                                                    <label for="updateDoctorPhone" class="form-label">Phone Number</label>
                                                    <input type="text" class="form-control" id="updateDoctorPhone" />
                                                </div>
                                                <div class="col-12">
                                                    <label for="updateDoctorSpec" class="form-label">Speciality</label>
                                                    <input type="text" class="form-control" id="updateDoctorSpec" />
                                                </div>

                                                <div class="text-center mt-3">
                                                    <button type="submit" class="btn btn-primary">
                                                        Update
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary">
                                                        Reset
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    <?php endif; ?>
                                    <!-- Vertical Form -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="container">
                                    <?php if (get_doctors_count() < 1) : ?>
                                        <div class="p">No doctor available</div>
                                    <?php else : ?>
                                        <form id="deleteDoctorForm" class="row g-3 mt-3 needs-validation" action=".?action=deleteDoctor" method="post">
                                            <div class="col-md-8 offset-md-2">
                                                <select class="form-select my-2" name="deleteDoctorId" id="deleteDoctorId">
                                                    <option value="">Select the doctor to be delete</option>
                                                    <?php foreach (get_all_doctors() as $doctor) :  ?>
                                                        <option value="<?php echo $doctor["id"]; ?>">
                                                            <?php echo $doctor["name"]; ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </div>
                                        </form>
                                    <?php endif; ?>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="view-all" role="tabpanel" aria-labelledby="view-all-tab">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">All Administrators</h5>
                                                    <table id="viewAllDoctorTable" class="table table-borderless datatable">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Email</th>
                                                                <th scope="col">Phone Number</th>
                                                                <th scope="col">Speciality</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach (get_all_doctors() as $doctor) : ?>
                                                                <tr>

                                                                    <td>
                                                                        <?php echo $doctor["name"]; ?>
                                                                    </td>
                                                                    <td><?php echo $doctor["email"]; ?></td>

                                                                    <td><?php echo $doctor["phone_numbers"]; ?></td>

                                                                    <td><?php echo $doctor["speciality"]; ?></td>

                                                                </tr>
                                                            <?php endforeach; ?>
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

<?php include("./includes/footer.php") ?>