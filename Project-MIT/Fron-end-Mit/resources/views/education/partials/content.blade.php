<section class="container-fluid content-education">
    <h2>Education</h2>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 " style="margin-top: 25vh;font-family: sans-serif">
                <ul class="d-flex gap-2">
                    <li><a href="" class="text-black">Home</a></li>
                    <li style="color: red">/</li>
                    <li>Education</li>
                </ul>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row ">
                <h1>
                    {{$educations->title}}
                </h1>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row mt-2">
                <div class="col-xl-6 education-text">
                    <h5>
                        {{$educations->description}}
                    </h5>
                </div>
                <div class="col-xl-6 education-img" style="min-height: 40vh">
                    <div class="ed-img">
                       <img src="{{ asset('images/' . $educations->image) }}" alt="Education Image" class="img-fluid" style="width: 70vh; height: 50vh;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5" style="border-top: 1px solid rgb(82, 78, 78);min-height: 50vh">
        <h1 class="mt-4">Schools, Departments & the College</h1>
        <div class="row mt-2">
            <div class="col-lg-6  align-items-center ">
                <h5>
                    Across MIT, faculty help set the global standard of excellence in their disciplines: They are
                    pioneering scholars who love to teach. Deeply engaged in practice, they topple conventional walls
                    between fields in the push for deeper understanding and fresh ideas. In fact, many faculty actively
                    work in at least one of MIT’s interdisciplinary labs, centers, initiatives, and institutes that
                    target crucial challenges, from clean energy to cancer.
                    The MIT Schwarzman College of Computing, opened in fall 2019, is a cross-cutting entity with
                    education and research links across all five schools.
                </h5>
            </div>
            <div class="col-lg-6">
                <ul class="education-ul">
                    <h4>Top Resources</h4>
                    <li><span>01.</span><a href=""> Registrar’s Office</a></li>
                    <li><span>02.</span><a href=""> Course Catalog (MIT Bulletin)</a></li>
                    <li><span>03.</span><a href=""> DoingWell</a></li>
                    <li><span>04.</span><a href=""> Office of the First Year</a></li>
                    <li><span>05.</span><a href=""> Office of Graduate Education</a></li>
                    <li><span>06.</span><a href=""> Office of Experiential Learning</a></li>
                    <li><span>07.</span><a href=""> Teaching + Learning Lab</a></li>
                </ul>
            </div>
        </div>
        <div class="row mt-5 ms-0" style="width: 30vh">
            <div class="education-shcool p-3 d-flex align-items-center justify-content-center">
                <h4>Explore Departments</h4>
            </div>
        </div>
    </div>
    <div class="container  mt-5" style="border-top: 1px solid rgb(82, 78, 78);min-height: 50vh">
        <h1 class="mt-4">Teaching & Learning</h1>
        <div class="row mt-2">
            <div class="col-lg-6">
                <h5>
                    Across MIT, faculty help set the global standard of excellence in their disciplines: They are
                    pioneering scholars who love to teach. Deeply engaged in practice, they topple conventional walls
                    between fields in the push for deeper understanding and fresh ideas. In fact, many faculty actively
                    work in at least one of MIT’s interdisciplinary labs, centers, initiatives, and institutes that
                    target crucial challenges, from clean energy to cancer.

                    The MIT Schwarzman College of Computing, opened in fall 2019, is a cross-cutting entity with
                    education and research links across all five schools.
                </h5>
            </div>
            <div class="col-lg-6 "  >
                <ul class="education-ul ">
                    <h4>Top Resources</h4>
                    <li><span>01.</span><a href=""> Registrar’s Office</a></li>
                    <li><span>02.</span><a href=""> Course Catalog (MIT Bulletin)</a></li>
                    <li><span>03.</span><a href=""> DoingWell</a></li>
                    <li><span>04.</span><a href=""> Office of the First Year</a></li>
                    <li><span>05.</span><a href=""> Office of Graduate Education</a></li>
                    <li><span>06.</span><a href=""> Office of Experiential Learning</a></li>
                    <li><span>07.</span><a href=""> Teaching + Learning Lab</a></li>
                    <li><span>08.</span><a href=""> Undergraduate Advising Center</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container mt-5" style="border-top: 1px solid rgb(82, 78, 78);min-height: 50vh">
        <h1 class="mt-4">Open Learning</h1>
        <div class="row mt-2">
            <div class="col-lg-6">
                <h5>
                    MIT is pioneering new ways of teaching and learning, on our campus and around the world, by
                    inventing and leveraging digital technologies. MITx, the Institute’s portfolio of massively open
                    online courses, offers flexible access to a range of interactive courses developed and taught by
                    instructors from MIT. Another MIT innovation — the MicroMasters credential — is increasingly
                    recognized by industry leaders hiring new talent. And MIT’s original digital learning option,
                    OpenCourseWare, continues to offer teachers and learners worldwide the materials for more than 2,500
                    MIT courses, freely available online.
                </h5>
            </div>
            <div class="col-lg-6">
                <ul class="education-ul">
                    <h4>Top Resources</h4>
                    <li><span>01.</span><a href=""> Registrar’s Office</a></li>
                    <li><span>02.</span><a href=""> Course Catalog (MIT Bulletin)</a></li>
                    <li><span>03.</span><a href=""> DoingWell</a></li>
                    <li><span>04.</span><a href=""> Office of the First Year</a></li>
                    <li><span>05.</span><a href=""> Office of Graduate Education</a></li>
                    <li><span>06.</span><a href=""> Office of Experiential Learning</a></li>
                    <li><span>07.</span><a href=""> Teaching + Learning Lab</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container mt-5 " style="border-top: 1px solid rgb(82, 78, 78);min-height: 50vh">
        <h1 class="mt-4">Professional & Executive Education</h1>
        <div class="row mt-2">
            <div class="col-lg-6">
                <h5>
                    For executives, managers, entrepreneurs, and technical professionals eager to tap fresh thinking and
                    new research from MIT, we offer dozens of executive and professional programs. Some are online. Some
                    are on campus. Ranging from two days to 20 months, they all share MIT’s signature focus on practical
                    solutions for the real world.
                </h5>
            </div>
            <div class="col-lg-6">
                <ul class="education-ul">
                    <h4>Top Resources</h4>
                    <li><span>01.</span><a href=""> Registrar’s Office</a></li>
                    <li><span>02.</span><a href=""> Course Catalog (MIT Bulletin)</a></li>
                    <li><span>03.</span><a href=""> DoingWell</a></li>
                    <li><span>04.</span><a href=""> Office of the First Year</a></li>
                    <li><span>05.</span><a href=""> Office of Graduate Education</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container mt-5 " style="border-top: 1px solid rgb(82, 78, 78);min-height: 50vh">
        <h1 class="mt-4">K-12 Resources</h1>
        <div class="row mt-2">
            <div class="col-lg-6">
                <h5>
                    We delight in the beauty and creative power of science, technology, engineering, and math, and we
                    make a special effort to spark that same passion in students from kindergarten through high school —
                    in school, after school, and over the summer. Locally, we engage students, teachers, and families
                    with a range of hands-on K-12 offerings, from structured field trips to MIT’s Edgerton Center to
                    programs designed to encourage girls in their love of technology and science. We also offer an array
                    of resources for teachers, to help them make science and engineering easy to grasp and irresistibly
                    interesting.
                </h5>
            </div>
            <div class="col-lg-6">
                <ul class="education-ul">

                    <h4>Top Resources</h4>
                    <li><span>01.</span><a href=""> Registrar’s Office</a></li>
                    <li><span>02.</span><a href=""> Course Catalog (MIT Bulletin)</a></li>
                    <li><span>03.</span><a href=""> DoingWell</a></li>
                    <li><span>04.</span><a href=""> Office of the First Year</a></li>
                    <li><span>05.</span><a href=""> Office of Graduate Education</a></li>
                    <li><span>06.</span><a href=""> Office of Experiential Learning</a></li>
                    <li><span>07.</span><a href=""> Teaching + Learning Lab</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid m-0 p-0 p-5 py-5  education-imgae mt-5  " style="background-color: #800000">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <figure>
                            <img style="min-height: 50vh;object-fit:cover"  src="{{url('images/imgeducation1.jpg')}}" class="img-fluid img" alt="">
                        </figure>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <figure>
                            <img style="min-height: 25vh;object-fit:cover" src="{{url('images/imgeducation2.jpeg')}}" class="img-fluid img" alt="">
                        </figure>
                    </div>
                    <div class="col-lg-6">
                        <figure>
                            <img style="min-height: 25vh;object-fit:cover" src="{{url('images/imgeducation-3.jpg')}}" class="img-fluid img" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6">
                        <figure>
                            <img style="min-height: 25vh;object-fit:cover" src="{{url('images/imgeduaction.jpg')}}" class="img-fluid img" alt="">
                        </figure>
                    </div>
                    <div class="col-lg-6">
                        <figure>
                            <img style="min-height: 25vh;object-fit:cover" src="{{url('images/imgeducation.jpg')}}" class="img-fluid img" alt="">
                        </figure>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <img style="min-height: 50vh;object-fit:cover" src="{{url('images/imgeducation6.jpg')}}" class="img-fluid img" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
