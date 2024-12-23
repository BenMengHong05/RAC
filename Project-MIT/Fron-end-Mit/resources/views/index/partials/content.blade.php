<div class="col-md-12 col-lg-12  main-content bg-light" id="mySearch">
    <div class="input-icon   " id="input-icon" style="display: none" id="input-icon" style="position: relative;">
        <input type="text" class="border-0  shadow-none search-input" id="search-input" placeholder="ស្វែងរក"
            aria-label="ស្វែងរក" style="padding-left: 4rem;background-color: rgba(51, 50, 50, 0.05)" />
        <i class="fa-solid fa-magnifying-glass  fs-3 text-danger mt-1 ps-3" style="margin-right: 1rem;"></i>
    </div>
    <div class="scrol-down" id="scrol-down">
        <div class="scrol-text">
            <div class="tamplate "
                style="position: relative;background-color: rgb(184, 190, 197);width: 100%;height: 180px;">
                <div
                    class="col-md-12 col-lg-12   mb-2 tamplate-text d-flex align-items-center justify-content-center gap-2">
                    <img src="{{ url('images/_thumbnail-mit-dome_0.jpeg') }}" alt="" class="image-updates"
                        width="100px" height="80px">
                    <a href="" class="text-decoration-none" style="border-bottom: 1px solid red">Updates from
                        campus:</a>
                    <p class="mt-3"> Read messages from MIT's leaders regarding recent events on
                        campus, sharing relevant policies, and correcting misinformation.</p>
                </div>
            </div>
            @foreach ($objNewmits as $index => $Newmit)
                @if ($index === 0)
                    <div class="scrol-down-text py-4 px-4">
                        <div class="scrol-img">
                            <img src="{{ asset('images/' . $Newmit->image) }}" class="img-fluid" alt="Education Image"
                                style="width: 100%; height: 80vh;">
                        </div>
                        <div class="ps-4 mt-4 d-none " style="width: 15%">
                            <h2 style="border-bottom: 1px solid red">{{ $Newmit->title }}</h2>
                        </div>
                        <div class="mt-4 ">
                            <h3 class="new-description ">
                                {{ $Newmit->description }}
                            </h3>
                        </div>
                    </div>
                    <div class="scrol-ul m-0 p-0">
                        <ul class="d-flex align-items-center  justify-content-start gap-2 "
                            style="width: 100%;white-space: nowrap">
                            <li>{{ $Newmit->created_at->format('M d,Y', strtotime($Newmit->created_at)) }}</li>
                            <li><a href="">Full story</a></li>
                            <li><a href="https://x.com/"><i class="fa-brands fa-x-twitter"></i> </a></li>
                            <li><a href="https://www.facebook.com/rac.gov.kh"><i
                                        class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href=""> Explore more spotlights</a></li>
                        </ul>
                    </div>
                @endif
            @endforeach
            <div class="scrol-img container mt-5 px-4" style="width: 100%">
                <div class="title text-center">
                    <h5 style="font-family: sans-serif;">MORE FROM THE RAC COMMUNITY</h5>
                </div>
                <div class="row mt-5 ">
                    @foreach ($objNewmits as $index => $Newmit)
                        @if ($index >= 1 && $index <= 6)
                            <div class="col-md-12  col-lg-6">
                                <img src="{{ asset('images/' . $Newmit->image) }}" alt="Image" class="image-fluid"
                                    style="width: 100%; height: 40vh;">
                                <div class="img-text mt-4">
                                    <h6 class="title-categories">{{ $Newmit->title }}</h6>
                                    <h6 class="img-text-hover  category-descrition-new">{{ $Newmit->description }}</h6>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="scrol-footer container-fluid d-flex align-items-center justify-content-start mt-5">
                <div class="row ">
                    <div class="footer-titile">
                        <h5>Want more about RAC?</h5>
                    </div>
                    <div class="footer-aboutMIT d-flex align-items-center ">
                        <div class="col-md-12 col-lg-12  d-flex" style="justify-content: space-between">
                            <h5 class="mt-2">Explore <span class="span-about" style="border-bottom: 2px solid red">
                                    more spotlights,</span> or
                                subscribe to receive <span class="span-about" style="border-bottom: 2px solid red">daily
                                    or weekly doses of
                                    RAC</span> in your inbox.</h5>
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
