<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme ">
    <div class="app-brand demo ">
        <a href="index.html" class="app-brand-link d-flex align-items-center justify-content-center  w-100">
            <span class="app-brand-logo demo ">
                <img src="{{ asset('image/mit_logo.png') }}" class="img-fluid" alt="" style="height: 7vh">
            </span>
            {{-- <span class="app-brand-text demo menu-text fw-bold ms-2"></span> --}}
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner mt-4 py-1">
        <!-- Dashboards -->
        <li class="menu-item active open">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Account">Dashboards</div>
            </a>
        </li>
        <!-- Layouts -->
        <li class="menu-item">
            <a href="/content" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Content</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/newmits" class="menu-link">
                        <div data-i18n="newmits">NewMIT</div>
                    </a>
                </li>
            </ul>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/categories" class="menu-link menu-toggle">
                        <div data-i18n="Categories">Categories</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="/educations" class="menu-link">
                                <div data-i18n="Admin">Education</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/researchs" class="menu-link">
                                <div data-i18n="staff">Research</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/innovations" class="menu-link">
                                <div data-i18n="Admin">Innovation</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/admissions_aids" class="menu-link">
                                <div data-i18n="Admissions_Aid">Admissions_Aid</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/campuslifes" class="menu-link">
                                <div data-i18n="Campuslife">Campuslife</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/news" class="menu-link">
                                <div data-i18n="New">New</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class=' menu-icon tf-icons bx bx-user'></i>
                <div data-i18n="Account Settings">User</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/students" class="menu-link">
                        <div data-i18n="Admin">Student</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/staffs" class="menu-link">
                        <div data-i18n="staff">Staff</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/teachers" class="menu-link">
                        <div data-i18n="Admin">Teacher</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class=" menu-icon tf-icons fa-solid fa-globe"></i>
                <div data-i18n="Authentications">Language</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/Khmer" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Khmer</div>
                    </a>

                </li>
                <li class="menu-item">
                    <a href="/English" class="menu-link" target="_blank">
                        <div data-i18n="Basic">English</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bxs-package'></i>
                <div data-i18n="Misc">Pages</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="pages-misc-error.html" class="menu-link">
                        <div data-i18n="Error">Error</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="{{ route('logout') }}" class=" menu-link"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();" target="_blank">
                <i class=' menu-icon tf-icons bx bx-log-out'></i>
                <div data-i18n="Support">Log Out</div>
            </a>
            <!-- Hidden form to handle the POST request -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</aside>
