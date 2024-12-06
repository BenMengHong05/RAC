<section class="container-fluid content-education">
    <h2>Alumni</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 " style="margin-top: 25vh;font-family: sans-serif">
                <ul class="d-flex  ps-3  gap-2">
                    <li><a href="" class="text-black">Home</a></li>
                    <li style="color: red">/</li>
                    <li>Alumni</li>
                </ul>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row ">
                <h2>
                    {{$objAlumnis->title}}
                </h2>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row mt-2">
                <div class="col-lg-6 education-text">
                    <h5>
                        {{$objAlumnis->description}}
                    </h5>
                </div>
                <div class="col-lg-6 education-img" style="min-height: 40vh">
                    <div class="ed-img">
                        <img src="{{ asset('images/'. $objAlumnis->image) }}" alt="Education Image" class="img-fluid" style="width: 70vh; height: 50vh;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5" style="border-top: 1px solid rgb(82, 78, 78)">
        <h2 class="mt-4">Get Involved</h2>
        <div class="row">
            <div class="col-lg-6  ">
                <h5>
                    Join a club. Start a group. Make an annual gift. Attend an event. MIT draws great strength from its graduates’ ongoing engagement — with each other and with the Institute. Our alumni can always find community at MIT, no matter where in the world they are.
                </h5>
                <div class="campuslife-menu mt-4">
                    <ul class="education-ul">
                        <h4>Top Resources</h4>
                        <li><span>01.</span><a href=""> MIT Alumni Association</a></li>
                        <li><span>02.</span><a href=""> Alumni Directory</a></li>
                        <li><span>03.</span><a href=""> Alumni Career Resources</a></li>
                        <li><span>04.</span><a href=""> Lifelong Learning</a></li>
                        <li><span>05.</span><a href=""> Give to MIT</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6  ">
                <div class="img3  d-flex flex-column align-items-center justify-content-end">
                    <img src="{{ url('images/Alumni1.jpeg') }}" alt="" width="70%" class="" >
                    <p class="mt-3">MIT alumni and friends participating in a community service project</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5" style="border-top: 1px solid rgb(82, 78, 78)">
        <h2 class="mt-4">MIT Alumni News</h2>
        <div class="row mt-2">
            <div class="col-lg-6" style="min-width: 50%">
                <h5>
                    In their communities and their professions, locally and around the globe, MIT’s alumni are vital to our vision of making a better world. Through MIT News, the Alumni Association’s Slice of MIT blog, Resource Development’s Spectrum, and MIT News in Technology Review, you can keep up with our graduates’ remarkable impact around the globe.
                </h5>
                <div class="campuslife-menu mt-4">
                    <ul class="education-ul">
                        <h4>Top Resources</h4>
                        <li><span>01.</span><a href=""> Slice of MIT Blog</a></li>
                        <li><span>02.</span><a href=""> MIT News Office</a></li>
                        <li><span>03.</span><a href=""> MIT News in Technology Review</a></li>
                        <li><span>04.</span><a href=""> Spectrum</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6" style="min-width: 50%">
                <div class="campuslife d-flex  justify-content-center gap-5 ">
                    <div class="col-lg-3 " style="width: 29vh;">
                        <img src="{{ url('images/Alumni2.jpeg') }}" class="figure-img img-fluid "  alt="" style="width: 29vh;height: 40%;">
                        <p class="mt-3"><span>a.</span>lum-to-student mentoring in action</p>
                        <p><span>a.</span>Presenting at the annual Alumni Leadership Conference (ALC)</p>
                    </div>
                    <div class="col-lg-3 " style="width: 20vh" >
                        <img src="{{ url('images/Alumni3.jpeg')}} " class="figure-img img-fluid "  alt="" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid m-0 p-0 p-2 py-2 " style="background-color: #800000">
    <div class="container  mt-5  position-relative d-flex flex-column align-items-center justify-content-center ">
        <div class="row ">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6">
                        <figure>
                            <img src="{{url('images/Alumni4.jpeg')}}" alt="" class="img-fluid img"  style="width: 100%;height: 25vh;object-fit:cover">
                        </figure>
                    </div>
                    <div class="col-lg-6">
                        <figure>
                            <img src="{{url('images/Alumni5.jpeg')}}" alt="" class="img-fluid img"  style="width: 100%;height: 25vh;object-fit:cover">
                        </figure>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-6">
                        <figure>
                            <img src="{{url('images/Alumni7.jpeg')}}" alt="" class="img-fluid img"  style="width: 100%;height: 25vh;object-fit:cover">
                        </figure>
                    </div>
                    <div class="col-lg-6">
                        <figure>
                            <img src="{{url('images/Alumni8.jpeg')}}" alt="" class="img-fluid img"  style="width: 100%;height: 25vh;object-fit:cover">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ">
                <figure>
                    <img src="{{url('images/Alumni6.jpeg')}}" alt="" class="img-fluid img"  style="width: 100%;height: 51.8vh;object-fit:cover">
                </figure>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-3">
                <figure>
                    <img src="{{url('images/Alumni9.jpeg')}}" alt="" class="img-fluid img"  style="width: 100%;height: 28.8vh;;object-fit:cover">
                </figure>

            </div>
            <div class="col-lg-3">
                <figure>
                    <img src="{{url('images/Alumni10.jpeg')}}" alt="" class="img-fluid img"  style="width: 100%;height: 28.8vh;;object-fit:cover">
                </figure>

            </div>
            <div class="col-lg-3">
                <figure>
                    <img src="{{url('images/Alumni11.jpeg')}}" alt="" class="img-fluid img"  style="width: 100%;height: 28.8vh;object-fit:cover">
                </figure>

            </div>
            <div class="col-lg-3">
                <figure>
                    <img src="{{url('images/Alumni12.jpeg')}}" alt="" class="img-fluid img"  style="width: 100%;height: 28.8vh;;object-fit:cover">
                </figure>

            </div>
        </div>
    </div>
</section>

