<nav class="navbar navbar-main navbar-expand-lg px-4 shadow-none rounded" id="" navbar-scroll="true">
    <div class="container-fluid py-1 px-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-1 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Home</a></li>
                <li class="breadcrumb-item text-sm text-dark active" id="pathname" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="font-weight-bold mb-0">Admin Panel</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            </div>
            <ul class="navbar-nav justify-content-end">
                <div class="input-group">
                    <h6 class="font-weight-bolder text-black mb-0"><?php echo $_SESSION["name"] ?></h6>
                </div>
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item dropdown ps-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" title="<?php echo $_SESSION["name"]; ?>">
                        <img src="<?php echo $_SESSION["image_url"] ?>" class="avatar avatar-sm" alt="avatar" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                        <li class="">
                            <a class="dropdown-item border-radius-md" href="profile">
                                <div class="d-flex">
                                    <div class="my-auto">
                                        <i class="ni ni-single-02 text-success text-sm opacity-10 border-radius-sm me-3"></i>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal">
                                            <span class="text-dark font-weight-bold">Profile</span>
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="">
                            <a class="dropdown-item border-radius-md" href="profile#change-password">
                                <div class="d-flex">
                                    <div class="my-auto">
                                        <i class="fa-solid fa-key text-sm opacity-10 border-radius-sm me-3"></i>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal">
                                            <span class="text-dark font-weight-bold">Change Password</span>
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="">
                            <a class="dropdown-item border-radius-md" href="../logout">
                                <div class="d-flex">
                                    <div class="my-auto">
                                        <i class="fas fa-sign-out-alt text-danger text-sm opacity-10 border-radius-sm me-3"></i>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal">
                                            <span class="font-weight-bold">Log out</span>
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const pathname = window.location.pathname;
        const pathArray = pathname.split('/').filter(part => part);
        const adminPanelIndex = pathArray.indexOf('admin-panel');
        let displayPath = '';

        if (adminPanelIndex !== -1 && adminPanelIndex + 1 < pathArray.length) {
            displayPath = pathArray.slice(adminPanelIndex + 1)
                .map(part => part.replace(/([a-z])([A-Z])/g, '$1 $2'))
                .map(part => part.charAt(0).toUpperCase() + part.slice(1))
                .join(' / ');
        }

        document.getElementById('pathname').textContent = displayPath;
    });
</script>