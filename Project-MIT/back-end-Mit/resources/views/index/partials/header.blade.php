<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xxl-center me-3 me-xxl-0 d-xxl-none">
        <a class="nav-item nav-link px-0 me-xxl-4 " href="javascript:void(0);">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>
    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none ps-1 ps-sm-2" placeholder="Search..."
                    aria-label="Search..." />
            </div>
        </div>
        <!-- /Search -->
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar ">
                        <img src="{{ asset('image/mit_logo.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                </a>
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>
