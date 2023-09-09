<?php include("./includes/header.php") ?>
<?php include("./includes/navbar.php") ?>
<?php include("./includes/sidebar.php") ?>
<?php include("./model/administrators.php") ?>


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
                                    <form id="createAdminForm" action=".?action=createAdmin" method="post" class="row g-3 mt-3 needs-validation">
                                        <div class="col-md-8 offset-md-2">
                                            <div class="col-12">
                                                <label for="createAdminName" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="createAdminName" name="createAdminName" />
                                            </div>
                                            <div class="col-12">
                                                <label for="createAdminEmail" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="createAdminEmail" name="createAdminEmail" />
                                            </div>
                                            <div class="col-12">
                                                <label for="createAdminPhone" class="form-label">Phone Number</label>
                                                <input type="text" class="form-control" id="createAdminPhone" name="createAdminPhone" />
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
                                    <?php if (get_admins_count() < 1) : ?>
                                        <div class="p">No admin available.</div>
                                    <?php else : ?>
                                        <form id="updateAdminForm" action=".?action=updateAdmin" method="post" class="row g-3 mt-3 needs-validation">
                                            <div class="col-md-8 offset-md-2">
                                                <div class="col-12">
                                                    <select class="form-select my-2" name="updateAdminId" id="updateAdminId">
                                                        <option value="">Select Admin</option>
                                                        <?php foreach (get_all_admins() as $admin) :  ?>
                                                            <option value="<?php echo $admin["id"]; ?>">
                                                                <?php echo $admin["name"]; ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <label for="updateAdminName" class="form-label">Name</label>
                                                    <input type="text" class="form-control" id="updateAdminName" />
                                                </div>
                                                <div class="col-12">
                                                    <label for="updateAdminEmail" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="updateAdminEmail" />
                                                </div>
                                                <div class="col-12">
                                                    <label for="updateAdminPhone" class="form-label">Phone Number</label>
                                                    <input type="text" class="form-control" id="updateAdminPhone" />
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
                                    <?php if (get_admins_count() < 1) : ?>
                                        <div class="p">No admin available</div>
                                    <?php else : ?>
                                        <form id="deleteAdminForm" class="row g-3 mt-3 needs-validation" action=".?action=deleteAdmin" method="post">
                                            <div class="col-md-8 offset-md-2">
                                                <select class="form-select my-2" name="deleteAdminId" id="deleteAdminId">
                                                    <option value="">Select the admin to be delete</option>
                                                    <?php foreach (get_all_admins() as $admin) :  ?>
                                                        <option value="<?php echo $admin["id"]; ?>">
                                                            <?php echo $admin["name"]; ?>
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
                                                    <table id="viewAllAdminTable" class="table table-borderless datatable">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Email</th>
                                                                <th scope="col">PhoneNumber</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach (get_all_admins() as $admin) : ?>
                                                                <tr>

                                                                    <td>
                                                                        <?php echo $admin["name"];?>
                                                                    </td>
                                                                    <td><?php echo $admin["email"]; ?></td>

                                                                    <td><?php echo $admin["phonenumber"]; ?></td>

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