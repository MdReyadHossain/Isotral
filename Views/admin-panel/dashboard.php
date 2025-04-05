<?php include("../components/admin/header.php"); ?>

<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <?php include("../components/admin/navbar.php"); ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4 ">
        <div class="row">
            <div class="col-md-12">
                <div class="d-md-flex align-items-center mb-3 mx-2">
                    <div class="mb-md-0 mb-3">
                        <h3 class="font-weight-bold mb-0">Hello, <?php echo $_SESSION["name"] ?></h3>
                        <p class="mb-0">Welcome to Isotral!</p>
                    </div>
                    <div class="ms-auto">ID: <?php echo memberID($_SESSION) ?></div>
                </div>
            </div>
        </div>
        <hr class="my-0">
        <div class="py-2">
            <div class='row px-2 mb-5 justify-content-between'>
                <div class="col-lg-4 col-md-4 col-12 card w-md-30 mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Board Members</p>
                                    <h5 class="font-weight-bolder">
                                        <?php echo $allBoardMembers->num_rows ?>
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">Board Members of Isotral</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="fas fa-user-shield text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 card w-md-30 mb-2 ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Vault Amount</p>
                                    <h5 class="font-weight-bolder">
                                        <?php echo currencyFormat($totalVaultAmount['total_amount'] - $totalInvestments['total_amount']) ?>
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">Total Reserve Amount</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="fa-solid fa-sack-dollar text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 card w-md-30 mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Members</p>
                                    <h5 class="font-weight-bolder">
                                        <?php echo $allMembers->num_rows ?>
                                    </h5>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">Members of Isotral</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="fas fa-users text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="card mb-4 h-100">
                    <div class="card-header pb-0">
                        <form action="../../Controller/doctor/searchPatient" method="GET" onsubmit="searchPatient(this); return false;">
                            <div class="d-flex align-items-center">
                                <h6 class="m-1">All Members</h6>
                                <input type="text" class="form-control w-lg-25 ms-auto text-xxs font-weight-bolder" id="search" name="search" placeholder="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="input-group-text" id="basic-addon2" type="submit"><i class="fas fa-search p-1"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2" style="height: 50vh; overflow-y: scroll;">
                        <div class="table-responsive p-0" id="patient">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone Number</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                                        <th class="text-start text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($allMembers->num_rows > 0) {
                                        while ($data = $allMembers->fetch_assoc()) { ?>
                                            <tr>
                                                <td class='align-middle text-center text-sm'>
                                                    <span class='text-xs text-secondary mb-0'><?php echo memberID($data); ?></span>
                                                </td>
                                                <td>
                                                    <div class='d-flex px-2 py-1 align-items-center'>
                                                        <div>
                                                            <img src='<?php echo $data['image_url']; ?>' alt='Profile Image' class='avatar avatar-sm me-3'>
                                                        </div>
                                                        <div class='d-flex flex-column justify-content-center'>
                                                            <h6 class='mb-0 text-sm'><?php echo $data['name']; ?></h6>
                                                            <a href='mailto:<?php echo $data['email']; ?>' class='text-xs text-secondary mb-0'><?php echo $data['email']; ?></a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class='align-middle text-center text-sm'>
                                                    <a href='tel:<?php echo $data['phone']; ?>' class='text-secondary text-xs font-weight-bold'><?php echo $data['phone']; ?></a>
                                                </td>
                                                <td class='align-middle text-center text-sm'>
                                                    <span class='text-xs text-secondary mb-0'><?php echo $data['title']; ?></span>
                                                </td>
                                                <td class='align-middle'>
                                                    <a href='patientView?patient_id=<?php echo $data['id']; ?>' class='btn btn-primary font-weight-bold text-xs' data-toggle='tooltip' data-original-title='Edit user'>
                                                        View
                                                    </a>
                                                </td>
                                            </tr>
                                    <?php }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <?php include("../components/admin/footer.php"); ?>
    </div>
</main>
<?php include("../components/admin/footerMeta.php"); ?>