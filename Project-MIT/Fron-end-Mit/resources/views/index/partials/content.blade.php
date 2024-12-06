<div class="col-md-12 col-lg-12  main-content bg-light" id="mySearch">
    <div class="scrol-down">
        <div class="scrol-text">
            <div class="tamplate container-fluid  " style="position: relative;background-color: rgb(184, 190, 197)">
                <div class="col-md-12 col-lg-12  tamplate-text d-flex align-items-center justify-content-center gap-2">
                    <img src="{{ url('images/_thumbnail-mit-dome_0.jpeg') }}" alt="" width="100px">
                    <a href="" class="text-decoration-none" style="border-bottom: 1px solid red">Updates from
                        campus:</a>
                    <p class="mt-3"> Read messages from MIT's leaders regarding recent events on
                        campus, sharing relevant policies, and correcting misinformation.</p>
                </div>
            </div>
            @foreach ($objNewmits as $index => $Newmit)
                @if ($index === 0)
                    <div class="scrol-down-text m-3">
                        <div class="scrol-img">
                            <img src="{{ asset('images/' . $Newmit->image) }}" class="img-fluid" alt="Education Image"
                                style="width: 100%; height: 80vh;">
                        </div>
                        <div class="ps-4 mt-2 d-none" style="width: 15%">
                            <h2 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;border-bottom: 1px solid red"
                                >{{ $Newmit->title }}</h2>
                        </div>
                        <div class="ps-4 mt-2">
                            <h3 class="new-description" >
                                {{ $Newmit->description }}
                            </h3>
                        </div>
                    </div>
                    <div class="scrol-ul">
                        <ul class="d-flex align-items-center justify-content-start gap-2 " style="white-space: nowrap">
                            <li>Jul 11, 2024</li>
                            <li><a href="">Full story</a></li>
                            <li>Share:</li>
                            <li><a href="https://x.com/"><i class="fa-brands fa-x-twitter"></i> </a></li>
                            <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href=""> Explore more spotlights</a></li>
                        </ul>
                    </div>
                @endif
            @endforeach
            <div class="scrol-img container  mt-5">
                <div class="title text-center">
                    <h4 style="font-family: sans-serif;font-weight: bold">MORE FROM THE MIT COMMUNITY</h4>
                </div>
                <div class="row mt-5">
                    @foreach ($objNewmits as $index => $Newmit)
                        @if ($index >=1 && $index <= 6)
                            <div class="col-md-12  col-lg-6">
                                <img src="{{ asset('images/' . $Newmit->image) }}" alt="Education Image" class="image-fluid"  style="width: 100%; height: 40vh;" >
                                <div class="img-text mt-4">
                                    <h6 class="title-categories">{{ $Newmit->title }}</h6>
                                    <h6 class="img-text-hover  category-descrition"  >{{ $Newmit->description }}</h6>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="scrol-footer container-fluid d-flex align-items-center justify-content-start mt-5">
                <div class="row ">
                    <div class="footer-titile">
                        <h5>Want more about MIT?</h5>
                    </div>
                    <div class="footer-aboutMIT d-flex align-items-center ">
                        <div class="col-md-12 col-lg-12  d-flex" style="justify-content: space-between">
                            <h5 class="mt-2">Explore <span class="span-about" style="border-bottom: 2px solid red">
                                    more spotlights,</span> or
                                subscribe to receive <span class="span-about" style="border-bottom: 2px solid red">daily
                                    or weekly doses of
                                    MIT</span> in your inbox.</h5>
                            <div>
                                <h5 class="subscribe-hover"
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

