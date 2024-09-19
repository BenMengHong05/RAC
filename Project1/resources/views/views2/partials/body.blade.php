
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MIT</title>
    {{-- link icon webite --}}
    <link rel="icon" href="{{ asset('images/mit.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- this is  link css --}}

    <link rel="stylesheet" href="{{ asset('css/bodyMIT.css') }}">
    {{-- this is a link boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <section class="section">
        <div class="container-fluid">
            <div class="row blog-entries element-animate">
                <div class="col-md-12 col-lg-3 sidebar " style="background-color: rgb(232, 232, 238); position: relative;">
                    <div class="sider-box " style="position: sticky;position: -webkit-sticky; top:10px">
                        <div class="sider-search">
                            <div class="menu">
                                {{-- menu --}}
                            </div>
                            <h5>Explore websites, people, and locations</h5>
                            <i class="position-absolute fs-5 mt-5 fa-solid fa-magnifying-glass"></i>
                            <input class="form-control me-2 p-4 mt-4 pl-5" type="search" aria-label="Search">
                        </div>
                        <div class="sider-menu mt-2">
                            <div class="menu-a">
                                <h4>Top resources for</h4>
                                <ul class="d-flex flex-column align-items-start justify-content-start ">
                                    <li><a href="">
                                            <div class="trel"></div>prospective students
                                        </a></li>
                                    <li><a href="">
                                            <div class="trel"></div>current students
                                        </a></li>
                                    <li><a href="">
                                            <div class="trel"></div>faculty & staff
                                        </a></li>
                                    <li><a href="">
                                            <div class="trel"></div>alumni
                                        </a></li>
                                    <li><a href="">
                                            <div class="trel"></div>parents & families
                                        </a></li>
                                    <li><a href="">
                                            <div class="trel"></div>all resources
                                        </a></li>
                                </ul>
                            </div>
                            <div class="menu-b mt-2">
                                <h4>Featured topic</h4>
                                <ul class="d-flex flex-column align-items-start justify-content-start">
                                    <li class="d-flex align-items-center gap-3 "><a href="">climate change</a> <i
                                            class="fa-solid fa-arrow-up"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="josth-us">
                            <i class="fa-solid fa-arrow-up p-1"></i>
                            <h6>Join us in <br>
                                building a <br>
                                better world.
                            </h6>
                        </div>
                        <div class="sider-footer mt-2 ">
                            <h5>Massachusetts Institute of Technology</h5>
                            <a href="#" class="massa text-dark">77 Massachusetts Avenue, Cambridge, MA, USA</a>
                            <div class="menu">
                                <ul class="gap-3 ">
                                    <li><a href="">visit</a></li>
                                    <li><a href="">Map</a></li>
                                    <li><a href="">Events</a></li>
                                    <li><a href="">People</a></li>
                                    {{-- <li><a href="">Careers</a></li>
                                    <li><a href="">Contact</a></li> --}}
                                </ul>
                                <ul class="gap-3">
                                    <li><a href="">Privacy</a></li>
                                    {{-- <li><a href="">Accessibility</a></li>
                                    <li><a href="">SocialMedia Hub</a></li> --}}
                                    <li><a href="https://x.com/"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END sidebar-box -->
                </div>
                <div class="col-md-12 col-lg-8 main-content bg-light postition-relative">
                    <div class="scrol-down">
                        <div class="scrol-text">
                            <div class="tamplate container-fluid "style="position: relative;background-color: rgb(184, 190, 197)">
                                <div class="col-md-12 col-lg-12 container  tamplate-text d-flex align-items-center justify-content-center gap-2 ">
                                    <div class="col-md-1 col-lg-1"><img src="{{ asset('img/_thumbnail-mit-dome_0.jpeg') }}" alt=""width="100px"></div>
                                    <div class="col-md-2 col-lg-2"><a href="">Updates from campus:</a></div>
                                    <div class="col-md-9 col-lg-9"><p class="mt-3"> Read messages from MIT's leaders regarding recent events oncampus, sharing relevant policies, and correcting misinformation.</p></div>
                                </div>
                            </div>
                            <div class="scrol-down-text">
                                <div class="scrol-img">
                                    <img src="{{ asset('img/MIT-Overturned-Ocean-SL.jpg') }}" alt=""
                                        width="100%">
                                </div>
                                <div>
                                    <h2>“It never occurred to me not to join the military. I knew I wanted ROTC,” says US
                                        Air Force Maj. (Ret.) Teri Centner ’89. Soon after graduating from MIT, she found
                                        herself reverse-engineering Soviet intercontinental ballistic missiles — the start
                                        of 20 years of military service.</h2>
                                </div>
                            </div>
                            <div class="scrol-ul">
                                <ul class="d-flex align-items-center justify-content-start gap-3 ">
                                    <li>Jul 11, 2024</li>
                                    <li><a href="">Full story</a></li>
                                    <li>Share:</li>
                                    <li><a href="https://x.com/"><i class="fa-brands fa-x-twitter"></i> </a></li>
                                    <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href=""> Explore more spotlights</a></li>
                                </ul>

                            </div>
                            <div class="scrol-img container mt-5">
                                <div class="title text-center">
                                    <h2>MORE FROM THE MIT COMMUNITY</h2>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-12 col-lg-6">
                                        <img src="{{ asset('img/MIT-Zhang-SL.jpg') }}" alt="" width="100%">
                                        <div class="img-text mt-4">
                                            <h4>COMMUNITY SPOTLIGHT</h4>
                                            <p class="img-text-hover">Xinyi Zhang is bridging machine learning and biology
                                                to understand fundamental biological principles. The PhD student is
                                                developing computational tools for analyzing cells in the age of
                                                “multimodal” data, from different types of measurements taken
                                                simultaneously.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6">
                                        <img src="{{ asset('img/MIT-Cady-Coleman-SL.jpg') }}" alt=""
                                            width="100%">
                                        <div class="img-text mt-4">
                                            <h4>COMMUNITY SPOTLIGHT</h4>
                                            <p class="img-text-hover">Emergency personnel are at elevated risk for mental
                                                health challenges like post-traumatic stress disorder. A new study shows
                                                that a cognitive strategy focused on social good may help people cope with
                                                distressing events.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-12 col-lg-6">
                                        <img src="{{ asset('img/iStock-1313232216-home.jpg') }}" alt=""
                                            width="100%">
                                        <div class="img-text mt-4">
                                            <h4>RESEARCH</h4>
                                            <p class="img-text-hover">“I am an astronaut,” Cady Coleman ’83 wrote recently
                                                in The Boston Globe. “Even after 24 years at NASA, two space shuttle
                                                missions, and six months living aboard the International Space Station, it
                                                thrills me to say those words.”</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6">
                                        <img src="{{ asset('img/MIT-Stronger-Titanium-home.jpg') }}" alt=""
                                            width="100%">
                                        <div class="img-text mt-4">
                                            <h4>RESEARCH</h4>
                                            <p class="img-text-hover">Researchers have identified routes to stronger
                                                titanium alloys: Their new design approach could be used to produce metals
                                                with exceptional combinations of strength and ductility, for applications
                                                from aerospace and energy infrastructure to biomedical equipment.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-12 col-lg-6">
                                        <img src="{{ asset('img/HERR-Nature-Medicine-Image-01-home.jpg') }}"
                                            alt="" width="100%">
                                        <div class="img-text mt-4">
                                            <h4>INNOVATION</h4>
                                            <p class="img-text-hover">With a new surgical intervention and neuroprosthetic
                                                interface, researchers restored a natural walking gait in people with
                                                amputations below the knee. Seven patients could walk faster, avoid
                                                obstacles, and climb stairs more naturally than people with a traditional
                                                amputation.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6">
                                        <img src="{{ asset('img/MIT-Centner-home.jpg') }}" alt="" width="100%">
                                        <div class="img-text mt-4">
                                            <h4>COMMUNITY SPOTLIGHT</h4>
                                            <p class="img-text-hover">“It never occurred to me not to join the military. I
                                                knew I wanted ROTC,” says US Air Force Maj. (Ret.) Teri Centner ’89. Soon
                                                after graduating from MIT, she found herself reverse-engineering Soviet
                                                intercontinental ballistic missiles — the start of 20 years of military
                                                service.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="scrol-footer container-fluid d-flex align-items-center justify-content-start mt-5">
                                <div class="row ">
                                    <div class="footer-titile">
                                        <h5 class="text-white">Want more about MIT?</h5>
                                    </div>
                                    <div class="footer-aboutMIT d-flex align-items-center ">
                                        <div class="col-md-12 col-lg-12  d-flex" style="justify-content: space-between">
                                            <h5 class="mt-2 text-white">Explore <span class="span-about text-white"
                                                    style="border-bottom: 2px solid red "> more spotlights,</span> or
                                                subscribe to receive <span class="span-about text-white"
                                                    style="border-bottom: 2px solid red">daily or weekly doses of
                                                    MIT</span> in your inbox.</h5>
                                            <div>
                                                <h5 class="subscribe-hover text-white"
                                                    style="border: 1px solid rgb(255, 0, 0); padding: 10px 20px">Subscribe
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-1 sidebar">
                    <div class="not-box" style="position: sticky;position: -webkit-sticky; top:10px">
                        <div class="not">

                        </div>
                    </div>
                    <!-- END sidebar-box -->
                </div>
                <!-- END main-content -->
            </div>
        </div>
    </section>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>


