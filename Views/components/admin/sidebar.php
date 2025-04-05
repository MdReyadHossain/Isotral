<div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="../../">
        <table>
            <tr>
                <td>
                    <img src="../../asset/logo/Isotral-favicon.png" class="navbar-brand-img" alt="main_logo">
                </td>
                <td>
                    <span class="ms-1 font-weight-bold">Isotral</span><br>
                    <span class="ms-1">Envision the future</span>
                </td>
            </tr>
        </table>
    </a>
</div>
<div class="collapse navbar-collapse w-auto" style="color: white; height: 700px;" id="sidenav-collapse-main">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-white" href="dashboard" id="dashboard">
                <div class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                    <i class="fa-solid fa-display text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="accounting" id="accounting">
                <div class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                    <i class="fas fa-hand-holding-usd text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Accounting</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="messages" id="messages">
                <div class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                    <i class="fas fa-envelope text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Messages</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="manage" id="manage">
                <div class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                    <i class="fas fa-users text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Team Management</span>
            </a>
        </li>
        <li class="nav-item mt-2">
            <div class="d-flex align-items-center nav-link text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="ms-2" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
                </svg>
                <span class="font-weight-normal text-md ms-2">Account Pages</span>
            </div>
        </li>
        <li class="nav-item border-start my-0 pt-2">
            <a class="nav-link position-relative ms-0 ps-2 py-2 text-white" href="profile" id="profile">
                <span class="nav-link-text ms-1">Profile</span>
            </a>
        </li>
        <li class="nav-item border-start my-0 pt-2">
            <a class="nav-link position-relative ms-0 ps-2 py-2 text-white" href="../logout">
                <span class="nav-link-text ms-1">Log Out</span>
            </a>
        </li>
    </ul>
</div>

<script>
    let dashboard = document.getElementById("dashboard");
    let accounting = document.getElementById("accounting");
    let messages = document.getElementById("messages");
    let manage = document.getElementById("manage");
    let healthedu = document.getElementById("healthedu");
    let profile = document.getElementById("profile");

    var lastPart = function($url) {

        var url = $url;

        // Split URL into parts and store them as array 
        var parts = url.split("/");

        // Get value of last part
        var last_part = parts[parts.length - 1];

        // In case there is a '/' at the end
        if (last_part === '') last_part = parts[parts.length - 2];

        return last_part;
    }
    let route = lastPart(window.location.pathname);
    route == "dashboard" ?
        dashboard.classList += " active" :
        route == "accounting" ?
        accounting.classList += " active" :
        route == "messages" ?
        messages.classList += " active" :
        route == "manage" ?
        manage.classList += " active" :
        route == "healthedu" ?
        healthedu.classList += " active" :
        route == "profile" ?
        profile.classList += " active" : "";
</script>