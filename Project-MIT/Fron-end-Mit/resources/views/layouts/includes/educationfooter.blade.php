<footer class="education-footer container-fluid   ms-0 p-4">
    <div class=" education-footer-content row d-flex align-items-center justify-content-center " style="min-height: 18vh">
        <div class="education-footer-content-logo  col-lg-2 d-flex align-items-start justify-content-center " style="min-width: 20vh;min-height: 18vh">
            <img src="{{ url('images/rac_logo.png') }}" alt="" class="d-none d-lg-block "
                style="width: 50%; height: 60%;">
        </div>
        <div class="col-lg-10 footer-menu ">
            <div class="row">
                <div class="col-lg-6 col-md-12  d-flex flex-column align-items-start justify-content-start" >
                    <h6 class="footer-title">រាជបណ្ឌិត្យសភាកម្ពុជា​</h6>
                    {{-- <p >រាជបណ្ឌិត្យសភាកម្ពុជា​ MA, CMB</p> --}}
                    <div class="row footer-ul-li-a gap-3 d-flex  w-100">
                        <ul class="col-lg-12 d-flex gap-3 footer-description">
                            <li><a href="">Visit</a></li>
                            <li><a href="">Map</a></li>
                            <li><a href="">Events</a></li>
                            <li><a href="">People</a></li>
                            <li><a href="">Careers</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                    <div class="row footer-ul-li-a d-flex  w-100">
                        <ul class="col-lg-12 gap-3 d-flex ">
                            <li><a href="">Privacy</a></li>
                            <li><a href="">Accessibility</a></li>
                            <li><a href="" >SocialMediaHub</a></li>
                            <li><a href="https://www.facebook.com/rac.gov.kh"><i class="fa-brands fa-facebook-f facebook"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCE2-mDBbetmonrNa7jIhwIA"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-6  col-md-12  footer-menu-2 ">
                    <div class="row footer-menu-item d-flex justify-content-between "  style="width: 100%">
                        <div class="col-lg-8"  style="width: 70%">
                            <div class="menu-footer-category d-flex">
                                <ul class="footer-menu-txt-category m-0 p-0 " style=";white-space: nowrap;">
                                    <li><a class="screen-360" href="" style="display: inline-block">ការអប់រំ</a></li>
                                    <li><a class="screen-360" href="" style="display: inline-block">ជំនួយការចូលរៀន</a></li>
                                    <li><a class="screen-360" href="" style="display: inline-block">អំពី RAC</a></li>
                                </ul>
                                <ul class="ms-2 footer-menu-txt-category " style="white-space: nowrap;">
                                    <li><a class="screen-360" href="" style="display: inline-block">ស្រាវជ្រាវ</a></li>
                                    <li><a class="screen-360" href="" style="display: inline-block">ជីវិតក្នុងបរិវេណសាលា</a></li>
                                    <li><a class="screen-360" href="" style="display: inline-block">អតីតនិស្សិត</a></li>
                                </ul>
                                <ul class="ms-2 footer-menu-txt-category " style="white-space: nowrap;">
                                    <li><a class="screen-360" href="" style="display: inline-block">ការច្នៃប្រឌិត</a></li>
                                    <li><a class="screen-360" href="" style="display: inline-block">ព័ត៌មាន</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-4 " style="width: 170px">
                            <div class="footer-box" >
                                <div class="footer-box-content  border border-danger d-flex p-3" >
                                    <p class="footer-paragrab m-1 text-nowrap">Join us <br>
                                        in building a <br>
                                        better world.</p>
                                    <i class="fa-solid fa-arrow-up m-1 "></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" row ">
        <div class="col-lg-12 d-flex flex-column  text-center education-footer-content-description ">
            <div class="mt-5">
                <h5 class="education-text-footer">@២០២៤​-រក្សាសិទ្ធិគ្រប់យ៉ាងដោយ​​ រាជបណ្ឌិត្យសភាកម្ពុជា​</h5>
            </div>
            <p class="education-text">អភិវឌ្ឍដោយ ការិយាល័យឌីជីថល នៃរាជបណ្ឌិត្យសភាកម្ពុជា</p>
        </div>
    </div>
</footer>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
<script>
    function setupCarousel(containerId, carouselId, minPerSlide) {
        let items = document.querySelectorAll(`#${containerId} .carousel  .carousel-item`);
        items.forEach((el) => {
            let next = el.nextElementSibling;
            for (let i = 1; i < minPerSlide; i++){
                if (!next){
                    next = items[0];
                }
                let cloneChild = next.cloneNode(true);
                el.appendChild(cloneChild.children[0]);
                next = next.nextElementSibling;
            }
        });
        $(`#${carouselId}`).carousel({
            interval: false,
        });
        $(`#${carouselId}`).carousel('pause');
    }
    document.addEventListener("DOMContentLoaded", function () {
        setupCarousel('featureContainer2', 'featureCarousel2', 3);
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  function myPlugin({ swiper, extendParams, on }) {
    extendParams({
      debugger: false,
    });
    on('init', () => {
      if (!swiper.params.debugger) return;
      console.log('init');
    });
    on('click', (swiper, e) => {
      if (!swiper.params.debugger) return;
      console.log('click');
    });
    on('tap', (swiper, e) => {
      if (!swiper.params.debugger) return;
      console.log('tap');
    });
    on('doubleTap', (swiper, e) => {
      if (!swiper.params.debugger) return;
      console.log('doubleTap');
    });
    on('sliderMove', (swiper, e) => {
      if (!swiper.params.debugger) return;
      console.log('sliderMove');
    });
    on('slideChange', () => {
      if (!swiper.params.debugger) return;
      console.log(
        'slideChange',
        swiper.previousIndex,
        '->',
        swiper.activeIndex
      );
    });
    on('slideChangeTransitionStart', () => {
      if (!swiper.params.debugger) return;
      console.log('slideChangeTransitionStart');
    });
    on('slideChangeTransitionEnd', () => {
      if (!swiper.params.debugger) return;
      console.log('slideChangeTransitionEnd');
    });
    on('transitionStart', () => {
      if (!swiper.params.debugger) return;
      console.log('transitionStart');
    });
    on('transitionEnd', () => {
      if (!swiper.params.debugger) return;
      console.log('transitionEnd');
    });
    on('fromEdge', () => {
      if (!swiper.params.debugger) return;
      console.log('fromEdge');
    });
    on('reachBeginning', () => {
      if (!swiper.params.debugger) return;
      console.log('reachBeginning');
    });
    on('reachEnd', () => {
      if (!swiper.params.debugger) return;
      console.log('reachEnd');
    });
  }
</script>
<script>
  // Init Swiper
  var swiper = new Swiper('.swiper', {
    // Install Plugin To Swiper
    modules: [myPlugin],
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    // Enable debugger
    debugger: true,
  });
</script>

@stack('script')
</body>

</html>
