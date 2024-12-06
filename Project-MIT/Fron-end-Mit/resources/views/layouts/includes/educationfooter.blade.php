<footer class="education-footer container-fluid   ms-0 p-4">
    <div class=" education-footer-content row d-flex align-items-center justify-content-center " style="min-height: 18vh">
        <div class="education-footer-content-logo col-lg-2 d-flex align-items-center justify-content-start " style="min-width: 20vh;min-height: 18vh">
            <img src="{{ url('images/Massachusetts_Institute_of_Technology-Logo.wine.png') }}" alt=""
                style="width: 60%; height: 100%;">
        </div>
        <div class="col-lg-10 footer-menu ">
            <div class="row">
                <div class="col-lg-6 col-md-12  d-flex flex-column align-items-start justify-content-start" >
                    <h6 >Massachusetts Institute of Technology</h6>
                    <p >77 Massachusetts Avenue, Cambridge, MA, USA</p>
                    <div class="row footer-ul-li-a gap-3 d-flex  w-100">
                        <ul class="col-lg-12 d-flex gap-3 ">
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
                            <li><a href=""><i class="fa-brands fa-x-twitter twitter"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-facebook-f facebook"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12  footer-menu-2 ">
                    <div class="row footer-menu-item " >
                        <div class="col-lg-8  d-flex" >
                            <ul style="border-left: 1px solid black;">
                                <li><a class="screen-360" href="">Education</a></li>
                                <li><a class="screen-360" href="">Admissions + Aid</a></li>
                                <li><a class="screen-360" href="">About MIT</a></li>
                            </ul>
                            <ul class="ms-2 " style="border-left: 1px solid black;">
                                <li><a class="screen-360" href="">Research</a></li>
                                <li><a class="screen-360" href="">Campus Life</a></li>
                                <li><a class="screen-360" href="">Alumni</a></li>
                            </ul>
                            <ul class="ms-2" style="border-left: 1px solid black">
                                <li><a class="screen-360" href="">Innovation</a></li>
                                <li><a class="screen-360" href="">News</a></li>
                            </ul>

                        </div>
                        <div class="col-lg-4 " style="width: 170px">
                            <div class="footer-box" >
                                <div class="footer-box-content border border-danger d-flex p-2" >
                                    <p class="footer-paragrab m-1">Join us <br>
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
        <div class="col-lg-12 education-footer-content-description ">
            <p>© Copyright MIT. All Rights Reserved<br>
                Designed by BEN MENGHONG</p>
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

{{-- <script>
    function setupCarousel(containerId, carouselId, minPerSlide) {
        let items = document.querySelectorAll(`#${containerId} .carousel2  .carousel-item2`);
        items.forEach((el) => {
            let next = el.nextElementSibling;
            for (let i = 1; i < minPerSlide; i++) {
                if (!next){
                    next = items[0]; // Loop back to the first item
                }
                let cloneChild = next.cloneNode(true);
                el.appendChild(cloneChild.children[0]);
                next = next.nextElementSibling;
            }
        });

        // Initialize the carousel with Bootstrap jQuery
        $(`#${carouselId}`).carousel({
            interval: false,
        });
        $(`#${carouselId}`).carousel('pause');
    }

    document.addEventListener("DOMContentLoaded", function () {
        setupCarousel('featureContainer2', 'featureCarousel2', 3);
    });
</script> --}}
@stack('script')
</body>

</html>
