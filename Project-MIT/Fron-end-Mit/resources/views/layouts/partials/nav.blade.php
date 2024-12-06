<nav class=" d-flex align-items-center " style="width: 100%; height: 10vh;">
    <div class="container-fluid d-flex align-itme-center ">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2  d-flex justify-content-center">
            <a href="/" class="d-flex align-items-center justify-content-center">
                <h1 class="text-light">MIT</h1>
                {{-- <img class="MIT-img"  src="{{ url('images/Massachusetts_Institute_of_Technology-Logo.wine.png') }}" alt=""
                style="width:100%; height: 50%;"> --}}
            </a>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9 text-center  h-15 " id="navbarSupportedContent">
            <ul class="ul-hover d-flex gap-5 h-100 d-inline-block ">


             @php
                 $categorymenus = \App\Models\Categorie::all();
             @endphp
             @foreach ($categorymenus as $categorymenu)
                <li><a href="/category/{{$categorymenu->id}}/show" >{{$categorymenu->name}}</a></li>
             @endforeach
            </ul>
        </div>
        <div class="col-xl-1 gap-1 col-lg-1 col-md-1 col-sm-1 col-1 d-flex align-items-center justify-content-center ">
            <div class="menubar">
                <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                    aria-controls="offcanvasScrolling"><i class="fa-solid fa-bars fs-3"></i></button>
            </div>
            <a href="" class="search-icon"><i class="fa-solid fa-magnifying-glass fs-3 mx-4 text-white "></i></a>
            <div class="showw offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
                id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                <div class="offcanvas-header">
                    <button class="button-show mt-3 px-3" data-bs-dismiss="offcanvas" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                            fill="undefined">
                            <path
                                d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                        </svg>
                    </button>
                </div>
                <div class="offcanvas-body">
                    <ul class="off">
                        @foreach ($categorymenus as $categorymenu)
                        <li class="p-4 "><a href="/category/{{$categorymenu->id}}/show" >{{$categorymenu->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
