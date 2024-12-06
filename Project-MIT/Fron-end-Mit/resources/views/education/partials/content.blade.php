<section class="container-fluid content-education ">
    <h2>Education</h2>
    <div class="container ">
        <div class="row ">
            <div class="col-md-12 col-lg-12 " style="margin-top: 25vh;font-family: sans-serif">
                <ul class="d-flex ps-3 gap-2">
                    <li><a href="" class="text-black">Home</a></li>
                    <li style="color: red">/</li>
                    <li>Education</li>
                </ul>
            </div>
        </div>
        @foreach ($categorys_titles->category_paths as $index => $categorys_title )
            @if($index === 0)
                <div class="container mt-5">
                        <div class="row ">
                            <h2>
                                {{$categorys_title->title}}
                            </h2>
                        </div>
                    </div>
                    <div class="container mt-5">
                        <div class="row mt-2">
                            <div class="col-xl-6 education-text">
                                <h5>
                                    {{$categorys_title->description}}
                                </h5>
                            </div>
                            <div class="col-xl-6 education-img" style="min-height: 40vh">
                                <div class="ed-img">
                                <img src="{{ asset('images/' . $categorys_title->image) }}" alt="Education Image" class="img-fluid" style="width: 70vh; height: 50vh;">
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    @foreach ($categorys_titles->category_paths as $index => $categorys_title )
            <div class="container mt-5" style="border-top: 1px solid rgb(82, 78, 78);min-height: 50vh">
                <h2 class="mt-4">{{$categorys_title->title}}</h2>
                <div class="row mt-2">
                    <div class="col-lg-6  align-items-center ">
                        <h5>
                            {{$categorys_title->description}}
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
                @if($index === 0  )
                    <div class="row mt-5 ms-0" style="width: 30vh">
                            <div class="education-shcool p-3 d-flex align-items-center justify-content-center">
                            <h5>Explore Departments</h5>
                        </div>
                    </div>
                @endif
            </div>
    @endforeach
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
