<section class="container-fluid content-education">
    <h2>Education</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 " style="margin-top: 25vh;font-family: sans-serif">
                <ul class="d-flex gap-2">
                    <li><a href="" class="text-black">Home</a></li>
                    <li style="color: red">/</li>
                    <li>About MIT</li>
                </ul>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row ">
                <h1>
                    {{$objAboutMits->title}}
                </h1>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row mt-2 d-flex align-items0center justify-content-between">
                <div class="col-lg-6 education-text">
                    <h5>
                        {{$objAboutMits->description}}
                    </h5>
                    <div class="about-mit">
                        <h4>Mission and Values</h4>
                        <ul>
                            <li><span style="color: red">01.</span><a href=""
                                    style="border-bottom:1px solid red;color: black ">Mission Statement</a></li>
                            <li><span style="color: red">02.<a href=""
                                        style="border-bottom:1px solid red;color: black "><span>MIT Values</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 education-img" style="min-height: 40vh">
                    <div class="ed-img">
                        <img src="{{ asset('images/' . $objAboutMits->image) }}" alt="Education Image" class="img-fluid" style="width: 70vh; height: 50vh;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 " style="border-top: 1px solid rgb(82, 78, 78);width: 100%; height: 100%;">
        <h1 class="mt-4">Arts</h1>
        <div class="row mt-2">
            <div class="col-lg-6">
                <div class="campuslife-menu mt-4">
                    <h4>Key history</h4>
                    <ul class="education-ul">
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">Incorporated</a></span><span><a href="">1861</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">Motto</a></span><span><a href="">“Mens et manus” (“mind and hand”)</a></span></li>
                    </ul>
                </div>
                <div class="campuslife-menu mt-4">
                    <h4>Campus</h4>
                    <ul class="education-ul">
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">Location</a></span><span><a href="">Cambridge, MA USA</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">Size</a></span><span><a href="">168 acres (0.68 km2)</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">Student residences</a></span><span><a href="">19</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">Playing fields</a></span><span><a href="">26 acres (0.11 km2)</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">Gardens + green spaces</a></span><span><a href="">40+</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">Gardens + green spaces</a></span><span><a href="">60+</a></span></li>
                    </ul>
                </div>
                <div class="campuslife-menu mt-4">
                    <h4>Admissions (Class of 2027)</h4>
                    <ul class="education-ul">
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">Applicants</a></span><span><a href="">26,914</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">Admits</a></span><span><a href="">1,291</a></span></li>
                    </ul>
                </div>
                <div class="campuslife-menu mt-4">
                    <h4>Selected Honors</h4>
                    <ul class="education-ul">
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">Nobel lazxureates</a></span><span><a href="">Cambridge, MA USA</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">Size</a></span><span><a href="">168 acres (0.68 km2)</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">Student residences</a></span><span><a href="">19</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">Playing fields</a></span><span><a href="">26 acres (0.11 km2)</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">Gardens + green spaces</a></span><span><a href="">40+</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">Gardens + green spaces</a></span><span><a href="">60+</a></span></li>
                    </ul>
                </div>
                <div class="campuslife-menu mt-4">
                    <h4>More</h4>
                    <ul class="education-ul">
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">MIT Facts</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">A brief history of MIT</a></span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6  " >
                <div class="campuslife d-flex  justify-content-center gap-5 ">
                    <div class="col-lg-3 " style="width: 29vh;">
                        <img style="height: auto; object-fit:cover  " src="{{ url('images/aboutslide1-1.jpg') }}" class="figure-img img-fluid img-fluid-1 " alt="">
                        <p class="mt-3"><span class="text-danger">a.</span>A student presents his work in an architecture critique.</p>
                        <p><span class="text-danger">b.</span>A responsive environment developed at MIT reacts as a visiting artist plays
                            the cello.</p>
                    </div>
                    <div class="col-lg-3 " style="width: 20vh">
                        <img style="height: auto; object-fit:cover " src="{{ url('images/aboutslide2-1.jpg') }} " class="figure-img img-fluid img-fluid-1 "
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 " style="border-top: 1px solid rgb(82, 78, 78); width: 100%;height: 100%;" >
        <h1 class="mt-4">Community (as of 10/30/23)</h1>
        <div class="row mt-2">
            <div class="col-lg-6">
                <div class="campuslife-menu mt-4">
                    <ul class="education-ul">
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">Employees (including faculty)</a></span><span><a href="">17,180</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">Professors (all ranks)</a></span><span><a href="">1,089</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">Other teaching staff</a></span><span><a href="">1,020</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">Undergraduate student-to-faculty and</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">instructional staff ratio</a></span><span><a href="">3:1</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">Students</a></span><span><a href="">11,920</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">Undergraduates</a></span><span><a href="">4,576</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">Women</a></span><span><a href="">2,231 (49%)</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">US minority groups</a></span><span><a href="">2,650 (58%)</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">Graduate students</a></span><span><a href="">7,344</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">Women</a></span><span><a href="">2,969 (40%)</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span><a href="">US minority groups</a></span><span><a href="">1,617 (22%)</a></span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6  ">
                <div class="campuslife d-flex  justify-content-center gap-5 ">
                    <div class="col-lg-3 " style="width: 29vh;">
                        <img src="{{ url('images/aboutslide3-1.jpg') }}" class="figure-img img-fluid " alt=""
                        style="height: auto; object-fit:cover ">
                        <p class="mt-3"><span class="text-danger">a.</span>MIT’s low ratio of <span class="ul-hover-4">student</span>-to-<span class="ul-hover-4">faculty and instructional staff </span> promotes intensive teaching.
                        </p>
                        <p><span class="text-danger">b.</span>In 2023–24, MIT students came from all 50 states, the District of Columbia, four territories, and 136 foreign countries.</p>
                    </div>
                    <div class="col-lg-3 " style="width: 20vh">
                        <img style="height: auto; object-fit:cover " src="{{ url('images/aboutslide4-1.jpg') }} " class="figure-img img-fluid "
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 " style="border-top: 1px solid rgb(82, 78, 78); width: 100%;height: 100%;" >
        <h1 class="mt-4">Faculty</h1>
        <div class="row mt-2">
            <div class="col-lg-6">
                <h4>For MIT’s faculty — just over 1,000 in number — cutting-edge research and education are inseparable. Each feeds the other. When they’re not busy pioneering the frontiers of their fields, MIT faculty members play a vital role in shaping the Institute’s vibrant campus community — as advisors, coaches, heads of houses, mentors, committee members, and much more.</h4>
                <div class="campuslife-menu mt-4">
                    <h5>Top Resources</h5>
                    <ul class="education-ul">
                        <li class="d-flex align-items-center justify-content-start"><span class="text-danger">01.</span><a href="">Awards & Honors</a></li>
                        <li class="d-flex align-items-center justify-content-start"><span class="text-danger">02.</span>.<a href="">Faculty by School</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6  ">
                <div class="campuslife d-flex  justify-content-center gap-5 ">
                    <div class="col-lg-3 " style="width: 29vh;">
                        <img src="{{ url('images/aboutslide5-1.jpg') }}" class="figure-img img-fluid " alt=""
                            style="height: auto; object-fit:cover">
                        <p class="mt-3"><span class="text-danger">a.</span>MIT Health offers numerous classes through Community Wellness.
                        </p>
                        <p><span class="text-danger">b.</span>Students relieve stress by cuddling with canines from the Puppy Lab.</p>
                    </div>
                    <div class="col-lg-3 " style="width: 20vh">
                        <img style="height: auto ; object-fit:cover" src="{{ url('images/aboutslide6-1.jpg') }} " class="figure-img img-fluid "
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 " style="border-top: 1px solid rgb(82, 78, 78); width: 100%;height: 100%;" >
        <h1 class="mt-4">Leadership</h1>
        <div class="row mt-2">
            <div class="col-lg-6">
                <h4>
                    <div>
                        <h3>
                            President <br>
                            Sally Kornbluth
                        </h3>
                        <p> MIT’s 18th president, January 2023 – present</p>
                    </div>
                    <div>
                        <p>The Institute’s board of trustees, known as “the Corporation,” includes 69 distinguished leaders in engineering, science, industry, education, and other professions.</p>
                    </div>
                </h4>
                <div class="campuslife-menu mt-4">
                    <h5>Top Resources</h5>
                    <ul class="education-ul">
                        <li class="d-flex align-items-center justify-content-between"><span>01.<a href="">Office of the President</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span>02.<a href="">Senior Leadership</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span>03.<a href="">MIT Corporation</a></span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6  ">
                <div class="campuslife d-flex  justify-content-center gap-5 ">
                    <div class="col-lg-6 "  style="width: 45vh;">
                        <img style="height: auto; object-fit:cover" src="{{ url('images/aboutslide7-1.jpg') }}" class="figure-img img-fluid " alt="">
                        <p>President Sally Kornbluth</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=" education-imgae  d-flex flex-column align-items-center justify-content-center " style="width: 100%; min-height: 50vh">
    <div class="container mt-5 " style="border-top: 1px solid rgb(82, 78, 78); width: 100%;min-height: 60vh" >
        <h1 class="mt-4">Cambridge & Boston</h1>
        <div class="row mt-2">
            <div class="col-lg-6">
                <h4>MIT is an integral part of its host city of Cambridge, a diverse and vibrant community noted for its intellectual life, history, and thriving innovation climate. With a campus nestled between Central and Kendall Squares, and across the Charles River from Boston’s Back Bay, the Institute is optimally positioned to collaborate with its neighbors and to contribute to its community.</h4>
                <div class="campuslife-menu mt-4">
                    <h5>Top Resources</h5>
                    <ul class="education-ul">
                        <li class="d-flex align-items-center justify-content-between"><span>01.<a href="">Visit MIT</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span>02.<a href="">Kendall Square</a></span></li>
                        <li class="d-flex align-items-center justify-content-between"><span>03.<a href="">Visiting Boston</a></span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6  ">
                <div class="campuslife d-flex  justify-content-center gap-5 ">
                    <div class="col-lg-6 " style="width: 45vh;">
                        <img style="height: auto;object-fit:cover"  src="{{ url('images/aboutslide8-1.jpg') }}" class="figure-img img-fluid " alt="">
                        <p>Aerial view of the campus, with a glimpse of the Boston skyline</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid m-0 p-0 p-5 py-5 education-imgae  d-flex flex-column align-items-center justify-content-center  " style="background-color: #800000"  style="width: 100%;height: 60vh">
    <div class="container">
        <div class="row ">
            <div class="col-md-6 col-lg-6" style="height: 100%">
                <figure>
                    <img src="{{url('images/slider-footer-about-mit1.jpeg')}}" class="img-fluid img" alt="" style="width: 100%;height: 51.5vh; object-fit:cover">
                </figure>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-lg-6">
                        <figure>
                            <img src="{{url('images/slider-footer-about-mit2.jpeg')}}"  class="img-fluid img" style="width: 100%;height: 25vh; object-fit:cover" >
                        </figure>
                        <figure>
                    </div>
                    <div class="col-lg-6">
                        <figure>
                            <img src="{{url('images/slider-footer-about-mit3.jpeg')}}"  class="img-fluid img" style="width: 100%;height: 25vh;  object-fit:cover" >
                        </figure>
                        <figure>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <figure>
                            <img src="{{url('images/slider-footer-about-mit4.jpeg')}}"  class="img-fluid img" style="width: 100%;height: 25vh;  object-fit:cover" >
                        </figure>
                        <figure>
                    </div>
                    <div class="col-lg-6">
                        <figure>
                            <img src="{{url('images/slider-footer-about-mit5.jpeg')}}"  class="img-fluid img" style="width: 100%;height: 25vh;  object-fit:cover" >
                        </figure>
                        <figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-3">
                <figure>
                    <img src="{{url('images/slider-footer-about-mit6.jpeg')}}"  class="img-fluid img" style="width: 100%;height: 25vh; object-fit:cover" >
                </figure>
                <figure>
            </div>
            <div class="col-lg-3">
                <figure>
                    <img src="{{url('images/slider-footer-about-mit7.jpeg')}}"  class="img-fluid img" style="width: 100%;height: 25vh; object-fit:cover" >
                </figure>
                <figure>
            </div>
            <div class="col-lg-3">
                <figure>
                    <img src="{{url('images/slider-footer-about-mit8.jpeg')}}"  class="img-fluid img" style="width: 100%;height: 25vh; object-fit:cover" >
                </figure>
                <figure>
            </div>
        </div>
    </div>
</section>
