<section class="container-fluid m-0 p-0 content-education">
    {{-- <h2>{{ $category->name }}</h2> --}}
    @if ($category->id === 26 && $category->id === 28)
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 " style="margin-top: 25vh;font-family: sans-serif">
                    <ul class="d-flex  ps-3  gap-2">
                        <li><a href="" class="text-black">Home</a></li>
                        <li style="color: red">/</li>
                        <li>{{ $category->name }}</li>
                    </ul>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row ">
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
        @elseif ($category->id !== 26 && $category->id !== 28)
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 " style="margin-top: 25vh;font-family: sans-serif">
                        <ul class="d-flex  ps-3  gap-2">
                            <li><a href="" class="text-black">Home</a></li>
                            <li style="color: red">/</li>
                            <li>{{ $category->name }}</li>
                        </ul>
                    </div>
                </div>

                <div class="container mt-5">
                    <div class="row ">
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
    @endif

    {{-- @foreach ($category->category_paths as $index => $category_description)
            @if ($category_description->$categorie === 26)
                <div class="container mt-5">
                    <div class="row ">
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
                                <img src="{{ asset('images/' . $category->image) }}"
                                    class="img-fluid" style="width: 70vh; height: 50vh;">
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach --}}
    </div>


    @foreach ($category->category_paths as $index => $category_description)
        @if ($category_description->categorie_id === 21)
            <div class="container-fluid m-0 p-0 pb-5 "
                style="border-top: 1px solid rgb(82, 78, 78);position: relative;">
                <div class="container">
                    <div class="row ">
                        <h2 class="title-all-category pt-5">
                            <span class="pt-5">
                                {{ $category_description->title }}
                            </span>
                        </h2>

                        <div class="row  mt-2">
                            <div class="col-lg-6   align-items-center ">
                                <h5>
                                    {{ $category_description->description }}
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
                        @if ($index === 0)
                            <div class="row mt-5 ms-0" style="width: 30vh">
                                <div class="education-shcool p-3 d-flex align-items-center justify-content-center">
                                    <h5>Explore Departments</h5>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            </div>
        @endif
    @endforeach
    @foreach ($category->category_paths as $index => $category_description)
        @if ($category_description->categorie_id === 22)
            <div class="container-fluid m-0 p-0 pb-5 "
                style="border-top: 1px solid rgb(82, 78, 78);position: relative;">
                <div class="container">
                    <div class="row ">
                        <h2 class="title-all-category pt-5">
                            <span class="pt-5">
                                {{ $category_description->title }}
                            </span>
                        </h2>
                        <div class="row  mt-2">
                            <div class="col-lg-6   align-items-center ">
                                <h5>
                                    {{ $category_description->description }}
                                </h5>
                                <div class="row py-5" style="width: 40vh">
                                    <div class=" d-flex align-items-center justify-content-center">
                                        <button style="width: 50vh;" class="p-3 education-shcool ">View Centers, Labs &
                                            Programs</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ed-img d-flex align-items-center justify-content-center mt-5">
                                    <img src="{{ asset('images/' . $category_description->image) }}"
                                        alt="Education Image" class="img-fluid figure-img"
                                        style="width: 60vh;height: 40vh;">
                                </div>
                                <p>{{ $category_description->image_description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        @endif
    @endforeach
    @foreach ($category->category_paths as $index => $category_description)
        @if ($category_description->categorie_id === 23)
            <div class="container-fluid m-0 p-0 pb-5 "
                style="border-top: 1px solid rgb(82, 78, 78);position: relative;">
                <div class="container">
                    <div class="row ">
                        <h2 class="title-all-category pt-5">
                            <span class="pt-5">
                                {{ $category_description->title }}
                            </span>
                        </h2>
                        <div class="row  mt-2">
                            <div class="col-lg-6   align-items-center ">
                                <h5>
                                    {{ $category_description->description }}
                                </h5>
                            </div>
                            <div class="col-lg-6">
                                @if ($category_description->id === 11)
                                    <ul class="education-ul">
                                        <h4>Top Resources</h4>
                                        <li><span>01.</span><a href=""> MIT Office of Innovation Resource
                                                Guide</a></li>
                                        <li><span>02.</span><a href=""> MIT InnovationHQ</a></li>
                                        <li><span>03.</span><a href=""> Martin Trust Center for MIT
                                                Entrepreneurship</a>
                                        </li>
                                        <li><span>04.</span><a href=""> MIT Sandbox Innovation Fund Program</a>
                                        </li>
                                        <li><span>05.</span><a href=""> Deshpande Center for Technological
                                                Innovationn</a></li>
                                        <li><span>06.</span><a href=""> D-Lab</a></li>
                                        <li><span>07.</span><a href=""> The Engine</a></li>
                                        <li><span>08.</span><a href=""> Solve</a></li>
                                        <li><span>09.</span><a href=""> Technology Licensing Office</a></li>
                                        <li><span>010.</span><a href="">Venture Mentoring Service</a></li>
                                    </ul>
                                @elseif ($category_description->id != 11)
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
    @endforeach

    @foreach ($category->category_paths as $index => $category_description)
        @if ($category_description->categorie_id === 24)
            <div class="container-fluid m-0 p-0 pb-5 "
                style="border-top: 1px solid rgb(82, 78, 78);position: relative;">
                <div class="container">
                    <div class="row ">
                        <h2 class="title-all-category pt-5">
                            <span class="pt-5">
                                {{ $category_description->title }}
                            </span>
                        </h2>
                        <div class="row mt-2">
                            <div class="col-lg-6  align-items-center ">
                                <h5>
                                    {{ $category_description->description }}
                                </h5>
                            </div>
                            <div class="col-lg-6">
                                <ul class="education-ul">
                                    <h4>Top Resources</h4>
                                    @if ($category_description->id === 13)
                                        <li><span>01.</span><a href=""> Undergraduate Admissions</a></li>
                                        <li><span>02.</span><a href=""> Undergraduate Financial Aid</a></li>
                                        <li><span>03.</span><a href=""> First-Year Class Profile (2027)</a></li>
                                        <li><span>04.</span><a href=""> Undergraduate Student Blogs</a></li>
                                    @elseif ($category_description->id === 14)
                                        <li><span>01.</span><a href=""> Graduate Admissions</a></li>
                                        <li><span>02.</span><a href=""> Graduate Financial Aid</a></li>
                                        <li><span>03.</span><a href=""> Graduate Student Blogs</a></li>
                                    @elseif ($category_description->id === 15)
                                        <li><span>01.</span><a href=""> MIT Professional Education</a></li>
                                        <li><span>02.</span><a href=""> MIT Sloan School of Management Executive
                                                Education</a></li>
                                        <li><span>03.</span><a href=""> MIT xPRO</a></li>
                                        <li><span>04.</span><a href=""> MITx MicroMasters</a></li>
                                        <li><span>04.</span><a href=""> MIT Bootcamps</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
    @foreach ($category->category_paths as $index => $category_description)
        @if ($category_description->categorie_id === 25)
            <div class="container-fluid m-0 p-0 pb-5 "
                style="border-top: 1px solid rgb(82, 78, 78);position: relative;">
                <div class="container">
                    <div class="row ">
                        <h2 class="title-all-category pt-5">
                            <span class="pt-5">
                                {{ $category_description->title }}
                            </span>
                        </h2>
                        <div class="row">
                            <div class="col-lg-6  ">
                                <h5>
                                    {{ $category_description->description }}
                                </h5>
                                <div class="campuslife-menu mt-4">
                                    <ul class="education-ul">
                                        <h4>Top Resources</h4>
                                        @if ($category_description->id === 16)
                                            <li><span>01.</span><a href=""> Division of Student Life</a></li>
                                            <li><span>02.</span><a href=""> Diversity & Inclusion</a></li>
                                            <li><span>03.</span><a href=""> Student Activities</a></li>
                                            <li><span>04.</span><a href=""> Support for Undergraduate
                                                    Students</a></li>
                                            <li><span>05.</span><a href=""> Support for Graduate Students &
                                                    Families</a>
                                            </li>
                                        @elseif ($category_description->id === 17)
                                            <li><span>01.</span><a href=""> MIT Dining</a></li>
                                            <li><span>02.</span><a href=""> Undergraduate Housing</a></li>
                                            <li><span>03.</span><a href=""> Graduate Student & Family
                                                    Housing</a></li>
                                            <li><span>04.</span><a href=""> Off-Campus Housing</a></li>
                                            <li><span>05.</span><a href=""> Residential Education</a></li>
                                        @elseif ($category_description->id === 18)
                                            <li><span>01.</span><a href=""> Varsity Athletics</a></li>
                                            <li><span>02.</span><a href=""> Physical Education</a></li>
                                            <li><span>03.</span><a href=""> Recreation</a></li>
                                            <li><span>04.</span><a href=""> Club Sports</a></li>
                                            <li><span>05.</span><a href=""> Intramurals</a></li>
                                        @elseif ($category_description->id === 19)
                                            <li><span>01.</span><a href=""> Arts at MIT</a></li>
                                            <li><span>02.</span><a href=""> Academics</a></li>
                                            <li><span>03.</span><a href=""> Events & Visit</a></li>
                                            <li><span>04.</span><a href=""> Exhibitions & Galleries</a></li>
                                            <li><span>05.</span><a href=""> List Visual Arts Center</a></li>
                                            <li><span>06.</span><a href=""> Public Art Map</a></li>
                                        @elseif ($category_description->id === 20)
                                            <li><span>01.</span><a href=""> Institute Community and Equity
                                                    Office</a>
                                            </li>
                                            <li><span>02.</span><a href=""> Office of Minority Education</a>
                                            </li>
                                            <li><span>03.</span><a href=""> Graduate Student Diversity
                                                    Initiatives</a>
                                            </li>
                                            <li><span>04.</span><a href=""> Social Justice Programming &
                                                    Cross-Cultural
                                                    Engagement</a></li>
                                            <li><span>05.</span><a href=""> Religious, Spiritual & Ethical
                                                    Life</a></li>
                                        @elseif ($category_description->id === 21)
                                            <li><span>01.</span><a href=""> Wellbeing Lab</a></li>
                                            <li><span>02.</span><a href=""> Community Wellness at MIT Health</a>
                                            </li>
                                            <li><span>03.</span><a href=""> Student Mental Health and Counseling
                                                    Services</a></li>
                                            <li><span>04.</span><a href=""> MindHandHeart</a></li>
                                            <li><span>05.</span><a href=""> Stress Reduction, Mindfulness &
                                                    Relaxation</a></li>
                                            <li><span>06.</span><a href=""> Urgent Care</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6  ">
                                <div class="img3  d-flex flex-column align-items-center justify-content-end">
                                    <img src="{{ asset('images/' . $category_description->image) }}"
                                        alt="Education Image" class="img-fluid figure-img" style="width: 70%">
                                    <p class="mt-3">{{ $category_description->image_description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</section>
@if ($category->id === 26)
    <div style="height: 10vh">
        <h1>MengHong-News</h1>
    </div>
    <div class="container-fluid">
        <section style="width: 100%; margin: 0;padding: 0;background-color: rgb(236, 236, 236)">
            <div class="container">
                <div class="row d-flex align-items-end justify-content-center">
                    <div class="col-lg-5   d-flex flex-column align-items-center justify-content-center">
                        <h1 style="font-size: 3rem;font-family: sans-serif;font-weight: bold">MIT News</h1>
                        <p>ON CAMPUS AND AROUND THE WORD</p>
                    </div>
                    <div class="col-lg-7 d-flex ">
                        <div class="row d-flex alig-items-center justify-conetn-center " style="width: 100%">
                            <div class="col-lg-4  d-flex align-items-center justify-content-end gap-2">
                                <i class="fa-regular fa-envelope"></i>
                                <h4 style="border-bottom: 3px solid red;cursor: pointer;">SUBSCRIBE</h4>
                            </div>
                            <div class="col-lg-8 d-flex align-items-center justify-content-start gap-2 ">
                                <div class="row">
                                    <div class="col-xl-4 d-flex">
                                        <button
                                            style="border: 1px solid rgb(136, 136, 136); border-top: 3px solid black"
                                            class="p-3 pe-4 ps-4 d-flex align-items-center gap-2"> <i
                                                class="fa-solid fa-down-long"></i>BROWSE
                                        </button>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="search-news d-flex align-items-center justify-content-start">
                                            <input
                                                style="border: 1px solid rgb(136, 136, 136); border-top: 3px solid black"
                                                class=" p-3  ps-4" type="text" name="search" id=""
                                                placeholder="SEARCH NEWS">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid d-flex align-items-center justify-content-center m-0 p-0"
            style="background-color: rgb(223, 223, 223);min-height: 4vh">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12  d-flex align-items-center justify-content-start">
                        <i style="font-size: 1.3rem ;margin-left: -4vh"class="fa-solid fa-bicycle"></i>
                        <h4 style="font-size: 1.1rem;" class="m-0 p-0">Want a dose of MIT in your inbox?</h4>
                        <h4 style="border-bottom: 2px solid red ; cursor: pointer;font-size: 1.1rem" class="m-0 p-0">
                            Subscribe to the MIT Daily
                            and/or MIT Weekly newsletters.</h4>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid"
            style="width: 100%; margin: 0;padding: 0;min-height: 72.7vh;background-color: rgba(224, 224, 224, 0.397)">
            <div class="container-fluid">
                <div class="row d-flex align-items-center justify-content-center " style="min-height: 72.7vh">
                    <section class="container-fluid"
                        style="width: 100%; margin: 0;padding: 0;min-height: 72.7vh;background-color: rgba(224, 224, 224, 0.397)">
                        <div>
                            <div class="row px-5 d-flex align-items-center justify-content-center "
                                style="min-height: 72.7vh">
                                @if ($category->id === 26)
                                    ​
                                    <div class="col-lg-6 d-flex align-items-center justify-content-start ">
                                        <img src="{{ asset('images/' . $category->image) }}"
                                            alt="information_new Image" class="figure-img img-fluid "
                                            style="width: 100%;height: 100%;">
                                    </div>
                                    <div
                                        class="col-lg-6 d-flex flex-column align-items-start justify-content-center h-100 text-white ">
                                        <h1 class="news-hover-h4 text-dark">
                                            {{ $category->title }}
                                        </h1>
                                        <h3 class="text-dark">
                                            {{ $category->description }}
                                        </h3>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>​
        <section class="container " style="width: 90%;">
            <div class="row d-flex align-items-center justify-content-start " style="width: 100%">
                @foreach ($category->category_paths as $index => $category_description)
                    @if ($category_description->id >= 22 && $category_description->id <= 25)
                        ​
                        <div class="col-lg-6">
                            <div class="d-flex gap-4 mt-4">
                                <div class="image-news" style="width: 100%;height: 100%;">
                                    <img src="{{ asset('images/' . $category_description->image) }}"
                                        alt="information_new Image" class="figure-img img-fluid "
                                        style="width: 100%;height: 25vh;">
                                </div>
                                <div class="new-menu d-flex flex-column w-100 ">
                                    <h5 class="news-hover-h4">
                                        {{ $category_description->title }}
                                    </h5>
                                    <p>{{ $category_description->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="col-lg-6 d-flex flex-column align-items-start justify-content-start text-dark h-100">
                    <div class="content-news-1 mt-2">
                        <h4 style=" font-family: sans-serif;font-weight: bold;">The Boston Globe</h4>
                        <p>Graduate student Lt. Col. Jill Rahon, a war veteran and seasoned pilot, discusses her journey
                            fromher tours in Afghanistan to her research at MIT on engineering solutions for
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
                        <p>MIT researchers have found that a textured surface, designed like a shark riblet, can improve
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
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row  d-flex">
                    <div class="col-lg-12 d-flex">
                        <h4>Looking for audio? </h4>
                        <div class="content-qwesion">
                            <h4 style="border-bottom: 1px solid red">Listen to the MIT News podcast →</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container " style="width: 90%;">
            <div class="row d-flex align-items-center justify-content-start " style="width: 100%">
                @foreach ($category->category_paths as $index => $category_description)
                    @if ($category_description->id >= 26 && $category_description->id <= 33)
                        ​
                        <div class="col-lg-6">
                            <div class="d-flex gap-4 mt-4">
                                <div class="image-news" style="width: 100%;height: 100%;">
                                    <img src="{{ asset('images/' . $category_description->image) }}"
                                        alt="information_new Image" class="figure-img img-fluid "
                                        style="width: 100%;height: 25vh;">
                                </div>
                                <div class="new-menu d-flex flex-column w-100 ">
                                    <h5 class="news-hover-h4">
                                        {{ $category_description->title }}
                                    </h5>
                                    <p>{{ $category_description->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row  d-flex">
                    <div class="col-lg-12 d-flex">
                        <div class="content-qwesion">
                            <h4 style="border-bottom: 1px solid red">More MIT News articles </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row  d-flex">
                    <div class="col-lg-12 d-flex">
                        <div class="content-qwesion">
                            <h4 style="border-bottom: 1px solid red">More MIT News articles </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container " style="width: 90%;">
            <div class="row d-flex align-items-center justify-content-start " style="width: 100%">
                @foreach ($category->category_paths as $index => $category_description)
                    @if ($category_description->id >= 34 && $category_description->id <= 39)
                        ​
                        <div class="col-lg-6">
                            <div class="d-flex gap-4 mt-4">
                                <div class="image-news" style="width: 100%;height: 100%;">
                                    <img src="{{ asset('images/' . $category_description->image) }}"
                                        alt="information_new Image" class="figure-img img-fluid "
                                        style="width: 100%;height: 25vh;">
                                </div>
                                <div class="new-menu d-flex flex-column w-100 ">
                                    <h5 class="news-hover-h4">
                                        {{ $category_description->title }}
                                    </h5>
                                    <p>{{ $category_description->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row  d-flex">
                    <div class="col-lg-12 d-flex">
                        <div class="content-qwesion">
                            <h4 style="border-bottom: 1px solid red">View more videos on MIT's YouTube channel →</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container" style="width: 90%;">
            <div class="row d-flex align-items-center justify-content-start " style="width: 100%">
                @foreach ($category->category_paths as $index => $category_description)
                    @if ($category_description->id >= 40 && $category_description->id <= 47)
                        ​
                        <div class="col-lg-6">
                            <div class="d-flex gap-4 mt-4">
                                <div class="image-news" style="width: 100%;height: 100%;">
                                    <img src="{{ asset('images/' . $category_description->image) }}"
                                        alt="information_new Image" class="figure-img img-fluid "
                                        style="width: 100%;height: 25vh;">
                                </div>
                                <div class="new-menu d-flex flex-column w-100 ">
                                    <h5 class="news-hover-h4">
                                        {{ $category_description->title }}
                                    </h5>
                                    <p>{{ $category_description->description }}</p>
                                </div>
                            </div>
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
                        <h1 style="font-size: 4rem;font-family: sans-serif;font-weight: bold">MIT News</h1>
                        <p>ON CAMPUS AND AROUND THE WORLD</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center justify-content-between  m-0 p-0" style="width: 100%">
                <div class="col-lg-6 d-flex flex-column align-items-start justify-content-start">
                    <p class="text-dark" style="font-size: 1.2rem">This website is managed by the MIT News Office,
                        part of the <span style="border-bottom: 1px solid red"> Institute Office of
                            Communications.</span></p>
                    <h5 style="font-size: 1.3rem">News by Schools/College:</h5>
                    <ul class="new-ul">
                        <li>01.<a href="">School of Architecture and Planning</a></li>
                        <li>02.<a href="">School of Engineering</a></li>
                        <li>03.<a href="">School of Humanities,Arts,and Social Sciences</a></li>
                        <li>04.<a href="">MIT Sloand School of Management</a></li>
                        <li>05.<a href="">School of Science</a></li>
                        <li>06.<a href="">MIT Schwarzman College of Computing</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 d-flex flex-column align-items-end justify-content-end">
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
                    <ul class="d-flex new-ul  aling-items-center justify-content-between w-100">
                        <li><a href="">About the MIT News Office</a></li>
                        <li><a href="">MIT News Press Center</a></li>
                        <li><a href="">Terms of Use</a></li>
                    </ul>
                    <ul class="d-flex new-ul  aling-items-center justify-content-between w-100">
                        <li><a href="">Press Inquiries</a></li>
                        <li><a href="">Filming Guidelines</a></li>
                        <li><a href="">RSS Feeds</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
@endif
@foreach ($category->category_paths as $index => $category_description)
    @if ($category_description->categorie_id === 27)
        <div class="container-fluid m-0 p-0 pb-5 " style="border-top: 1px solid rgb(82, 78, 78);position: relative;">
            <div class="container">
                <div class="row ">
                    <h2 class="title-all-category pt-5">
                        <span class="pt-5">
                            {{ $category_description->title }}
                        </span>
                    </h2>
                    <div class="row">
                        <div class="col-lg-6  ">
                            <h5>
                                {{ $category_description->description }}
                            </h5>
                            <div class="campuslife-menu mt-4">
                                <ul class="education-ul">
                                    <h4>Top Resources</h4>
                                    @if ($category_description->id === 44)
                                        <li><span>01.</span><a href=""> MIT Alumni Association</a></li>
                                        <li><span>02.</span><a href=""> Alumni Directory</a></li>
                                        <li><span>03.</span><a href=""> Alumni Career Resources</a></li>
                                        <li><span>04.</span><a href=""> Lifelong Learning</a></li>
                                        <li><span>05.</span><a href=""> Give to MIT</a>
                                        </li>
                                    @elseif ($category_description->id === 45)
                                        <li><span>01.</span><a href=""> Slice of MIT Blog</a></li>
                                        <li><span>02.</span><a href=""> MIT News Office</a></li>
                                        <li><span>03.</span><a href=""> MIT News in Technology Review</a></li>
                                        <li><span>04.</span><a href=""> Spectrum</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6  ">
                            <div class="img3  d-flex flex-column align-items-center justify-content-end">
                                <img src="{{ asset('images/' . $category_description->image) }}"
                                    alt="Education Image" class="img-fluid figure-img" style="width: 70%">
                                <p class="mt-3">{{ $category_description->image_description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach

@if ($category_description->categorie_id === 28)
    <div class="container-fluid">
        <div class="container "
            style="border-top: 1px solid rgb(82, 78, 78);min-height: 50vh;margin-top: 5rem;margin-bottom: 5rem">
            <div class="col-md-12  col-lg-12 " style="margin-top: 25vh;font-family: sans-serif">
                <ul class="d-flex  ps-3   gap-2">
                    <li><a href="" class="text-black">Home</a></li>
                    <li style="color: red">/</li>
                    <li>{{ $category->name }}</li>
                </ul>
                <h2>
                    {{ $category->title }}
                </h2>
            </div>
            @foreach ($category->category_paths as $index => $category_description)
                <h3 class="mt-4 archive"><span>{{ $category_description->title }}</span></h3>
                <div class="row">
                    <div class="col-lg-6  mt-4">
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
    <section class="container-fluid m-0 p-0 p-5 py-5  education-imgae mt-5  " style="background-color: #800000">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <figure>
                                <img style="min-height: 50vh;object-fit:cover"
                                    src="{{ url('images/imgeducation1.jpg') }}" class="img-fluid img"
                                    alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <figure>
                                <img style="min-height: 25vh;object-fit:cover"
                                    src="{{ url('images/imgeducation2.jpeg') }}" class="img-fluid img"
                                    alt="">
                            </figure>
                        </div>
                        <div class="col-lg-6">
                            <figure>
                                <img style="min-height: 25vh;object-fit:cover"
                                    src="{{ url('images/imgeducation-3.jpg') }}" class="img-fluid img"
                                    alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6">
                            <figure>
                                <img style="min-height: 25vh;object-fit:cover"
                                    src="{{ url('images/imgeduaction.jpg') }}" class="img-fluid img" alt="">
                            </figure>
                        </div>
                        <div class="col-lg-6">
                            <figure>
                                <img style="min-height: 25vh;object-fit:cover"
                                    src="{{ url('images/imgeducation.jpg') }}" class="img-fluid img" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <img style="min-height: 50vh;object-fit:cover"
                                src="{{ url('images/imgeducation6.jpg') }}" class="img-fluid img" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@elseif ($category_description->categorie_id === 22)
    <section class="container-fluid m-0 p-0 p-5 py-5  education-imgae mt-5  " style="background-color: #800000">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <figure>
                        <img src="{{ url('images/research1.jpg') }}" class="img-fluid img" alt=""
                            style="width: 100%;height: 30vh;object-fit:cover">
                    </figure>
                </div>
                <div class="col-lg-3">
                    <figure>
                        <img src="{{ url('images/research2.jpg') }}" class="img-fluid img" alt=""
                            style="width: 100%;height: 30vh;object-fit:cover">
                    </figure>
                </div>
                <div class="col-lg-3">
                    <figure>
                        <img src="{{ url('images/research3.jpeg') }}" class="img-fluid img" alt=""
                            style="width: 100%;height: 30vh;object-fit:cover">
                    </figure>
                </div>
                <div class="col-lg-3">
                    <figure>
                        <img src="{{ url('images/research4..jpeg') }}" class="img-fluid img" alt=""
                            style="width: 100%;height: 30vh;object-fit:cover">
                    </figure>
                </div>
            </div>
            <div class="row py-2">
                <div class="col-lg-6">
                    <figure>
                        <img src="{{ url('images/research5.jpeg') }}" class="img-fluid img" alt=""
                            style="width: 100%;height: 61.6vh;object-fit:cover">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6">
                            <figure>
                                <img src="{{ url('images/research6.jpeg') }}" class="img-fluid img" alt=""
                                    style="width: 100%;height: 30vh;object-fit:cover">
                            </figure>
                        </div>
                        <div class="col-lg-6">
                            <figure>
                                <img src="{{ url('images/research7.jpeg') }}" class="img-fluid img" alt=""
                                    style="width: 100%;height: 30vh;object-fit:cover">
                            </figure>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 ">
                            <figure>
                                <img src="{{ url('images/research8.jpeg') }}" class="img-fluid img" alt=""
                                    style="width: 100%;height: 30vh;object-fit:cover">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@elseif ($category_description->categorie_id === 25)
    <section class="container-fluid  py-5" style="width: 100%;background-color: #800000">
        <div class="container ">
            <div class="row m-0 p-0 ">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <figure>
                                <img style="height: 50vh;object-fit:cover" src="{{ url('images/CampusLife1.jpeg') }}"
                                    class="img-fluid img" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <figure>
                                <img style="width: 100%;height: 30vh;object-fit:cover"
                                    src="{{ url('images/CampusLife2.jpeg') }}" class="img-fluid img" alt="">
                            </figure>
                        </div>
                        <div class="col-lg-6">
                            <figure>
                                <img style="width: 100%;height: 30vh;object-fit:cover"
                                    src="{{ url('images/CampusLife3.jpeg') }}" class="img-fluid img" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6">
                            <figure>
                                <img style="width: 100%;height: 30vh;object-fit:cover"
                                    src="{{ url('images/CampusLife4.jpeg') }}" class="img-fluid img" alt="">
                            </figure>
                        </div>
                        <div class="col-lg-6">
                            <figure>
                                <img style="width: 100%;height: 30vh;object-fit:cover"
                                    src="{{ url('images/CampusLife5.jpeg') }}" class="img-fluid img" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <img style="height: 50vh;object-fit:cover" src="{{ url('images/CampusLife6.jpeg') }}"
                                class="img-fluid img" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-3">
                    <figure>
                        <img style="width: 100%;height: 30vh;object-fit:cover"
                            src="{{ url('images/CampusLife7.jpeg') }}" class="img-fluid img" alt="">
                    </figure>
                </div>
                <div class="col-lg-3">
                    <figure>
                        <img style="width: 100%;height: 30vh;object-fit:cover"
                            src="{{ url('images/CampusLife8.jpeg..jpg') }}" class="img-fluid img" alt="">
                    </figure>
                </div>
                <div class="col-lg-3">
                    <figure>
                        <img style="width: 100%;height: 30vh;object-fit:cover"
                            src="{{ url('images/CampusLife9.jpeg..jpg') }}" class="img-fluid img" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>
@elseif ($category_description->categorie_id === 27)
    <section class="container-fluid m-0 p-0 p-2 py-2 " style="background-color: #800000">
        <div class="container  mt-5  position-relative d-flex flex-column align-items-center justify-content-center ">
            <div class="row ">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6">
                            <figure>
                                <img src="{{ url('images/Alumni4.jpeg') }}" alt="" class="img-fluid img"
                                    style="width: 100%;height: 25vh;object-fit:cover">
                            </figure>
                        </div>
                        <div class="col-lg-6">
                            <figure>
                                <img src="{{ url('images/Alumni5.jpeg') }}" alt="" class="img-fluid img"
                                    style="width: 100%;height: 25vh;object-fit:cover">
                            </figure>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-6">
                            <figure>
                                <img src="{{ url('images/Alumni7.jpeg') }}" alt="" class="img-fluid img"
                                    style="width: 100%;height: 25vh;object-fit:cover">
                            </figure>
                        </div>
                        <div class="col-lg-6">
                            <figure>
                                <img src="{{ url('images/Alumni8.jpeg') }}" alt="" class="img-fluid img"
                                    style="width: 100%;height: 25vh;object-fit:cover">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <figure>
                        <img src="{{ url('images/Alumni6.jpeg') }}" alt="" class="img-fluid img"
                            style="width: 100%;height: 51.8vh;object-fit:cover">
                    </figure>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-3">
                    <figure>
                        <img src="{{ url('images/Alumni9.jpeg') }}" alt="" class="img-fluid img"
                            style="width: 100%;height: 28.8vh;;object-fit:cover">
                    </figure>

                </div>
                <div class="col-lg-3">
                    <figure>
                        <img src="{{ url('images/Alumni10.jpeg') }}" alt="" class="img-fluid img"
                            style="width: 100%;height: 28.8vh;;object-fit:cover">
                    </figure>

                </div>
                <div class="col-lg-3">
                    <figure>
                        <img src="{{ url('images/Alumni11.jpeg') }}" alt="" class="img-fluid img"
                            style="width: 100%;height: 28.8vh;object-fit:cover">
                    </figure>

                </div>
                <div class="col-lg-3">
                    <figure>
                        <img src="{{ url('images/Alumni12.jpeg') }}" alt="" class="img-fluid img"
                            style="width: 100%;height: 28.8vh;;object-fit:cover">
                    </figure>

                </div>
            </div>
        </div>
    </section>
@elseif ($category_description->categorie_id === 28)
@endif
