<section class="container-fluid content-education">
    <h2>Education</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 " style="margin-top: 25vh;font-family: sans-serif">
                <ul class="d-flex gap-2">
                    <li><a href="" class="text-black">Home</a></li>
                    <li style="color: red">/</li>
                    <li>Research</li>
                </ul>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row ">
                <h1>
                   {{$researchs->title}}
                </h1>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row  mt-2">
                <div class="col-xl-6 education-text">
                    <h5>
                        {{$researchs->description}}
                    </h5>
                </div>
                <div class="col-xl-6 education-img" >
                    <div class="ed-img">
                        <img src="{{ asset('images/' . $researchs->image) }}" alt="Education Image" class="img-fluid" style="width: 70vh; height: 50vh;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5" style="border-top: 1px solid rgb(82, 78, 78);min-height: 50vh">
        <h1 class="mt-4 ">Centers, Labs & Programs</h1>
        <div class="row mt-2">
            <div class="col-lg-6  align-items-center mt-5 ">
                <h5>
                    MIT continually develops organizations and partnerships that foster <span class="ul-hover-4">interdisciplinary work</span>. Listed
                    here are just some of the MIT labs, centers, and programs where groundbreaking research is happening
                    every day.
                </h5>
                <div class="row mt-5 ms-0" style="width: 40vh">
                    <div class=" d-flex align-items-center justify-content-center">
                        <button style="width: 50vh;" class="p-3 education-shcool ">View Centers, Labs & Programs</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ed-img d-flex align-items-center justify-content-center mt-5">
                    <img src="{{ url('images/ResearchMIT-Brain-Drug-Delivery-03.jpg') }}" class="figure-img img-fluid"  alt="" style="width: 60vh;height: 40vh;">
                </div>
                <p>MIT researchers have devised a miniaturized system that can deliver tiny quantities of medicine to
                    brain regions as small as 1 cubic millimeter.</p>
            </div>
        </div>
    </div>
    <div class="container  mt-5" style="border-top: 1px solid rgb(82, 78, 78);min-height: 50vh">
        <h1 class="mt-4">Teaching & Learning</h1>
        <div class="row mt-2">
            <div class="col-lg-6 mt-5">
                <h5>
                    MIT researchers collaborate with many leading local, national, and international <span class="ul-hover-4">organizations</span> to
                    further drive exploration.
                </h5>
                <div class="row mt-5 ms-0" style="width: 40vh">
                    <div class="d-flex align-items-center justify-content-center">
                        <button style="width: 50vh;" class="p-3  education-shcool ">View Collaborating Institutions</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="ed-img d-flex align-items-center justify-content-center mt-5">
                    <img src="{{ url('images/Research1MIT-Sole-Vibes_0.jpg') }}" class="figure-img img-fluid"  alt=""  style="width: 60vh;height: 40vh;">
                </div>
                <p>Researchers from MIT and the Charles Stark Draper Laboratory are developing a new space boot with
                    built-in sensors and tiny “haptic” motors, whose vibrations can guide the wearer around or over
                    obstacles.</p>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid m-0 p-0 p-5 py-5  education-imgae mt-5  " style="background-color: #800000">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <figure>
                    <img src="{{url('images/research1.jpg')}}" class="img-fluid img" alt="" style="width: 100%;height: 30vh;object-fit:cover">
                </figure>
            </div>
            <div class="col-lg-3">
                <figure>
                    <img src="{{url('images/research2.jpg')}}" class="img-fluid img" alt="" style="width: 100%;height: 30vh;object-fit:cover">
                </figure>
            </div>
            <div class="col-lg-3">
                <figure>
                    <img src="{{url('images/research3.jpeg')}}" class="img-fluid img" alt="" style="width: 100%;height: 30vh;object-fit:cover">
                </figure>
            </div>
            <div class="col-lg-3">
                <figure>
                    <img src="{{url('images/research4..jpeg')}}" class="img-fluid img" alt="" style="width: 100%;height: 30vh;object-fit:cover">
                </figure>
            </div>
        </div>
        <div class="row py-2">
            <div class="col-lg-6">
                <figure>
                    <img src="{{url('images/research5.jpeg')}}" class="img-fluid img"  alt="" style="width: 100%;height: 61.6vh;object-fit:cover">
                </figure>
            </div>
            <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-6">
                    <figure>
                        <img src="{{url('images/research6.jpeg')}}" class="img-fluid img" alt="" style="width: 100%;height: 30vh;object-fit:cover">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <figure>
                        <img src="{{url('images/research7.jpeg')}}" class="img-fluid img" alt="" style="width: 100%;height: 30vh;object-fit:cover">
                    </figure>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 ">
                    <figure>
                        <img src="{{url('images/research8.jpeg')}}" class="img-fluid img"  alt="" style="width: 100%;height: 30vh;object-fit:cover">
                    </figure>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
