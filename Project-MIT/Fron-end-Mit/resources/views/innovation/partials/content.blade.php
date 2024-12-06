<section class="container-fluid content-education">
    <h2>Education</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 " style="margin-top: 25vh;font-family: sans-serif">
                <ul class="d-flex  ps-3  gap-2">
                    <li><a href="" class="text-black">Home</a></li>
                    <li style="color: red">/</li>
                    <li>Innovation</li>
                </ul>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row ">
                <h2>
                    {{ $innovations->title }}
                </h2>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row mt-2">
                <div class="col-xl-6 education-text">
                    <h5>
                        {{ $innovations->description }}
                    </h5>
                </div>
                <div class="col-xl-6 education-img" style="min-height: 40vh">
                    <div class="ed-img">
                        <img src="{{ asset('images/' . $innovations->image) }}" alt="Education Image" style="width: 70vh; height: 50vh;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5" style="border-top: 1px solid rgb(82, 78, 78);min-height: 50vh">
        <h2 class="mt-4">Ecosystem</h2>
        <div class="row mt-2">
            <div class="col-lg-6  align-items-center mt-2">
                <h5>
                    MIT’s innovation ecosystem comprises students, faculty, postdocs, and alumni taking part in tailored
                    classes, <span class="ul-hover-4">mentorship</span>, guidance, and activities offered by over 80 innovation and entrepreneurship
                    (I&E) organizations across campus. Located in the heart of “the most innovative square mile on the
                    planet,” <span class="ul-hover-4">MIT InnovationHQ </span>provides a home for MIT’s thriving community of innovators and
                    entrepreneurs, supporting all who pursue ideas with a passion for world-changing impact. From this
                    hub of I&E activity, the ecosystem reaches outward into our regional innovation ecosystem, in part
                    through an ambitious, decade-long redevelopment initiative.
                </h5>
            </div>
            <div class="col-lg-6">
                <ul class="education-ul">
                    <h4>Top Resources</h4>
                    <li><span>01.</span><a href=""> MIT Office of Innovation Resource Guide</a></li>
                    <li><span>02.</span><a href=""> MIT InnovationHQ</a></li>
                    <li><span>03.</span><a href=""> Martin Trust Center for MIT Entrepreneurship</a></li>
                    <li><span>04.</span><a href=""> MIT Sandbox Innovation Fund Program</a></li>
                    <li><span>05.</span><a href=""> Deshpande Center for Technological Innovationn</a></li>
                    <li><span>06.</span><a href=""> D-Lab</a></li>
                    <li><span>07.</span><a href=""> The Engine</a></li>
                    <li><span>08.</span><a href=""> Solve</a></li>
                    <li><span>09.</span><a href=""> Technology Licensing Office</a></li>
                    <li><span>010.</span><a href="">Venture Mentoring Service</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container  mt-5" style="border-top: 1px solid rgb(82, 78, 78);min-height: 50vh">
        <h2 class="mt-4">Impact</h2>
        <div class="row mt-2">
            <div class="col-lg-6">
                <h5>
                    Innovations from MIT often address the problems humanity most needs to solve, <span class="ul-hover-4">including</span> sustainable
                    energy, urban resiliency, fresh water, food for all, cancer, Alzheimer’s, and infectious disease. By
                    helping MIT inventors connect with mentors, collaborators, networks, and funding, we help them
                    translate new science into transformative innovation. MIT entrepreneurs make a sizable global
                    impact: The active companies formed by living MIT alumni produce estimated annual revenues on par
                    with the gross domestic product of the <span class="ul-hover-4">10th-largest economy</span> in the world.
                </h5>
            </div>
            <div class="col-lg-6">
                <img src="{{ url('images/iStock-889512900_0.jpg') }}" alt="" class="img-fluid" width="80%">
                <p>From clean water technology to medical research, MIT innovations have <br>
                    global impact. </p>
            </div>
        </div>
    </div>
</section>
