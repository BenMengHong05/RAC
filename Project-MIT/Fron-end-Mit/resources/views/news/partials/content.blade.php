<section style="height: 12vh">
    <h1>MengHong-News</h1>
</section>
<section class="container-fluid" style="width: 100%; margin: 0;padding: 0;background-color: rgb(236, 236, 236)" >
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
                                <button style="border: 1px solid rgb(136, 136, 136); border-top: 3px solid black"
                                class="p-3 pe-4 ps-4 d-flex align-items-center gap-2"> <i
                                    class="fa-solid fa-down-long"></i>BROWSE
                                </button>
                            </div>
                            <div class="col-xl-6">
                                <div class="search-news d-flex align-items-center justify-content-start">
                                    <input style="border: 1px solid rgb(136, 136, 136); border-top: 3px solid black"
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
<section class="container-fluid d-flex align-items-center justify-content-center m-0 p-0" style="background-color: rgb(223, 223, 223);min-height: 4vh"   >
    <div class="container">
        <div class="row " >
            <div class="col-lg-12  d-flex align-items-center justify-content-start">
                <i style="font-size: 1.3rem ;margin-left: -4vh"class="fa-solid fa-bicycle"></i>
                <h4 style="font-size: 1.1rem;" class="m-0 p-0">Want a dose of MIT in your inbox?</h4>
                <h4 style="border-bottom: 2px solid red ; cursor: pointer;font-size: 1.1rem" class="m-0 p-0">Subscribe to the MIT Daily
                    and/or MIT Weekly newsletters.</h4>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid" style="width: 100%; margin: 0;padding: 0;min-height: 72.7vh;background-color: rgba(224, 224, 224, 0.397)">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center "
            style="min-height: 72.7vh">
            @foreach ($objNewmits as $index => $Newmit)
                @if($index ===0)
                <div class="col-lg-6 d-flex align-items-center justify-content-start ">
                    <img src="{{ asset('images/' . $Newmit->image) }}" alt="information_new Image" class="figure-img img-fluid " style="width: 100%;height: 100%;" >
                </div>
                <div class="col-lg-6 d-flex flex-column align-items-start justify-content-center h-100 text-white ">
                    <h1 class="news-hover-h4 text-dark">
                      {{$Newmit->title}}
                    </h1>
                    <h3 class="text-dark">
                        {{$Newmit->description}}
                    </h3>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
<section class="container " style="width: 90%;">
    <div class="row d-flex align-items-center justify-content-start " style="width: 100%">
        @foreach ($TodaysFeaturedNews as $TodaysFeaturedNew)
            <div class="col-lg-6">
                <div class="d-flex gap-4 mt-4">
                    <div class="image-news" style="width: 100%;height: 100%;">
                        <img src="{{ asset('images/' . $TodaysFeaturedNew->image) }}" alt="information_new Image" class="figure-img img-fluid " style="width: 100%;height: 25vh;" >
                    </div>
                    <div class="new-menu d-flex flex-column w-100 ">
                        <h5 class="news-hover-h4">
                            {{$TodaysFeaturedNew->title}}
                        </h5>
                        <p>{{$TodaysFeaturedNew->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        <div class="col-lg-6 d-flex flex-column align-items-start justify-content-start text-dark h-100">
            <div class="content-news-1 mt-2">
                <h4 style=" font-family: sans-serif;font-weight: bold;">Hoodline</h4>
                <p>Graduate student Lt. Col. Jill Rahon, a war veteran and seasoned pilot, discusses her journey
                    fromher tours in Afghanistan to her research at MIT on engineering solutions for
                    the enforcement ofnuclear nonproliferation accords, writes Sam Cavanaugh for Hoodline.
                    “The path Rahon has blazed is marked by courage and ingenuity, from deftly handling the
                    Chinook helicopter over the treacherous terrains of Afghanistan to controls of a meticulously
                    studying
                    the nuances of resonance analysis to keep nuclear powers in check,” writes Cavanaugh. </p>
            </div>
        </div>
        <div class="col-lg-6 d-flex flex-column align-items-start justify-content-start text-dark h-100">
            <div class="content-news-1 mt-2">
                <h4 style=" font-family: sans-serif;font-weight: bold;">Popular Science</h4>
                <p>MIT researchers have found that a textured surface, designed like a shark riblet, can improve the
                    towed sonar arrays (TSAs) that are "vital for marine vessels engaged in underwater unpredictable
                    security or exploration projects," reports Andrew Paul for Popular Science. “Utilizing and
                    scallopedriblets
                    computational modeling, researchers tested various riblet shapes and patterns interacting with
                    simulated
                    water environments,” explains Paul. “From calm currents to the more commonly flows seen in
                    oceans,
                    the team observed how smooth, triangular, trapezoidal, might affect fluid dynamics and acoustics.”
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
        @foreach ($RecentHighlights as $RecentHighlight)
            <div class="col-lg-6">
                <div class="d-flex gap-4 mt-4">
                    <div class="image-news" style="width: 100%;height: 100%;">
                        <img src="{{ asset('images/' . $RecentHighlight->image) }}" alt="information_new Image" class="figure-img img-fluid " style="width: 100%;height: 25vh;"  >
                    </div>
                    <div class="new-menu d-flex flex-column w-100 ">
                        <h5 class="news-hover-h4">
                            {{$RecentHighlight->title}}
                        </h5>
                        <p>{{$RecentHighlight->description}}</p>
                    </div>
                </div>
            </div>
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
            <div class="container " id="featureContainer" style="margin:150px auto">
                <div class="row mx-auto my-auto  justify-content-center">
                    <div id="featureCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner ps-0 " role="listbox" >
                            <div class="carousel-item active  " >
                                <div class="col-lg-3  " style="border: 2px solid rgb(0, 0, 0);width: 32%;min-height: 60vh;">
                                    <div class="card">
                                        <div class="card-img p-4 ">
                                          <h3 class="title-carousel">Forbes</h3>
                                          <p class="description-carousel">Prof. Benjamin Weiss, director of the MIT Paleomagnetism Lab, speaks with Forbes reporter Bruce Dorminey about the use of paleomagnetism to track the geographic origins of stromatolites. Weiss notes that he and his colleagues published a paper examining the magnetization of stromatolites in the Strelley Pool Chert in Australia’s Pilbara region. The team’s measurements show that these stromatolites formed within 8 degrees latitude of the equator, Weiss explains. </p>
                                          <a href="" class="text-dark "><i class="fa-regular fa-file-lines text-danger"></i> <span class="footer-carousel ">Learn more</span> →</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="col-lg-3 " style="border: 2px solid black;width: 32%;min-height: 60vh;">
                                    <div class="card">
                                        <div class="card-img p-4 ">
                                          <h3 class="title-carousel">Times Higher Education</h3>
                                          <p class="description-carousel">MIT has been named the No. 1 university on the 2025 Global University Employability Rankings, reports Times of Higher Education. “MIT students, faculty members and alumni play key roles in entrepreneurial innovations, including developing advanced computer networks, securing venture capital transactions and advancing biotechnology,” writes Times Higher Education. </p>
                                          <a href="" class="text-dark "><i class="fa-regular fa-file-lines text-danger"></i> <span class="footer-carousel ">Learn more</span> →</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-3 " style="border: 2px solid black;width: 32%;min-height: 60vh;">
                                    <div class="card">
                                        <div class="card-img p-4 ">
                                          <h3 class="title-carousel">Craft in America</h3>
                                          <p class="description-carousel">Craft in America visits Prof. Erik Demaine and Martin Demaine of CSAIL to learn more about their work with computational origami. “Computational origami is quite useful for the mathematical problems we are trying to solve,” Prof. Erik Demaine explains. “We try to integrate the math and the art together.”</p>
                                          <a href="" class="text-dark "><i class="fa-regular fa-file-lines text-danger"></i> <span class="footer-carousel ">Learn more</span> →</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-3 " style="border: 2px solid black;width: 32%;min-height: 60vh;">
                                    <div class="card">
                                        <div class="card-img p-4 ">
                                          <h3 class="title-carousel">Nature</h3>
                                          <p class="description-carousel">Prof. Hugh Herr speaks with Nature reporter Fred Schwaller about his work developing bionic limbs. Schwaller notes that “Herr’s research team is focusing on surgical techniques and implants that improve on the electrodes used in current bionic-limb systems, which either penetrate the peripheral nerves or wrap around them.” Herr explains: “We’re reimagining how limbs should be amputated and bionic limbs constructed.” </p>
                                          <a href="" class="text-dark "><i class="fa-regular fa-file-lines text-danger"></i> <span class="footer-carousel ">Learn more</span> →</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-3 " style="border: 2px solid black;width: 32%;min-height: 60vh;">
                                    <div class="card">
                                        <div class="card-img p-4 ">
                                          <h3 class="title-carousel">TechCrunch</h3>
                                          <p class="description-carousel">Neural Magic, an AI optimization startup co-founded by Prof. Nir Shavit and former Research Scientist Alex Matveev, aims to “process AI workloads on processors and GPUs at speeds equivalent to specialized AI chips,” reports Kyle Wiggers for TechCrunch. “By running models on off-the-shelf processors, which usually have more available memory, the company’s software can realize these performance gains,” explains Wiggers. </p>
                                          <a href="" class="text-dark "><i class="fa-regular fa-file-lines text-danger"></i> <span class="footer-carousel ">Learn more</span> →</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-3 " style="border: 2px solid black;width: 32%;min-height: 60vh;">
                                    <div class="card">
                                        <div class="card-img p-4 ">
                                          <h3 class="title-carousel">New Scientist</h3>
                                          <p class="description-carousel">Researchers at MIT have developed a robot capable of assembling “building blocks called voxels to build an object with almost any shape,” reports Alex Wilkins for New Scientist. “You can get furniture-scale objects really fast in a very sustainable way, because you can reuse these modular components and ask a robot to reassemble them into different large-scale objects,” says graduate student Alexander Htet Kyaw.</p>
                                          <a href="" class="text-dark "><i class="fa-regular fa-file-lines text-danger"></i> <span class="footer-carousel ">Learn more</span> →</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-3 " style="border: 2px solid black;width: 32%;min-height: 60vh;">
                                    <div class="card">
                                        <div class="card-img p-4 ">
                                          <h3 class="title-carousel">Forbes</h3>
                                          <p class="description-carousel">Researchers at MIT have developed a “new type of transistor using semiconductor nanowires made up of gallium antimonide and iridium arsenide,” reports Alex Knapp for Forbes. “The transistors were designed to take advantage of a property called quantum tunneling to move electricity through transistors,” explains Knapp. </p>
                                          <a href="" class="text-dark "><i class="fa-regular fa-file-lines text-danger"></i> <span class="footer-carousel ">Learn more</span> →</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-3 " style="border: 2px solid black;width: 32%;min-height: 60vh;">
                                    <div class="card">
                                        <div class="card-img p-4 ">
                                          <h3 class="title-carousel">Financial Times</h3>
                                          <p class="description-carousel">Financial Times reporter Seb Murray highlights a new paper by Prof. Roberto Rigobon and Research Scientist Florian Berg that explores why different ESG ratings can paint different pictures of the same company, finding that “measurement differences between rating agencies are the main source of divergence.” Murray notes that “by exposing these inconsistencies, the research highlights the need for standardization, noting that regulators could help by harmonizing ESG disclosure practices. That would make ratings more reliable and useful for decision makers.”</p>
                                          <a href="" class="text-dark "><i class="fa-regular fa-file-lines text-danger"></i> <span class="footer-carousel ">Learn more</span> →</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-3 " style="border: 2px solid black;width: 32%;min-height: 60vh;">
                                    <div class="card">
                                        <div class="card-img p-4 ">
                                          <h3 class="title-carousel">TechCrunch</h3>
                                          <p class="description-carousel">Michael Truell '21, Sualeh Asif '22, Arvid Lunnemar '22, and Aman Sanger '22 co-founded Anysphere, an AI startup working on developing Cursor, an AI-powered coding assistant, reports Marina Temkin for TechCrunch.</p>
                                          <a href="" class="text-dark "><i class="fa-regular fa-file-lines text-danger"></i> <span class="footer-carousel ">Learn more</span> →</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="float-end row ps-0 mt-4 d-flex align-items-center justify-content-between w-100" >
                            <div class="d-flex col-lg-10 d-flex align-items-center justify-content-start gap-4 link-carousel">
                                <a href="" class="text-dark"><span class="footer-carousel">Previous news clip Next news clip View all news coverage of MIT in the media</span> →</a><a href="" class="text-dark"><span class="footer-carousel">Press Inquiries </span>→</a>
                            </div>
                            <div class="col-lg-2 d-flex align-items-center justify-content-end">
                                <a class="indicator p-2 px-3" href="#featureCarousel" role="button" data-bs-slide="prev">
                                    <span class="fas fa-chevron-left" aria-hidden="true"></span>
                                </a> &nbsp;&nbsp;
                                <a class="indicator p-2 px-3" href="#featureCarousel" role="button" data-bs-slide="next">
                                    <span class="fas fa-chevron-right" aria-hidden="true"></span>
                                </a>
                            </div>
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
        @foreach ($CommunityUpdates as $CommunityUpdate)
            <div class="col-lg-6">
                <div class="d-flex gap-4 mt-4">
                    <div class="image-news" style="width: 100%;height: 100%;">
                        <img src="{{ asset('images/' . $CommunityUpdate->image) }}" alt="information_new Image" class="figure-img img-fluid " style="width: 100%;height: 25vh;"  >
                    </div>
                    <div class="new-menu d-flex flex-column w-100 ">
                        <h5 class="news-hover-h4">
                            {{$CommunityUpdate->title}}
                        </h5>
                        <p>{{$CommunityUpdate->description}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
<section>
    <div class="container" id="featureContainer" style="margin:150px auto">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="featureCarousel2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner ps-0" role="listbox">
                    <div class="carousel-item active ">
                        <div class="col-lg-3 " style="border: 2px solid rgb(0, 0, 0);width: 32%;min-height: 60vh;">
                            <div class="card">
                                <div class="card-vide p-4 ">
                                    <iframe style="width: 100%;height: 30vh" src="https://www.youtube.com/embed/QtIxTFyn_ZQ?si=xFIZX7AOL_WNXdEY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    <p class="description-carousel">Ariel White is an associate professor of Political Science at MIT where she studies voting and voting rights. In this episode, Ariel speaks with President Kornbluth about what is actually known immediately following an election, the challenges of exit polls, and what efforts work in getting people to vote.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="col-lg-3 " style="border: 2px solid rgb(0, 0, 0);width: 32%;min-height: 60vh;">
                            <div class="card">
                                <div class="card-vide p-4 ">
                                    <iframe style="width: 100%;height: 30vh"  src="https://www.youtube.com/embed/X8bMIocY0IM?si=xn9HJhU37_5qVYPt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    <p class="description-carousel">Ariel White is an associate professor of Political Science at MIT where she studies voting and voting rights. In this episode, Ariel speaks with President Kornbluth about what is actually known immediately following an election, the challenges of exit polls, and what efforts work in getting people to vote.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="col-lg-3 " style="border: 2px solid rgb(0, 0, 0);width: 32%;min-height: 60vh;">
                            <div class="card">
                                <div class="card-vide p-4 ">
                                    <iframe style="width: 100%;height: 30vh" src="https://www.youtube.com/embed/ocjBezrYYqg?si=4uPPEHLLAaSjYt4c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    <p class="description-carousel">Ariel White is an associate professor of Political Science at MIT where she studies voting and voting rights. In this episode, Ariel speaks with President Kornbluth about what is actually known immediately following an election, the challenges of exit polls, and what efforts work in getting people to vote.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="col-lg-3 " style="border: 2px solid rgb(0, 0, 0);width: 32%;min-height: 60vh;">
                            <div class="card">
                                <div class="card-vide p-4 ">
                                    <iframe style="width: 100%;height: 30vh" src="https://www.youtube.com/embed/ach9JLGs2Yc?si=3SceaQpfHPbrjL1G" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    <p class="description-carousel">Ariel White is an associate professor of Political Science at MIT where she studies voting and voting rights. In this episode, Ariel speaks with President Kornbluth about what is actually known immediately following an election, the challenges of exit polls, and what efforts work in getting people to vote.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="col-lg-3 " style="border: 2px solid rgb(0, 0, 0);width: 32%;min-height: 60vh;">
                            <div class="card">
                                <div class="card-vide p-4 ">
                                    <iframe style="width: 100%;height: 30vh" src="https://www.youtube.com/embed/9ewAE3aPVYI?si=HVbTF73I43xr2HNa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    <p class="description-carousel">Ariel White is an associate professor of Political Science at MIT where she studies voting and voting rights. In this episode, Ariel speaks with President Kornbluth about what is actually known immediately following an election, the challenges of exit polls, and what efforts work in getting people to vote.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="float-end row ps-0 mt-4 d-flex align-items-center justify-content-between w-100">
                    <div class="d-flex col-lg-10 d-flex align-items-center justify-content-start gap-4 link-carousel">
                        <a href="" class="text-dark"><span class="footer-carousel">Previous news clip Next news clip View all news coverage of MIT in the media</span> →</a>
                        <a href="" class="text-dark"><span class="footer-carousel">Press Inquiries </span>→</a>
                    </div>
                    <div class="col-lg-2 d-flex align-items-center justify-content-end">
                        <a class="indicator p-2 px-3" href="#featureCarousel2" role="button" data-bs-slide="prev">
                            <span class="fas fa-chevron-left" aria-hidden="true"></span>
                        </a> &nbsp;&nbsp;
                        <a class="indicator p-2 px-3" href="#featureCarousel2" role="button" data-bs-slide="next">
                            <span class="fas fa-chevron-right" aria-hidden="true"></span>
                        </a>
                    </div>
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
                    <h4 style="border-bottom: 1px solid red">View more videos on MIT's YouTube channel →</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container" style="width: 90%;">
    <div class="row d-flex align-items-center justify-content-start " style="width: 100%">
        @foreach ($MoreNews  as $MoreNew)
            <div class="col-lg-6">
                <div class="d-flex gap-4 mt-4">
                    <div class="image-news" style="width: 100%;height: 100%;">
                        <img src="{{ asset('images/' . $MoreNew->image) }}" alt="information_new Image" class="figure-img img-fluid " style="width: 100%;height: 25vh;" >
                    </div>
                    <div class="new-menu d-flex flex-column w-100 ">
                        <h5 class="news-hover-h4">
                            {{$MoreNew->title}}
                        </h5>
                        <p>{{$MoreNew->description}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row mt-5 ">
        <div class="col-lg-12 w-100 d-flex align-items-center justify-content-center " style="min-height: 10vh">
            <div class="news-1">
                <input class="p-4 h5 border border-dark  input-hover"  type="button" value="Load More News">
            </div>
        </div>
    </div>
</section>
<section class="container d-flex flex-column align-items-center justify-content-center" style="width: 100%;min-height: 70vh" >
    <div class="row d-flex align-items-center justify-content-start  m-0 p-0" style="width: 100%" >
        <div class="col-lg-12">
            <div class="content-new-footer">
               <h1 style="font-size: 4.5rem;font-family: sans-serif;font-weight: bold">MIT News</h1>
               <p>ON CAMPUS AND AROUND THE WORLD</p>
            </div>
        </div>
    </div>
    <div class="row d-flex align-items-center justify-content-start m-0 p-0" style="width: 100%;" >
        <div class="col-lg-6 d-flex align-items-center justify-content-between">
            <p class="text-dark" style="font-size: 1.2rem">This website is managed by the MIT News Office, part of the <span style="border-bottom: 1px solid red"> Institute Office of Communications.</span></p>
        </div>
        <div class="col-lg-6 d-flex align-items-end justify-content-end ">
            <input class="p-4 h5 border border-dark  input-hover" style="min-width: 420px;"  type="button" value="Subscribe to MIT Daily/Weekly">
        </div>
    </div>
    <div class="row d-flex align-items-center justify-content-between  m-0 p-0" style="width: 100%">
        <div class="col-lg-6 d-flex flex-column align-items-start justify-content-start">
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
                <input class="p-4 h5 border border-dark  input-hover" style="min-width: 420px;"  type="button" value="Subscribe to press releases">
            </div>
            <div class="news-1">
                <input class="p-4 h5 border border-dark  input-hover" style="min-width: 420px;"  type="button" value="Submit campus news">
            </div>
            <div class="news-1">
                <input class="p-4 h5 border border-dark  input-hover" style="min-width: 420px;"  type="button" value="Guidelines for campus news contributors">
            </div>
        </div>
    </div>
    <div class="row d-flex align-items-center justify-content-between m-0 p-0" style="width: 100%">
        <div class="col-lg-6 d-flex flex-column align-items-start justify-content-start "  >
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
        <div class="col-lg-6  d-flex flex-column align-items-end justify-content-end">
            <div class="news-1">
                <input class="p-4 h5 border border-dark  input-hover"  style="min-width: 420px;" type="button" value=" Guidelines on generative AI">
            </div>
        </div>
    </div>
</section>

