<nav class="position-fixed d-flex align-itmes-center justify-content-center w-100 " style="width: 100%;z-index: 999;">
    <div class="container-fluid m-0 p-0 ">
        <div class="row m-0 p-0 d-flex align-items-center justify-center bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-40% to-emerald-500 to-90%" style="min-height: 11vh">
            <div class="col-lg-4 col-4 m-0 p-0 d-flex align-itmes-center justify-content-center">
                <h1 class="font-serif font-bold d-flex align-items-center justify-content-center   text-3xl">MengHong</h1>
            </div>
            <div class="col-lg-7 col-7 m-0 p-0  d-flex align-items-center justify-end">
                <i class="fa-solid fa-bars font-serif font-bold d-flex align-items-center justify-content-end float-end px-3  cursor-pointer d-block d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"></i>
                <div class="n-v-bar  d-none d-lg-block">
                    <ul class="d-flex align-items-center justify-content-center  m-0 p-0 gap-5   font-serif  mx-1 ">
                        <li class="list"><a class="no-underline  text-black" href="#home">Home</a></li>
                        <li class="list"><a class="no-underline  text-black" href="#about-title">About</a></li>
                        <li class="list"><a class="no-underline  text-black" href="#skill-title">Skill</a></li>
                        <li class="list"><a class="no-underline  text-black" href="#project-title">Project</a></li>
                        <li class="list"><a class="no-underline  text-black" href="#contact-title">Contact</a></li>
                        <li class="list"><a href="#"><input type="button" value="Sign up" class=" btn btn-dark mx-1"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-1 col-1 m-0 p-0 ">
                <figure class=" d-flex align-items-center justify-content-center m-0 p-0 ">
                    <img src="{{asset('img/LogoWebsite.jpg')}}" class="img-fluid rounded-full m-0 p-0 cursor-pointer " alt="" style="height: 3rem">
                </figure>
            </div>
        </div>
    </div>
</nav>
@include('layout.partials.siderbar')
