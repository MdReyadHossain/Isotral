<?php include("../components/admin/header.php"); ?>

<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <?php include("../components/admin/navbar.php"); ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4 px-4">
        <hr class="my-0">
        <?php
        if (isset($_COOKIE["addMoneyError"]))
            echo $_COOKIE["addMoneyError"];
        if (isset($_COOKIE["addMoneySuccess"]))
            echo $_COOKIE["addMoneySuccess"];
        ?>
        <div class="row my-4">
            <div class="col-md-7 mb-4">
                <div class="card card-profile">
                    <div class="card-body pt-0">
                        <div class="text-start m-4">
                            <div class="mt-4">
                                <p class="mb-0">How to add money to vault</p>
                            </div>
                            <hr>
                        </div>
                        <div class="m-4">
                            <div class="h6">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="text-white bg-primary icon-circle">
                                        1
                                    </div>
                                    <p class="mb-0">Send Money to <?php echo $isotral['vault_source'] ?> - Nagad</p>
                                    <img src="https://res.cloudinary.com/dmcppzpgl/image/upload/v1743779394/Nagad-Logo_laku3u.webp" alt="nagad icon" style="width: 25px; height: 25px;">
                                </div>
                            </div>
                            <div class="h6">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="text-white bg-primary icon-circle">
                                        2
                                    </div>
                                    <p class="mb-0">Take a note the transaction id</p>
                                </div>
                            </div>
                            <div class="h6">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="text-white bg-primary icon-circle">
                                        3
                                    </div>
                                    <p class="mb-0">Now fill up the form</p>
                                </div>
                            </div>
                            <div class="h6">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="text-white bg-primary icon-circle">
                                        4
                                    </div>
                                    <p class="mb-0">Provide source number and trans id with amount</p>
                                </div>
                            </div>

                            <div class="text-center">
                                <hr>
                                <p class="mb-0">Thank you so much</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <form action="../../Controllers/admin/addMoneyController" method="POST" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0"><b>Add Money to vault</b></p>
                                <button class="btn btn-primary btn-sm ms-auto" type="submit">Send <i class="fa-solid fa-paper-plane" style="font-size: 1em;"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Source *</label>
                                        <input class="form-control" type="text" placeholder="01711111111 / Brac Bank" name="source" value="<?php echo $_SESSION["phone"] ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Transaction ID *</label>
                                        <input class="form-control" type="text" placeholder="CCO6TMRMMO" name="trans_id" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Amount *</label>
                                        <input class="form-control" type="number" placeholder="100" name="amount" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-md-5 mb-4">
                <div class="card mb-4 h-100">
                    <div class="card-header pb-0">
                        <form action="../../Controllers/admin/searchInvestment" method="GET" onsubmit="searchInvestment(this); return false;">
                            <div class="d-flex align-items-center">
                                <h6 class="m-1">All Investments</h6>
                                <input type="text" title="Search by title" class="form-control w-lg-25 ms-auto text-xxs font-weight-bolder" id="search" name="search" placeholder="Search by title" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="input-group-text" id="basic-addon2" type="submit"><i class="fas fa-search p-1"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2" style="height: 50vh; overflow-y: scroll;">
                        <div class="table-responsive p-0" id="investment">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Amount</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Invested on</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($allInvestments->num_rows > 0) {
                                        while ($data = $allInvestments->fetch_assoc()) { ?>
                                            <tr>
                                                <td class='align-middle text-center text-sm'>
                                                    <span class='text-xs text-secondary mb-0'><?php echo $data['title']; ?></span>
                                                </td>
                                                <td class='align-middle text-center text-sm' data-toggle="tooltip" title="<?php echo $data['description']; ?>">
                                                    <span class='text-xs text-secondary mb-0'><?php echo textShortener($data['description']); ?></span>
                                                </td>
                                                <td class='align-middle text-center text-sm'>
                                                    <span class='text-xs text-secondary mb-0'>BDT <?php echo $data['amount']; ?> /-</span>
                                                </td>
                                                <td class='align-middle text-center text-sm'>
                                                    <span class='text-xs text-secondary mb-0'><?php echo dateTimeFormat($data['created_at']); ?></span>
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
            <div class="col-md-7 mb-4">
                <div class="card mb-4 h-100">
                    <div class="card-header pb-0">
                        <form action="../../Controllers/admin/searchTransaction" method="GET" onsubmit="searchTransaction(this); return false;">
                            <div class="d-flex align-items-center">
                                <h6 class="m-1">All Transactions</h6>
                                <input type="text" title="Search by source or transaction id" class="form-control w-lg-25 ms-auto text-xxs font-weight-bolder" id="search" name="search" placeholder="Search by source or trans id" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="input-group-text" id="basic-addon2" type="submit"><i class="fas fa-search p-1"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2" style="height: 50vh; overflow-y: scroll;">
                        <div class="table-responsive p-0" id="transaction">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Transaction ID</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Source</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Destination</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Amount</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Transaction Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($allTransactions->num_rows > 0) {
                                        while ($data = $allTransactions->fetch_assoc()) { ?>
                                            <tr>
                                                <td class='align-middle text-center text-sm'>
                                                    <span class='text-xs text-secondary mb-0'><?php echo $data['trans_id']; ?></span>
                                                </td>
                                                <td class='align-middle text-center text-sm'>
                                                    <span class='text-xs text-secondary mb-0'><?php echo $data['source']; ?></span>
                                                </td>
                                                <td class='align-middle text-center text-sm'>
                                                    <span class='text-xs text-secondary mb-0'><?php echo $data['vault_source']; ?></span>
                                                </td>
                                                <td class='align-middle text-center text-sm'>
                                                    <span class='text-xs text-secondary mb-0'>BDT <?php echo $data['amount']; ?> /-</span>
                                                </td>
                                                <td class='align-middle text-center'>
                                                    <?php if ($data['trans_status'] == true) { ?>
                                                        <span class="badge badge-success">Sent</span>
                                                    <?php } else { ?>
                                                        <span class="badge badge-warning">Pending</span>
                                                    <?php } ?>
                                                </td>
                                                <td class='align-middle text-center'>
                                                    <span class='text-xs text-secondary mb-0'><?php echo dateTimeFormat($data['trans_time']); ?></span>
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
        <?php include("../components/imageCropper.php"); ?>
        <!-- Footer -->
        <?php include("../components/admin/footer.php"); ?>
    </div>
</main>
<?php include("../components/admin/footerMeta.php"); ?>