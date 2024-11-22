<footer class="container-fluid  education-footer ms-0 p-4">
    <div class="row d-flex align-items-center justify-content-center" style="min-height: 18vh">
        <div class="col-lg-2 d-flex align-items-start justify-content-center " style="min-width: 20vh;min-height: 18vh">
            <img src="{{ url('images/Massachusetts_Institute_of_Technology-Logo.wine.png') }}" alt=""
                style="width: 70%; height: 100%;">
        </div>
        <div class="col-lg-10 footer-menu">
            <div class="row">
                <div class="col-lg-5 col-md-12  d-flex flex-column align-items-start justify-content-start">
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
                <div class="col-lg-7 col-md-12">
                    <div class="row">
                        <div class="col-xl-8  d-flex">
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
                        <div class="col-xl-4">
                            <div class="footer-box d-flex  justify-content-center  " style="min-width: 35%">
                                <div class="footer-box-content border border-danger d-flex p-2">
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
    <div class="row ">
        <div class="col-lg-12 d-flex align-items-center justify-content-center">
            <p>© Copyright MIT. All Rights Reserved<br>
                Designed by BEN MENGHONG</p>
        </div>
    </div>
</footer>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
	<script>
		let items = document.querySelectorAll('#featureContainer .carousel .carousel-item ');
        items.forEach((el) => {
            const minPerSlide = 3;
            let next = el.nextElementSibling;
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    next = items[0];
                }
                let cloneChild = next.cloneNode(true);
                el.appendChild(cloneChild.children[0]);
                next = next.nextElementSibling;
            }
        });
		$(document).ready(function () {
            $('#featureCarousel').carousel({ interval: false });
            $('#featureCarousel').carousel('pause');
		});
	</script>
	<script>
		let items = document.querySelectorAll('#featureContainer2 .carousel2 .carousel-item2 ');
        items.forEach((el) => {
            const minPerSlide = 3;
            let next = el.nextElementSibling;
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    next = items[0];
                }
                let cloneChild = next.cloneNode(true);
                el.appendChild(cloneChild.children[0]);
                next = next.nextElementSibling;
            }
        });
		$(document).ready(function () {
            $('#featureCarousel2').carousel({ interval: false });
            $('#featureCarousel2').carousel('pause');
		});

	</script>
	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-36251023-1']);
		_gaq.push(['_setDomainName', 'jqueryscript.net']);
		_gaq.push(['_trackPageview']);

		(function () {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>
	<script>
		try {
			fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function (response) {
				return true;
			}).catch(function (e) {
				var carbonScript = document.createElement("script");
				carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
				carbonScript.id = "_carbonads_js";
				document.getElementById("carbon-block").appendChild(carbonScript);
			});
		} catch (error) {
			console.log(error);
		}
	</script>
@stack('script')
</body>

</html>
