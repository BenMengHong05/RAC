<section class=" m-0 p-0 content-education">
    @if ($category->id === 26 && $category->id === 28)
        <div class="category-content">
            <div class="row ">
                <div class="col-md-12 col-lg-12 " style="margin-top: 25vh">
                    <ul class="d-flex m-0 p-0  gap-2">
                        <li><a href="" class="text-black">Home</a></li>
                        <li style="color: red">/</li>
                        <li class="category-name">{{ $category->name }}</li>
                    </ul>
                </div>
            </div>
            <div class="education-title mt-5">
                <div class="row ">
                    <div class="col-lg-12 category-title">
                        <h2>
                            {{ $category->title }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="education-description mt-5">
                <div class="row  mt-2">
                    <div class="col-xl-6 education-text">
                        <h5>
                            {{ $category->description }}
                        </h5>
                    </div>
                    <div class="col-xl-6 education-img">
                        <div class="ed-img">
                            <img src="{{ asset('images/' . $category->image) }}" class="img-fluid"
                                style="width: 70vh; height: 50vh;">
                        </div>
                    </div>
                </div>
            </div>
        @elseif ($category->id !== 26 && $category->id !== 28)
            <div class="container mb-5  ">
                <div class="row ">
                    <div class="col-md-12 col-lg-12 " style="margin-top: 25vh;font-family: sans-serif">
                        <ul class="d-flex  ps-3  gap-2">
                            <li><a href="" class="text-black">Home</a></li>
                            <li style="color: red">/</li>
                            <li class="category-name">{{ $category->name }}</li>
                        </ul>
                    </div>
                </div>
                <div class="container mt-5 ">
                    <div class="row category-title ">
                        <h2>
                            {{ $category->title }}
                        </h2>
                    </div>
                </div>
                <div class="container mt-5">
                    <div class="row  mt-2">
                        <div class="col-xl-6 education-text">
                            <h5>
                                {{ $category->description }}
                            </h5>
                        </div>
                        <div class="col-xl-6 education-img">
                            <div class="ed-img">
                                <img src="{{ asset('images/' . $category->image) }}" class="img-fluid"
                                    style="width: 70vh; height: 50vh;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endif
    @foreach ($category->category_paths as $index => $category_description)
        @if ($index >= 0 && $index <= 4)
            @if ($category_description->categorie_id === 21)
                <div class="container-fluid m-0 p-0  pb-5"
                    style="border-top: 1px solid rgb(82, 78, 78,0.2);position: relative;">
                    <div class="container">
                        <div class="row border-category">
                            <div class="category-title ">
                                <h2 class="pt-5 title-all-category custom-border-top ">
                                    {{ $category_description->title }}
                                </h2>
                            </div>
                            <div class="row  mt-4">
                                <div class="col-lg-6 align-items-center education-text">
                                    <h5>
                                        {{ $category_description->description }}
                                    </h5>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="education-ul">
                                        <h5>Top Resources</h5>
                                        @if ($index === 0)
                                            <li><span>01.</span><a href=""> Departments by School</a></li>
                                            <li><span>02.</span><a href=""> School of Architecture and
                                                    Planning</a>
                                            </li>
                                            <li><span>03.</span><a href=""> School of Engineering</a></li>
                                            <li><span>04.</span><a href=""> School of Humanities, Arts, and
                                                    Social
                                                    Sciences</a></li>
                                            <li><span>05.</span><a href=""> RAC Sloan School of Management</a>
                                            </li>
                                            <li><span>06.</span><a href=""> School of Science</a></li>
                                            <li><span>07.</span><a href=""> RAC Schwarzman College of
                                                    Computing</a>
                                            </li>
                                        @endif
                                        @if ($index === 1)
                                            <li><span>01.</span><a href=""> Registrar’s Office</a></li>
                                            <li><span>02.</span><a href=""> Course Catalog (RAC Bulletin)</a>
                                            </li>
                                            <li><span>03.</span><a href=""> DoingWell</a></li>
                                            <li><span>04.</span><a href=""> Office of the First Year</a></li>
                                            <li><span>05.</span><a href=""> Office of Graduate Education</a></li>
                                            <li><span>06.</span><a href=""> Office of Experiential Learning</a>
                                            </li>
                                            <li><span>07.</span><a href=""> Teaching + Learning Lab</a></li>
                                        @endif
                                        @if ($index === 2)
                                            <li><span>01.</span><a href=""> RACx</a></li>
                                            <li><span>02.</span><a href=""> First-year STEM Classes from RAC</a>
                                            </li>
                                            <li><span>03.</span><a href=""> OpenCourseWare</a></li>
                                            <li><span>04.</span><a href=""> RACx Micromasters</a></li>
                                            <li><span>05.</span><a href=""> Open Learning</a></li>
                                            <li><span>06.</span><a href=""> Residential Digital Innovations</a>
                                            </li>
                                            <li><span>07.</span><a href=""> Podcasts</a></li>
                                        @endif
                                        @if ($index === 3)
                                            <li><span>01.</span><a href=""> Professional & Executive Learning</a>
                                            </li>
                                            <li><span>02.</span><a href=""> RAC Professional Education – School
                                                    of
                                                    Engineering</a></li>
                                            <li><span>03.</span><a href=""> Sloan School of Management Executive
                                                    Education</a></li>
                                            <li><span>04.</span><a href=""> RAC xPRO</a></li>
                                            <li><span>05.</span><a href=""> Bootcamps</a></li>
                                        @endif
                                        @if ($index === 4)
                                            <li><span>01.</span><a href=""> K-12 Science & Engineering
                                                    Opportunities</a></li>
                                            <li><span>02.</span><a href=""> OpenCourseWare Highlights for High
                                                    School</a></li>
                                            <li><span>03.</span><a href=""> K-12 Outreach</a></li>
                                            <li><span>04.</span><a href=""> App Inventor</a></li>
                                            <li><span>05.</span><a href=""> Scratch</a></li>
                                            <li><span>06.</span><a href=""> Teaching Systems Lab</a></li>
                                            <li><span>07.</span><a href=""> Lemelson-RAC Program</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            @if ($index === 0)
                                <div class="row mt-5 ms-0" style="width: 30vh">
                                    <div class="education-shcool p-3 d-flex align-items-center justify-content-center">
                                        <h5 style="white-space: nowrap">Explore Departments</h5>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            @endif
        @endif
    @endforeach
    @foreach ($category->category_paths as $index => $category_description)
        @if ($index >= 0 && $index <= 1)
            @if ($category_description->categorie_id === 22)
                <div class="container-fluid m-0 p-0 pb-5 "
                    style="border-top: 1px solid rgb(82, 78, 78,0.2);position: relative;">
                    <div class="container">
                        <div class="row  border-category">
                            <div class="category-title ">
                                <h2 class="pt-5 title-all-category custom-border-top">
                                    {{ $category_description->title }}
                                </h2>
                            </div>
                            <div class="row  mt-4">
                                <div class="col-lg-6 align-items-center education-text">
                                    <h5>
                                        {{ $category_description->description }}
                                    </h5>
                                    <div class="row py-5" style="width: 40vh">
                                        <div class=" d-flex align-items-center justify-content-center">
                                            @if ($index === 0)
                                                <button style="width: 50vh;" class="p-3 education-shcool "
                                                    style="white-space: nowrap">View Centers, Labs &Programs</button>
                                            @endif
                                            @if ($index === 1)
                                                <button style="width: 50vh;" class="p-3 education-shcool "
                                                    style="white-space: nowrap">View Collaborating
                                                    Institutions</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="ed-img d-flex align-items-center justify-content-center mt-5">
                                        <img src="{{ asset('images/' . $category_description->image) }}"
                                            alt="Education Image" class="img-fluid figure-img"
                                            style="width: 100%;height: 40vh;">
                                    </div>
                                    <p class="education-text ">{{ $category_description->image_description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            @endif
        @endif
    @endforeach
    @foreach ($category->category_paths as $index => $category_description)
        @if ($index >= 0 && $index <= 1)
            @if ($category_description->categorie_id === 23)
                <div class="container-fluid m-0 p-0 pb-5 "
                    style="border-top: 1px solid rgb(82, 78, 78,0.2);position: relative;">
                    <div class="container">
                        <div class="row ">
                            <div class="category-title ">
                                <h2 class="pt-5 title-all-category custom-border-top">
                                    {{ $category_description->title }}
                                </h2>
                            </div>
                            <div class="row  mt-4">
                                <div class="col-lg-6   align-items-center education-text">
                                    <h5>
                                        {{ $category_description->description }}
                                    </h5>
                                </div>
                                <div class="col-lg-6">
                                    @if ($index === 0)
                                        <ul class="education-ul">
                                            <h4>Top Resources</h4>
                                            <li><span>01.</span><a href=""> RAC Office of Innovation Resource
                                                    Guide</a></li>
                                            <li><span>02.</span><a href=""> RAC InnovationHQ</a></li>
                                            <li><span>03.</span><a href=""> Martin Trust Center for RAC
                                                    Entrepreneurship</a>
                                            </li>
                                            <li><span>04.</span><a href=""> RAC Sandbox Innovation Fund
                                                    Program</a>
                                            </li>
                                            <li><span>05.</span><a href=""> Deshpande Center for Technological
                                                    Innovationn</a></li>
                                            <li><span>06.</span><a href=""> D-Lab</a></li>
                                            <li><span>07.</span><a href=""> The Engine</a></li>
                                            <li><span>08.</span><a href=""> Solve</a></li>
                                            <li><span>09.</span><a href=""> Technology Licensing Office</a></li>
                                            <li><span>010.</span><a href="">Venture Mentoring Service</a></li>
                                        </ul>
                                    @endif
                                    @if ($index == 1)
                                        <img src="{{ asset('images/' . $category_description->image) }}"
                                            alt="Education Image" class="img-fluid figure-img"
                                            style="width: 60vh;height: 40vh;">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            @endif
        @endif
    @endforeach
    @foreach ($category->category_paths as $index => $category_description)
        @if ($index >= 0 && $index <= 2)
            @if ($category_description->categorie_id === 24)
                <div class="container-fluid m-0 p-0 pb-5 "
                    style="border-top: 1px solid rgb(82, 78, 78,0.2);position: relative;">
                    <div class="container">
                        <div class="row ">
                            <div class="category-title ">
                                <h2 class="pt-5 title-all-category custom-border-top">
                                    {{ $category_description->title }}
                                </h2>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-6  align-items-center education-text ">
                                    <h5>
                                        {{ $category_description->description }}
                                    </h5>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="education-ul">
                                        <h4>Top Resources</h4>
                                        @if ($index === 0)
                                            <li><span>01.</span><a href=""> Undergraduate Admissions</a></li>
                                            <li><span>02.</span><a href=""> Undergraduate Financial Aid</a></li>
                                            <li><span>03.</span><a href=""> First-Year Class Profile (2027)</a>
                                            </li>
                                            <li><span>04.</span><a href=""> Undergraduate Student Blogs</a></li>
                                        @endif
                                        @if ($index === 1)
                                            <li><span>01.</span><a href=""> Graduate Admissions</a></li>
                                            <li><span>02.</span><a href=""> Graduate Financial Aid</a></li>
                                            <li><span>03.</span><a href=""> Graduate Student Blogs</a></li>
                                        @endif
                                        @if ($index === 2)
                                            <li><span>01.</span><a href=""> RAC Professional Education</a></li>
                                            <li><span>02.</span><a href=""> RAC Sloan School of Management
                                                    Executive
                                                    Education</a></li>
                                            <li><span>03.</span><a href=""> RAC xPRO</a></li>
                                            <li><span>04.</span><a href=""> RACx MicroMasters</a></li>
                                            <li><span>05.</span><a href=""> RAC Bootcamps</a></li>
                                        @endif

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endif
    @endforeach
    @foreach ($category->category_paths as $index => $category_description)
        @if ($index >= 0 && $index <= 5)
            @if ($category_description->categorie_id === 25)
                <div class="container-fluid m-0 p-0 pb-5 "
                    style="border-top: 1px solid rgb(82, 78, 78,0.2);position: relative;">
                    <div class="container">
                        <div class="row ">
                            <div class="category-title ">
                                <h2 class="pt-5 title-all-category custom-border-top">
                                    {{ $category_description->title }}
                                </h2>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-6  education-text">
                                    <h5>
                                        {{ $category_description->description }}
                                    </h5>
                                    <div class="campuslife-menu mt-4">
                                        <ul class="education-ul m-0 p-0">
                                            <h4>Top Resources</h4>
                                            @if ($index === 0)
                                                <li><span>01.</span><a href=""> Division of Student Life</a>
                                                </li>
                                                <li><span>02.</span><a href=""> Diversity & Inclusion</a></li>
                                                <li><span>03.</span><a href=""> Student Activities</a></li>
                                                <li><span>04.</span><a href=""> Support for
                                                        UndergraduateStudents</a></li>
                                                <li><span>05.</span><a href=""> Support for Graduate Students
                                                        &Families</a></li>
                                            @endif
                                            @if ($index === 1)
                                                <li><span>01.</span><a href=""> RAC Dining</a></li>
                                                <li><span>02.</span><a href=""> Undergraduate Housing</a></li>
                                                <li><span>03.</span><a href=""> Graduate Student & Family
                                                        Housing</a></li>
                                                <li><span>04.</span><a href=""> Off-Campus Housing</a></li>
                                                <li><span>05.</span><a href=""> Residential Education</a></li>
                                            @endif
                                            @if ($index === 2)
                                                <li><span>01.</span><a href=""> Varsity Athletics</a></li>
                                                <li><span>02.</span><a href=""> Physical Education</a></li>
                                                <li><span>03.</span><a href=""> Recreation</a></li>
                                                <li><span>04.</span><a href=""> Club Sports</a></li>
                                                <li><span>05.</span><a href=""> Intramurals</a></li>
                                            @endif
                                            @if ($index === 3)
                                                <li><span>01.</span><a href=""> Arts at RAC</a></li>
                                                <li><span>02.</span><a href=""> Academics</a></li>
                                                <li><span>03.</span><a href=""> Events & Visit</a></li>
                                                <li><span>04.</span><a href=""> Exhibitions & Galleries</a></li>
                                                <li><span>05.</span><a href=""> List Visual Arts Center</a></li>
                                                <li><span>06.</span><a href=""> Public Art Map</a></li>
                                            @endif
                                            @if ($index === 4)
                                                <li><span>01.</span><a href=""> Institute Community and Equity
                                                        Office</a></li>
                                                <li><span>02.</span><a href=""> Office of Minority Education</a>
                                                </li>
                                                <li><span>03.</span><a href=""> Graduate Student Diversity
                                                        Initiatives</a></li>
                                                <li><span>04.</span><a href=""> Social Justice Programming &
                                                        Cross-Cultural Engagement</a></li>
                                                <li><span>05.</span><a href=""> Religious, Spiritual & Ethical
                                                        Life</a></li>
                                            @endif
                                            @if ($index === 5)
                                                <li><span>01.</span><a href=""> Wellbeing Lab</a></li>
                                                <li><span>02.</span><a href=""> Community Wellness at RAC
                                                        Health</a>
                                                </li>
                                                <li><span>03.</span><a href=""> Student Mental Health and
                                                        Counseling
                                                        Services</a></li>
                                                <li><span>04.</span><a href=""> MindHandHeart</a></li>
                                                <li><span>05.</span><a href=""> Stress Reduction, Mindfulness &
                                                        Relaxation</a></li>
                                                <li><span>06.</span><a href=""> Urgent Care</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="img3  d-flex flex-column ps-5">
                                        <img src="{{ asset('images/' . $category_description->image) }}"
                                            alt="Education Image" class="img-fluid figure-img"
                                            style="width: 60vh;height: 40vh;">
                                        <p class="mt-3">{{ $category_description->image_description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endif
    @endforeach
</section>
@if ($category->id === 26)
    <div style="height: 9vh">
        <h1>MengHong-News</h1>
    </div>
    <main class="m-0 p-0">
        <section style="width: 100%;background-color: rgb(236, 236, 236)">
            <div class="container">
                <div class="row d-flex  align-items-start justify-content-center">
                    <div class="col-lg-6  mt-5 mb-4 d-flex flex-column align-items-start justify-content-start">
                        <h1 style="font-size: 3rem;font-family: sans-serif;font-weight: bold">RAC News</h1>
                    </div>
                    <div class="col-lg-6  mt-5 mb-4   d-flex ">
                        <div class="search-news d-flex align-items-center justify-content-start" style="width: 60%">
                            <input
                                style="border: 1px solid rgb(136, 136, 136); border-top: 3px solid black;width: 100%"
                                class=" p-3  ps-4" type="text" name="search" id=""
                                placeholder="Search...">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=" d-flex align-items-center justify-content-center m-0 p-0"
            style="background-color: rgb(223, 223, 223);min-height: 5vh">
            <div class="container">
                <div class="row  position-relative">
                    <div class="col-lg-12  d-flex align-items-center justify-content-start">
                        <h4 style="border-bottom: 2px solid red ; cursor: pointer;font-size: 1.1rem" class="m-0 p-0">
                            Subscribe to the RAC Daily
                            and/or RAC Weekly newsletters.</h4>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid"
            style="width: 100%; margin: 0;padding: 0;min-height: 72.7vh;background-color: rgba(224, 224, 224, 0.397)">
            <div class="container-fluid px-5">
                <div class="row d-flex align-items-center justify-content-center " style="min-height: 72.7vh">
                    <section class="container-fluid" style="width: 100%; margin: 0;padding: 0;min-height: 72.7vh;">
                        <div>
                            <div class="row m-0 p-0 d-flex align-items-center justify-content-center "
                                style="min-height: 72.7vh">
                                @if ($category->id === 26)
                                    ​
                                    <div class="col-lg-6 d-flex align-items-start justify-content-start ">
                                        <img src="{{ asset('images/' . $category->image) }}"
                                            alt="information_new Image" class="figure-img img-fluid "
                                            style="width: 100%;height: 100%;">
                                    </div>
                                    <div
                                        class="col-lg-6 d-flex flex-column align-items-center justify-content-center h-100 text-white ">
                                        <h2 class="news-hover-h4 text-dark ">
                                            {{ $category->title }}
                                        </h2>
                                        <h5 class="text-dark new-description">
                                            {{ $category->description }}
                                        </h5>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>​
        <section class="py-4"
            style="border-top: 1px solid rgb(82, 78, 78,0.2);border-bottom: 1px solid rgb(82, 78, 78,0.2)">
            <div class="container">
                <div class="row  d-flex">
                    <div class="col-lg-12 d-flex">
                        <div class="content-qwesion">
                            <h4 style="border-bottom: 1px solid red"><a href="" class="text-dark">View more
                                    Research on RAC's →</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container " style="width: 100%;">
            <div class="row d-flex align-items-start justify-content-start " style="width: 100%">
                @foreach ($category->category_paths as $index => $category_description)
                    @if ($index >= 0 && $index <= 3)
                        ​
                        <div class="col-lg-6 ">
                            <div class="row">
                                <div class="col-md-6 m-0 ">
                                    <div class="d-flex gap-4 mt-4">
                                        <div class="image-news" style="width: 100%;height: 100%;">
                                            <img src="{{ asset('images/' . $category_description->image) }}"
                                                alt="information_new Image" class="figure-img img-fluid "
                                                style="width: 100%;height: 25vh;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="d-flex gap-4 mt-4">
                                        <div class="new-menu d-flex flex-column w-100 ">
                                            <h5 class="news-hover-h4 ">
                                                {{ $category_description->title }}
                                            </h5>
                                            <p class="new-menu-description">{{ $category_description->description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($index >= 4 && $index <= 5)
                        <div
                            class="col-lg-6 d-flex flex-column m-0 p-0 align-items-start justify-content-start text-dark h-100">
                            <div class="content-news-1 mt-2">
                                <h5 class="news-hover-h4 "> {{ $category_description->title }}</h5>
                                <p class="new-menu-description">{{ $category_description->description }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
                {{-- <div class="col-lg-6 d-flex flex-column align-items-start justify-content-start text-dark h-100">
                    <div class="content-news-1 mt-2">
                        <h4 style=" font-family: sans-serif;font-weight: bold;">The Boston Globe</h4>
                        <p>Graduate student Lt. Col. Jill Rahon, a war veteran and seasoned pilot, discusses her journey
                            fromher tours in Afghanistan to her research at RAC on engineering solutions for
                            the enforcement ofnuclear nonproliferation accords, writes Sam Cavanaugh for Hoodline.
                            “The path Rahon has blazed is marked by courage and ingenuity, from deftly handling the
                            Chinook helicopter over the treacherous terrains of Afghanistan to controls of a
                            meticulously
                            studying
                            the nuances of resonance analysis to keep nuclear powers in check,” writes Cavanaugh. </p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex flex-column align-items-start justify-content-start text-dark h-100">
                    <div class="content-news-1 mt-2">
                        <h4 style=" font-family: sans-serif;font-weight: bold;">Popular Science</h4>
                        <p>RAC researchers have found that a textured surface, designed like a shark riblet, can improve
                            the
                            towed sonar arrays (TSAs) that are "vital for marine vessels engaged in underwater
                            unpredictable
                            security or exploration projects," reports Andrew Paul for Popular Science. “Utilizing and
                            scallopedriblets
                            computational modeling, researchers tested various riblet shapes and patterns interacting
                            with
                            simulated
                            water environments,” explains Paul. “From calm currents to the more commonly flows seen in
                            oceans,
                            the team observed how smooth, triangular, trapezoidal, might affect fluid dynamics and
                            acoustics.”
                        </p>
                    </div>
                </div> --}}
            </div>
        </section>
        <section class="py-4 d-flex align-items-center"
            style="border-top: 1px solid rgb(82, 78, 78,0.2);border-bottom: 1px solid rgb(82, 78, 78,0.2) ">
            <div class="container">
                <div class="row  d-flex">
                    <div class="col-lg-12  d-flex">
                        <h5>Looking for audio? </h5>
                        <div class="content-qwesion">
                            <h5 style="border-bottom: 1px solid red"><a href="" class="text-dark">Listen to
                                    the RAC News podcast →</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container " style="width: 100%;">
            <div class="row d-flex align-items-start justify-content-start " style="width: 100%">
                @foreach ($category->category_paths as $index => $category_description)
                    @if ($index >= 6 && $index <= 13)
                        ​
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex gap-4 mt-4">
                                        <div class="image-news" style="width: 100%;height: 100%;">
                                            <img src="{{ asset('images/' . $category_description->image) }}"
                                                alt="information_new Image" class="figure-img img-fluid "
                                                style="width: 100%;height: 25vh;">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex gap-4 mt-4">
                                        <div class="new-menu d-flex flex-column w-100 ">
                                            <h5 class="news-hover-h4 ">
                                                {{ $category_description->title }}
                                            </h5>
                                            <p class="new-menu-description">{{ $category_description->description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="d-flex gap-4 mt-4">
                                <div class="image-news" style="width: 100%;height: 100%;">
                                    <img src="{{ asset('images/' . $category_description->image) }}"
                                        alt="information_new Image" class="figure-img img-fluid "
                                        style="width: 100%;height: 25vh;">
                                </div>
                                <div class="new-menu d-flex flex-column w-100 ">
                                    <h5 class="news-hover-h4">
                                        {{ $category_description->title }}
                                    </h5>
                                    <p class="new-menu-description">{{ $category_description->description }}</p>
                                </div>
                            </div> --}}
                        </div>
                    @endif
                @endforeach
            </div>
        </section>
        <section class="py-4"
            style="border-top: 1px solid rgb(82, 78, 78,0.2);border-bottom: 1px solid rgb(82, 78, 78,0.2)">
            <div class="container">
                <div class="row  d-flex">
                    <div class="col-lg-12 d-flex">
                        <div class="content-qwesion">
                            <h4 style="border-bottom: 1px solid red"><a href="" class="text-dark">More RAC
                                    News articles</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-5 mt-5" style="width: 100%">
            <div class="container " style="width: 100%;min-height: 60vh">
                <div class="swiper">
                    <div class="swiper-wrapper  ">
                        @foreach ($category->category_images as $index => $category_image)
                            @if ($index >= 0 && $index <= 1)
                                <div class="swiper-slide d-flex align-items-center justify-content-center"
                                    style="position: relative; background-size: cover; background-repeat: no-repeat; background-attachment: fixed; z-index: 1;">
                                    <div class="swiper-blurred-bg"
                                        style="
                                position: absolute;
                                top: 0;
                                left: 0;
                                right: 0;
                                bottom: 0;
                                background-image: url('{{ asset('images/' . $category_image->image) }}');
                                background-size: cover;
                                background-repeat: no-repeat;
                                background-attachment: fixed;
                                z-index: 1;">
                                    </div>
                                    <div class="swiper-content"
                                        style="position: relative; z-index: 2; text-align: center; width: 60%;">

                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Navigation -->
                    <div class="swiper-button-prev text-danger" style="padding-left: 2rem"></div>
                    <div class="swiper-button-next text-danger" style="padding-right: 2rem"></div>
                </div>
            </div>
        </section>
        <section class="py-4 mt-4"
            style="border-top: 1px solid rgb(82, 78, 78,0.2);border-bottom: 1px solid rgb(82, 78, 78,0.2)">
            <div class="container">
                <div class="row  d-flex">
                    <div class="col-lg-12 d-flex">
                        <div class="content-qwesion">
                            <h4 style="border-bottom: 1px solid red"><a href="" class="text-dark">More RAC
                                    News articles </a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container " style="width: 100%;">
            <div class="row d-flex align-items-start justify-content-start " style="width: 100%">
                @foreach ($category->category_paths as $index => $category_description)
                    @if ($index >= 14 && $index <= 19)
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex gap-4 mt-4">
                                        <div class="image-news" style="width: 100%;height: 100%;">
                                            <img src="{{ asset('images/' . $category_description->image) }}"
                                                alt="information_new Image" class="figure-img img-fluid "
                                                style="width: 100%;height: 25vh;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex gap-4 mt-4">
                                        <div class="new-menu d-flex flex-column w-100 ">
                                            <h5 class="news-hover-h4 ">
                                                {{ $category_description->title }}
                                            </h5>
                                            <p class="new-menu-description">{{ $category_description->description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="d-flex gap-4 mt-4">
                                <div class="image-news" style="width: 100%;height: 100%;">
                                    <img src="{{ asset('images/' . $category_description->image) }}"
                                        alt="information_new Image" class="figure-img img-fluid "
                                        style="width: 100%;height: 25vh;">
                                </div>
                                <div class="new-menu d-flex flex-column w-100 ">
                                    <h5 class="news-hover-h4">
                                        {{ $category_description->title }}
                                    </h5>
                                    <p class="new-menu-description">{{ $category_description->description }}</p>
                                </div>
                            </div> --}}
                        </div>
                    @endif
                @endforeach
            </div>
        </section>
        <section class="py-4"
            style="border-top: 1px solid rgb(82, 78, 78,0.2);border-bottom: 1px solid rgb(82, 78, 78,0.2)">
            <div class="container">
                <div class="row  d-flex">
                    <div class="col-lg-12 d-flex">
                        <div class="content-qwesion">
                            <h4 style="border-bottom: 1px solid red"><a href="" class="text-dark">View more
                                    videos on RAC's YouTube channel →</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container" style="width: 100%;">
            <div class="row d-flex align-items-start justify-content-start " style="width: 100%">
                @foreach ($category->category_paths as $index => $category_description)
                    @if ($index >= 20 && $index <= 27)
                        ​
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex gap-4 mt-4">
                                        <div class="image-news" style="width: 100%;height: 100%;">
                                            <img src="{{ asset('images/' . $category_description->image) }}"
                                                alt="information_new Image" class="figure-img img-fluid "
                                                style="width: 100%;height: 25vh;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex gap-4 mt-4">
                                        <div class="new-menu d-flex flex-column w-100 ">
                                            <h5 class="news-hover-h4 ">
                                                {{ $category_description->title }}
                                            </h5>
                                            <p class="new-menu-description">{{ $category_description->description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="d-flex gap-4 mt-4">
                                <div class="image-news" style="width: 100%;height: 100%;">
                                    <img src="{{ asset('images/' . $category_description->image) }}"
                                        alt="information_new Image" class="figure-img img-fluid "
                                        style="width: 100%;height: 25vh;">
                                </div>
                                <div class="new-menu d-flex flex-column w-100 ">
                                    <h5 class="news-hover-h4">
                                        {{ $category_description->title }}
                                    </h5>
                                    <p class="new-menu-description">{{ $category_description->description }}</p>
                                </div>
                            </div> --}}
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="row mt-5 ">
                <div class="col-lg-12 w-100 d-flex align-items-center justify-content-center "
                    style="min-height: 10vh">
                    <div class="news-1">
                        <input class="p-3 px-4 h5 border border-dark  input-hover" type="button"
                            value="Load More News">
                    </div>
                </div>
            </div>
        </section>
        <section class="container d-flex flex-column align-items-center justify-content-center"
            style="width: 100%;min-height: 70vh">
            <div class="row d-flex align-items-center justify-content-start  m-0 p-0" style="width: 100%">
                <div class="col-lg-12">
                    <div class="content-new-footer">
                        <h1 style="font-size: 4rem;font-family: sans-serif;font-weight: bold">RAC News</h1>
                        <p>ON CAMPUS AND AROUND THE WORLD</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center justify-content-between  m-0 p-0" style="width: 100%">
                <div class="col-lg-6 d-flex flex-column align-items-start justify-content-start">
                    <p class="text-dark" style="font-size: 1.2rem">This website is managed by the RAC News Office,
                        part of the <span style="border-bottom: 1px solid red"> Institute Office of
                            Communications.</span></p>
                    <h5 style="font-size: 1.3rem">News by Schools/College:</h5>
                    <ul class="new-ul m-0 p-0">
                        <li>01.<a href="">School of Architecture and Planning</a></li>
                        <li>02.<a href="">School of Engineering</a></li>
                        <li>03.<a href="">School of Humanities,Arts,and Social Sciences</a></li>
                        <li>04.<a href="">MIT Sloand School of Management</a></li>
                        <li>05.<a href="">School of Science</a></li>
                        <li>06.<a href="">MIT Schwarzman College of Computing</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center ">
                    <div class="news-1">
                        <input class="p-3 px-4 h5 border border-dark  input-hover" style="min-width: 420px;"
                            type="button" value="Subscribe to press releases">
                    </div>
                    <div class="news-1">
                        <input class="p-3 px-4 h5 border border-dark  input-hover" style="min-width: 420px;"
                            type="button" value="Subscribe to press releases">
                    </div>
                    <div class="news-1">
                        <input class="p-3 px-4 h5 border border-dark  input-hover" style="min-width: 420px;"
                            type="button" value="Subscribe to press releases">
                    </div>
                    <div class="news-1">
                        <input class="p-3 px-4 h5 border border-dark  input-hover" style="min-width: 420px;"
                            type="button" value="Submit campus news">
                    </div>
                    <div class="news-1">
                        <input class="p-3 px-4 h5 border border-dark  input-hover" style="min-width: 420px;"
                            type="button" value="Guidelines for campus news contributors">
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center justify-content-between m-0 p-0" style="width: 100%">
                <div class="col-lg-6 d-flex flex-column align-items-start justify-content-start ">
                    <ul class="d-flex new-ul m-0 p-0 aling-items-center justify-content-between w-100">
                        <li><a href="" style="display: inline-block">About the RAC News Office</a></li>
                        <li><a href=""style="display: inline-block">RAC News Press Center</a></li>
                        <li><a href=""style="display: inline-block">Terms of Use</a></li>
                    </ul>
                    <ul class="d-flex new-ul m-0 p-0  aling-items-center justify-content-between w-100">
                        <li><a href=""style="display: inline-block">Press Inquiries</a></li>
                        <li><a href=""style="display: inline-block">Filming Guidelines</a></li>
                        <li><a href=""style="display: inline-block">RSS Feeds</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
@endif
@foreach ($category->category_paths as $index => $category_description)
    @if ($index >= 0 && $index <= 1)
        @if ($category_description->categorie_id === 27)
            <div class="container-fluid m-0 p-0 pb-5 "
                style="border-top: 1px solid rgb(82, 78, 78,0.2);position: relative;">
                <div class="container">
                    <div class="row ">
                        <div class="category-title ">
                            <h2 class="pt-5 title-all-category custom-border-top">
                                {{ $category_description->title }}
                            </h2>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6 education-text ">
                                <h5>
                                    {{ $category_description->description }}
                                </h5>
                                <div class="campuslife-menu mt-4">
                                    <ul class="education-ul m-0 p-0">
                                        <h4>Top Resources</h4>
                                        @if ($index === 0)
                                            <li><span>01.</span><a href=""> RAC Alumni Association</a></li>
                                            <li><span>02.</span><a href=""> Alumni Directory</a></li>
                                            <li><span>03.</span><a href=""> Alumni Career Resources</a></li>
                                            <li><span>04.</span><a href=""> Lifelong Learning</a></li>
                                            <li><span>05.</span><a href=""> Give to RAC</a></li>
                                        @endif
                                        @if ($index === 1)
                                            <li><span>01.</span><a href=""> Slice of RAC Blog</a></li>
                                            <li><span>02.</span><a href=""> RAC News Office</a></li>
                                            <li><span>03.</span><a href=""> RAC News in Technology Review</a>
                                            </li>
                                            <li><span>04.</span><a href=""> Spectrum</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6  ">
                                <div class="img3 m-0 p-0  d-flex flex-column align-items-center justify-content-end">
                                    <img src="{{ asset('images/' . $category_description->image) }}"
                                        alt="Education Image" class="img-fluid figure-img" style="width: 76%">
                                    <p class="mt-3">{{ $category_description->image_description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endif
@endforeach
@if ($category_description->categorie_id === 28)
    <div class="container-fluid">
        <div class="container "
            style="border-top: 1px solid rgb(82, 78, 78,0.2);min-height: 50vh;margin-top: 5rem;margin-bottom: 5rem">
            <div class="col-md-12  col-lg-12 " style="margin-top: 25vh;font-family: sans-serif">
                <ul class="d-flex m-0 p-0 mb-4  gap-2">
                    <li><a href="" class="text-black">Home</a></li>
                    <li style="color: red">/</li>
                    <li>{{ $category->name }}</li>
                </ul>
                <div class="category-title ">
                    <h3>
                        {{ $category->title }}
                    </h3>
                </div>
            </div>
            @foreach ($category->category_paths as $index => $category_description)
                <h4 class="mt-4 archive ">{{ $category_description->title }}</h4>
                <h6>{{ $category_description->created_at->format('M d,Y') }}</h6>
                <div class="row">
                    <div class="col-lg-6  mt-4 education-text ">
                        <h5>
                            {{ $category_description->description }}
                        </h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
@if ($category_description->categorie_id === 21)
    <section class="container-fluid m-0 p-0  py-5  education-imgae mt-5  " style="background-color: #800000">
        <div class="container ">
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="row d-flex flex-column  align-items-center">
                        @foreach ($category->category_images as $index => $category_image)
                            @if ($index >= 0 && $index <= 0)
                                <div class="col-lg-6" style="width: 100%">
                                    <figure>
                                        <img style="height: 70vh;width: 100%;object-fit: cover;"
                                            src="{{ asset('images/' . $category_image->image) }}"
                                            class="img-fluid img" alt="">
                                    </figure>
                                </div>
                            @endif
                        @endforeach
                        <div class="col-lg-6 m-0 p-0" style="width: 100%">
                            <div class="row m-0 p-0" style="width: 100%">
                                @foreach ($category->category_images as $index => $category_image)
                                    @if ($index >= 1 && $index <= 2)
                                        <div class="col-lg-6">
                                            <figure>
                                                <img style="height: 30vh;object-fit:cover;width: 100%"
                                                    src="{{ asset('images/' . $category_image->image) }}"
                                                    class="img-fluid img" alt="">
                                            </figure>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="row d-flex flex-column  align-items-center">
                        <div class="col-lg-6 m-0 p-0" style="width: 100%">
                            <div class="row m-0 p-0" style="width: 100%">
                                @foreach ($category->category_images as $index => $category_image)
                                    @if ($index >= 3 && $index <= 4)
                                        <div class="col-lg-6">
                                            <figure>
                                                <img style="height: 30vh;object-fit:cover;width: 100%"
                                                    src="{{ asset('images/' . $category_image->image) }}"
                                                    class="img-fluid img" alt="">
                                            </figure>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        @foreach ($category->category_images as $index => $category_image)
                            @if ($index >= 5 && $index <= 5)
                                <div class="col-lg-6" style="width: 100%">
                                    <figure>
                                        <img style="height: 70vh;width: 100%;object-fit:cover"
                                            src="{{ asset('images/' . $category_image->image) }}"
                                            class="img-fluid img" alt="">
                                    </figure>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
@elseif ($category_description->categorie_id === 22)
    <section class="container-fluid m-0 p-0  py-5  education-imgae mt-5" style="background-color: #800000">
        <div class="container">
            <div class="row">
                @foreach ($category->category_images as $index => $category_image)
                    @if ($index >= 0 && $index <= 3)
                        <div class="col-lg-3">
                            <figure>
                                <img src="{{ asset('images/' . $category_image->image) }}" class="img-fluid img"
                                    alt="" style="width: 100%;height: 30vh;object-fit:cover">
                            </figure>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="row py-2">
                @foreach ($category->category_images as $index => $category_image)
                    @if ($index === 4)
                        <div class="col-lg-6">
                            <figure>
                                <img src="{{ asset('images/' . $category_image->image) }}" class="img-fluid img"
                                    alt="" style="width: 100%;height: 61.6vh;object-fit:cover">
                            </figure>
                        </div>
                    @elseif ($index === 5)
                        <div class="col-lg-6">
                            <div class="row">
                                @foreach ($category->category_images as $index => $category_image)
                                    @if ($index >= 5 && $index <= 8)
                                        <div class="col-lg-6">
                                            <figure>
                                                <img src="{{ asset('images/' . $category_image->image) }}"
                                                    class="img-fluid img" alt=""
                                                    style="width: 100%;height: 30vh;object-fit:cover">
                                            </figure>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@elseif ($category_description->categorie_id === 25)
    <section class="container-fluid py-5" style="width: 100%;background-color: #800000">
        <div class="container ">
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="row d-flex flex-column  align-items-center">
                        @foreach ($category->category_images as $index => $category_image)
                            @if ($index >= 0 && $index <= 0)
                                <div class="col-lg-6" style="width: 100%">
                                    <figure>
                                        <img style="height: 70vh;width: 100%;object-fit:cover"
                                            src="{{ asset('images/' . $category_image->image) }}"
                                            class="img-fluid img" alt="">
                                    </figure>
                                </div>
                            @endif
                        @endforeach
                        <div class="col-lg-6 m-0 p-0" style="width: 100%">
                            <div class="row m-0 p-0" style="width: 100%">
                                @foreach ($category->category_images as $index => $category_image)
                                    @if ($index >= 1 && $index <= 2)
                                        <div class="col-lg-6">
                                            <figure>
                                                <img style="height: 30vh;object-fit:cover;width: 100%"
                                                    src="{{ asset('images/' . $category_image->image) }}"
                                                    class="img-fluid img" alt="">
                                            </figure>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="row d-flex flex-column  align-items-center">
                        <div class="col-lg-6 m-0 p-0" style="width: 100%">
                            <div class="row m-0 p-0" style="width: 100%">
                                @foreach ($category->category_images as $index => $category_image)
                                    @if ($index >= 3 && $index <= 4)
                                        <div class="col-lg-6">
                                            <figure>
                                                <img style="height: 30vh;object-fit:cover;width: 100%"
                                                    src="{{ asset('images/' . $category_image->image) }}"
                                                    class="img-fluid img" alt="">
                                            </figure>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        @foreach ($category->category_images as $index => $category_image)
                            @if ($index >= 5 && $index <= 5)
                                <div class="col-lg-6" style="width: 100%">
                                    <figure>
                                        <img style="height: 70vh;width: 100%;object-fit:cover"
                                            src="{{ asset('images/' . $category_image->image) }}"
                                            class="img-fluid img" alt="">
                                    </figure>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                @foreach ($category->category_images as $index => $category_image)
                    @if ($index >= 6 && $index <= 9)
                        <div class="col-lg-3">
                            <figure>
                                <img style="width: 100%;height: 30vh;object-fit:cover"
                                    src="{{ asset('images/' . $category_image->image) }}" class="img-fluid img"
                                    alt="">
                            </figure>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@elseif ($category_description->categorie_id === 27)
    <section class="container-fluid m-0 p-0 p-2 py-2 " style="background-color: #800000">
        <div class="container  mt-5  position-relative d-flex flex-column align-items-center justify-content-center ">
            <div class="row " style="width: 100%">
                @foreach ($category->category_images as $index => $category_image)
                    @if ($index === 0)
                        <div class="col-lg-6 ">
                            <div class="row">
                                @foreach ($category->category_images as $index => $category_image)
                                    @if ($index >= 0 && $index <= 3)
                                        <div class="col-lg-6 ">
                                            <figure>
                                                <img src="{{ asset('images/' . $category_image->image) }}"
                                                    class="img-fluid img" alt=""
                                                    style="width: 100%;height: 30vh;object-fit:cover">
                                            </figure>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @elseif ($index === 4)
                        <div class="col-lg-6">
                            <figure>
                                <img src="{{ asset('images/' . $category_image->image) }}" class="img-fluid img"
                                    alt="" style="width: 100%;height: 60vh;object-fit:cover">
                            </figure>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="row " style="width: 100%">
                @foreach ($category->category_images as $index => $category_image)
                    @if ($index >= 5 && $index <= 8)
                        <div class="col-lg-3 ">
                            <figure>
                                <img src="{{ asset('images/' . $category_image->image) }}" alt=""
                                    class="img-fluid img" style="width: 100%;height: 30vh;object-fit:cover">
                            </figure>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@elseif ($category_description->categorie_id === 28)
@endif
