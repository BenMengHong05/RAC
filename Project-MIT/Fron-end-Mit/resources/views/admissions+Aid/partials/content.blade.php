<section class="container-fluid content-education">
    <h2>Education</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 " style="margin-top: 25vh;font-family: sans-serif">
                <ul class="d-flex gap-2">
                    <li><a href="" class="text-black">Home</a></li>
                    <li style="color: red">/</li>
                    <li> Admissions + Aid</li>
                </ul>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row ">
                <h1>
                    {{$admissions_aids->title}}

                </h1>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row mt-2">
                <div class="col-lg-6 education-text">
                    <h5>
                        {{$admissions_aids->description}}

                    </h5>
                </div>
                <div class="col-lg-6 education-img" style="min-height: 40vh">
                    <div class="ed-img">
                        <img src="{{ asset('images/' . $admissions_aids->image) }}" alt="Education Image" style="width: 60vh; height: 40vh;">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5" style="border-top: 1px solid rgb(82, 78, 78);min-height: 30vh">
        <h1 class="mt-4">Undergraduate Admissions & Aid</h1>
        <div class="row mt-2">
            <div class="col-lg-6  align-items-center ">
                <h5>
                    All prospective undergraduate students apply through the Office of Undergraduate Admissions, regardless of their intended program of study. On the undergraduate <span class="ul-hover-4">admissions</span> site, you can learn more about our application process and read student blogs about life at MIT.
                </h5>
            </div>
            <div class="col-lg-6">
                <ul class="education-ul">
                    <h4>Top Resources</h4>
                    <li><span>01.</span><a href=""> Undergraduate Admissions</a></li>
                    <li><span>02.</span><a href=""> Undergraduate Financial Aid</a></li>
                    <li><span>03.</span><a href=""> First-Year Class Profile (2027)</a></li>
                    <li><span>04.</span><a href=""> Undergraduate Student Blogs</a></li>

                </ul>
            </div>
        </div>
    </div>
    <div class="container  mt-5" style="border-top: 1px solid rgb(82, 78, 78);min-height: 30vh">
        <h1 class="mt-4">Graduate Admissions & Aid</h1>
        <div class="row mt-2">
            <div class="col-lg-6">
                <h5>
                    To pursue graduate study at MIT, you need to apply to one of our <span class="ul-hover-4">departmental programs.</span> Each department has its own application website and admissions requirements.
                </h5>
            </div>
            <div class="col-lg-6 "  >
                <ul class="education-ul ">
                    <h4>Top Resources</h4>
                    <li><span>01.</span><a href=""> Graduate Admissions</a></li>
                    <li><span>02.</span><a href=""> Graduate Financial Aid</a></li>
                    <li><span>03.</span><a href=""> Graduate Student Blogs</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container mt-5" style="border-top: 1px solid rgb(82, 78, 78);min-height: 30vh">
        <h1 class="mt-4">Professional & Executive Education</h1>
        <div class="row mt-2">
            <div class="col-lg-6">
                <h5>
                    For professionals in the <span class="ul-hover-4"> workforce</span> and for learners anywhere eager for MIT content without the full-time commitment of a traditional degree program, we offer a range of educational options — some online, some on campus, and some a blend of both.
                </h5>
            </div>
            <div class="col-lg-6">
                <ul class="education-ul">
                    <h4>Top Resources</h4>
                    <li><span>01.</span><a href=""> MIT Professional Education</a></li>
                    <li><span>02.</span><a href=""> MIT Sloan School of Management Executive Education</a></li>
                    <li><span>03.</span><a href=""> MIT xPRO</a></li>
                    <li><span>04.</span><a href=""> MITx MicroMasters</a></li>
                    <li><span>05.</span><a href=""> MIT Bootcamps</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
