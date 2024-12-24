<style>
    .transform-search {
        display: none;
        transition: all 0.5 linear;
    }

    .transform-search1 {
        transition: width 0.4s linear;
    }
</style>
<header>

    <nav class="  d-flex align-items-center " style="width: 100%; height: 85px;">
        <div class="container-fluid m-0 p-0 d-flex align-itme-center ">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2  d-flex justify-content-center">
                <a href="/" class="d-flex align-items-center justify-content-center">
                    {{-- <h1 class="text-light">RAC</h1> --}}
                    <img class="MIT-img" src="{{ url('images/rac_logo.png') }}" alt=""
                        style="width:100%; height: 60px;">
                </a>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9  navItems  h-15 " id="navbarSupportedContent">
                <ul class="ul-hover d-flex gap-5 h-100 d-inline-block ">
                    @php
                        $categorymenus = \App\Models\Categorie::all();
                    @endphp
                    @foreach ($categorymenus as $categorymenu)
                        <li><a href="/category/{{ $categorymenu->id }}/show">{{ $categorymenu->name }}</a></li>
                    @endforeach
                </ul>
                <div class="showw  offcanvas offcanvas-start " data-bs-scroll="true" data-bs-backdrop="false"
                    tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel"
                    style="background-color: rgb(118, 0, 0)">
                    <div class="offcanvas-header">
                        <button class="button-show mt-3 px-3" data-bs-dismiss="offcanvas" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960"
                                width="30px" fill="#FFFFFF">
                                <path
                                    d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                            </svg>
                        </button>
                    </div>
                    <div class="offcanvas-body d-flex justify-content-start">
                        <div class="off">
                            <ul class="offcans-hover ">
                                @foreach ($categorymenus as $categorymenu)
                                    <li class="p-4 "><a href="/category/{{ $categorymenu->id }}/show"
                                            class="text-white">{{ $categorymenu->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-1 gap-4  m-0 p-0 gap-1 col-lg-1 col-md-1 col-sm-1 col-1 d-flex align-items-center justify-content-end "
                style="min-height:  85px;position: relative;">
                <div class="menubar">
                    <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                        aria-controls="offcanvasScrolling">
                        <div class="text-white" style="white-space: nowrap">More ↓</div>
                    </button>
                </div>
                <span href="" class="search-icon   m-0 p-0 d-flex align-items-center justify-content-center"
                    onclick="searchjs()" style="width: 90px;min-height:  85px;background-color: red;cursor: pointer;"><i
                        class="fa-solid fa-magnifying-glass fs-3 mx-4 text-white "></i></span>
            </div>
        </div>
    </nav>
</header>
<script src="{{ url('js/navbar.js') }}"></script>
<script>
    


    function searchjs() {
        const scroldown = document.getElementById("scrol-down")
        scroldown.classList.toggle("transform-search");
        const siderMenu = document.getElementById("sider-menu")
        const searchbox = document.getElementById("index-siderbar");
        const josthus = document.getElementById("josth-us");
        const siderfooter = document.getElementById("sider-footer");
        const sidersearch = document.getElementById("sider-search ");
        const siderbox = document.getElementById("sider-box");
        const results = document.getElementById("results");
        if (searchbox.style.width === "100%") {
            siderfooter.style.display = "block";
            searchbox.style.width = "auto";
            searchbox.style.transition = "all 0.4s linear"
            siderMenu.style.display = "block";
            josthus.style.display = "block";
            sidersearch.style.width = "auto";
            siderbox.style.display = "block";
            siderbox.style.alignItem = "start";
            siderbox.style.justifyContent = "start";
            siderbox.style.textAlign = "start";
            results.style.display = "none"
        } else {
            siderMenu.style.display = "none";
            josthus.style.display = "none";
            siderfooter.style.display = "none";
            searchbox.style.width = "100%";
            searchbox.style.transition = "all 0.4s linear";
            sidersearch.style.width = "50rem";
            siderbox.style.display = "flex";
            siderbox.style.alignItem = "center";
            siderbox.style.justifyContent = "center";
            siderbox.style.textAlign = "center";
            results.style.display = "block"
        }
    }
</script>
