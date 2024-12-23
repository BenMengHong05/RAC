
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" style="min-width: 18%">
    <div class="app-brand demo " style="min-height: 12%;width: 100%">
        <a href="index.html" class="app-brand-link d-flex align-items-center justify-content-center  w-100">
            <span class="app-brand-logo demo ">
                <img src="{{ asset('image/mit_logo.png') }}" class="img-fluid" alt="" style="height: 10vh">
            </span>
            <a href="javascript:void(0);"  class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none" >
                <i class="bx bx-chevron-left  bx-sm align-middle" ></i>
            </a>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner mt-4 py-1 " style="width: 100%">
        <!-- Dashboards -->
        <li class="menu-item active open w-100">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Account">{{__('messages.Dashboards')}}</div>
            </a>
        </li>
        <!-- Layouts -->
        <li class="menu-item w-100">
            <a href="/content" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">{{__('messages.Contents')}}</div>
            </a>
            <ul class="menu-sub ">
                <li class="menu-item">
                    <a href="" class="menu-link menu-toggle">
                        <i class='menu-icon tf-icons bx bx-category'></i>
                        <div data-i18n="newmit_categories">{{__('messages.Categories')}}</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="/categories" class="menu-link">
                                <div data-i18n="newmits">{{__('messages.Categories')}}</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/categorie_paths" class="menu-link">
                                <div data-i18n="Admin">{{__('messages.categories_path')}}</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/categorie_images" class="menu-link">
                                <div data-i18n="Admin">categories_images</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/post" class="menu-link menu-toggle">
                        <i class='menu-icon tf-icons bx bxs-envelope' ></i>
                        <div data-i18n="Categories">{{__('messages.Posts')}}</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="/newmits" class="menu-link">

                                <div data-i18n="newmits">{{__('messages.News')}}</div>
                            </a>
                        </li>
                        {{-- <li class="menu-item">
                            <a href="/educations" class="menu-link">
                                <div data-i18n="Admin">{{__('messages.Educations')}}</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/researchs" class="menu-link">
                                <div data-i18n="staff">{{__('messages.Researchs')}}</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/innovations" class="menu-link">

                                <div data-i18n="Admin">{{__('messages.Innovations')}}</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/admissions_aids" class="menu-link">
                                <div data-i18n="Admissions_Aid">{{__('messages.Admissions_aids')}}</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/campuslifes" class="menu-link">
                                <div data-i18n="Campuslife">{{__('messages.Campuslifes')}}</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/alumnis" class="menu-link">
                                <div data-i18n="New">{{__('messages.Alumins')}}</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="/aboutmits" class="menu-link">
                                <div data-i18n="New">{{__('messages.Aboutschool')}}</div>
                            </a>
                        </li> --}}
                    </ul>
                </li>
            </ul>

        </li>
        <li class="menu-item w-100">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class=' menu-icon tf-icons bx bx-user'></i>
                <div data-i18n="Account Settings">{{__('messages.Users')}}</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/users" class="menu-link">
                        <div data-i18n="Admin">{{__('messages.Users')}}</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/students" class="menu-link">
                        <div data-i18n="Admin">{{__('messages.Students')}}</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/staffs" class="menu-link">
                        <div data-i18n="staff">{{__('messages.Staffs')}}</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/teachers" class="menu-link">
                        <div data-i18n="Admin">{{__('messages.Teachers')}}</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item w-100">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class=" menu-icon tf-icons fa-solid fa-globe"></i>
                <div data-i18n="Authentications">{{__('messages.Languages')}}</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('lang.switch',['lang'=>'kh']) }}" class="menu-link">
                        {{__('messages.Khmer')}}
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('lang.switch', ['lang'=>'en']) }}" class="menu-link">
                        {{__('messages.English')}}
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('lang.switch', ['lang'=>'zh']) }}" class="menu-link">
                        {{__('messages.Chinese')}}
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item w-100">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bxs-package'></i>
                <div data-i18n="Misc">{{__('messages.Pages')}}</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/error" class="menu-link">
                        <div data-i18n="Error">{{__('messages.Error')}}</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item w-100 ">
            <a href="{{ route('logout') }}" class=" menu-link text-danger"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();" target="_blank">
                <i class=' menu-icon tf-icons bx bx-log-out'></i>
                <div data-i18n="Support" >{{__('messages.Logout')}}</div>
            </a>
            <!-- Hidden form to handle the POST request -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</aside>
