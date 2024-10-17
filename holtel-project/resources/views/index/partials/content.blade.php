
<section  id="home">
    <div class="container-fluid " style="object-fit: cover;background-repeat: no-repeat;background-size: 100% 100%;background-image: url({{asset('img/hero.jpg')}});"  >
        <div class="container">
            <div class="row  d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-duration="1500" data-aos-easing="linear" style="min-height: 100vh">
                <div class="col-lg-12 d-flex aling-items-center justify-content-center gap-4" >
                    <div class="hero-text">
                        <h1 class="text-white font-sans font-bold">Welcome to Hotel</h1>
                        <p class="text-white font-sans font-bold">Discover our luxurious rooms and enjoy our unparalleled service.</p>
                        <a href=""><input type="button" class="btn btn-light text-dark py-2 px-4" value="Discound"></a>
                        <a href=""><input type="button" class="btn btn-light text-dark py-2 px-5" value="Buy"></a>
                    </div>
                    <div class="discound rounded-full  d-flex align-items-center justify-content-center flex-column px-3 py-4   bg-slate-900 overflow-hidden">
                        <h5 class="text-white font-serif font-bold mx-1 text-base">Best Deals</h5>
                        <p class="text-white font-serif font-bold text-sm">Get up to 50%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about"  class="bg-black ">
    <div class="container-fluid ">
        <div class="row d-flex aling-items-center justify-items-center" data-aos="zoom-in" data-aos-duration="700" data-aos-easing="linear" style="min-height: 15vh">
            <div class="col-lg-12 d-flex align-items-center justify-content-center">
                <h1 class="text-white font-serif font-bold">About</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-20 ">
        <div class="container  ">
            <div class="row " style="min-height: 85vh">
                <div class="col-lg-6 py-2" data-aos="fade-right" data-aos-duration="700" data-aos-easing="linear">
                    <h3 class="font-serif font-bold text-white">About Holtel</h3>
                    <p class="font-mono text-white text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde laudantium vitae sequi ea dolorum. Rem ut animi cum nihil debitis at nam, corrupti itaque eligendi qui veniam error similique? Saepe!</p>
                    <ul class="m-0 p-0">
                        <li><a href="" class="text-white font-mono font-bold"><span>1.</span>Besh Of Holtel</a></li>
                        <li><a href="" class="text-white font-mono font-bold"><span>2.</span>Service Good</a></li>
                        <li><a href="" class="text-white font-mono font-bold"><span>3.</span>Foods Good</a></li>
                        <li><a href="" class="text-white font-mono font-bold"><span>4.</span>Gym</a></li>
                        <li><a href="" class="text-white font-mono font-bold"><span>5.</span>Price Good</a></li>
                    </ul>
                    <p class="font-mono text-white text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil libero mollitia itaque odio in, praesentium ducimus, sapiente voluptates modi illo ratione tempore magni totam est sit aspernatur! Nesciunt, dolore et.</p>
                    <a href=""><button type="submit" class="btn btn-light text-dark "><h6 class="text-sm font-serif font-bold m-0 p-0">show more</h6></button></a>
                </div>
                <div class="col-lg-6 py-2 rounded-3xl">
                    <div class="tample-about-holtel rounded-3xl" data-aos="fade-left" data-aos-duration="700" data-aos-easing="linear" style="box-shadow: rgba(255, 255, 255, 0.2) 0px 2px 8px 0px;">
                        <figure>
                            <img src="{{asset('img/hero.jpg')}}" class="img-fluid rounded-3xl" alt="" style="width: 100%;height: 100%;object-fit: cover">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="rom"  >
    <div class="container-fluid  bg-black">
        <div class="row d-flex aling-items-center justify-items-center" style="min-height: 15vh">
            <div class="col-lg-12 d-flex align-items-center justify-content-center">
                <h1 class="text-white font-serif font-bold" data-aos="fade-right" data-aos-duration="700" data-aos-easing="linear"> Oder</h1>
                <h1 class="text-white font-serif font-bold"  data-aos="fade-left" data-aos-duration="700" data-aos-easing="linear"> Room</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-black">
        <div class="container  ">
            <div class="row  " style="min-height: 50">
                <div class="col-lg-6 " data-aos="fade-right" data-aos-duration="700" data-aos-easing="linear">
                    <div class="order-text">
                        <h3 class="font-serif font-bold text-white">Room In Holtel</h3>
                        <p class="font-mono text-white text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde laudantium vitae sequi ea dolorum. Rem ut animi cum nihil debitis at nam, corrupti itaque eligendi qui veniam error similique? Saepe!</p>
                        <a href=""><button type="submit" class="btn btn-light text-dark "><h6 class="text-sm font-serif font-bold m-0 p-0">Order Room</h6></button></a>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="order-romd-data p-5 " data-aos="zoom-in-up" data-aos-duration="700" data-aos-easing="linear" style="min-height: 50vh;box-shadow: rgba(255, 255, 255, 0.2) 0px 2px 8px 0px;">
                        <form action="#" class="d-flex flex-column mx-auto" method="POST">
                            @csrf
                            <label for="#" class="text-white font-serif ">Number Room</label>
                            <input type="number" class="form-control" name="number_room" id="number_room" required>
                            <label for="#" class="text-white font-serif ">Type Room</label>
                            <select class="form-control">
                                <option value="" class="text-black font-serif ">Vip</option>
                                <option value="" class="text-black font-serif ">Normal</option>
                            </select>
                            <label for="#" class="text-white font-serif ">Username Room</label>
                            <input type="text" class="form-control" name="usernamerom" id="usernamerom">
                            <label for="#" class="text-white font-serif ">Userphone</label>
                            <input type="text" class="form-control" name="userphone" id="userphone">
                            <div class="check py-4 d-flex gap-3 justify-content-center">
                                <a href="#">
                                    <button type="submit" class="btn btn-success">check in</button>
                                </a>
                                <a href="#">
                                    <button type="submit" class="btn btn-danger">check out</button>
                                </a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-10"  data-aos="zoom-in" data-aos-duration="700" data-aos-easing="linear">
            <div class="row"  style="min-height: 15vh">
                <div class="col-lg-12 d-flex align-items-center justify-content-center">
                    <h3 class="font-serif font-bold text-white">Our Room</h3>
                </div>
            </div>
            <div class="row mt-20 py-4" >
                <div class="col-lg-3 px-4 py-4">
                    <div class="card p-1 cursor-pointer transition hover:scale-105 duration-700 ease-linear">
                        <div class="card-img m-0 p-0">
                            <img src="{{asset('img/rom1.jpg')}}" class="img-fluid" alt="" style="width: 100%;height: 20vh;object-fit: cover">
                        </div>
                        <div class="view_rom_text text-center">
                            <h6 class="font-serif font-bold text-black py-1">Room 1</h6>
                            <p class=" font-semibold text-dark text-black text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, veniam?</p>
                            <div class="button-view py-2">
                                <a href="#" >
                                    <button type="submit" class="cursor-pointer btn btn-secondary duration-700 p-2 rounded-md text-white" >show rom</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 px-4 py-4">
                    <div class="card p-1 cursor-pointer transition hover:scale-105 duration-700 ease-linear">
                        <div class="card-img m-0 p-0">
                            <img src="{{asset('img/rom2.jpg')}}" class="img-fluid" alt="" style="width: 100%;height: 20vh;object-fit: cover">
                        </div>
                        <div class="view_rom_text text-center">
                            <h6 class="font-serif font-bold text-black py-1">Room 2</h6>
                            <p class=" font-semibold text-dark text-black text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, veniam?</p>
                            <div class="button-view py-2">
                                <a href="#" >
                                    <button type="submit" class="cursor-pointer btn btn-secondary duration-700 p-2 rounded-md text-white" >show rom</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 px-4 py-4">
                    <div class="card p-1 cursor-pointer transition hover:scale-105 duration-700 ease-linear">
                        <div class="card-img m-0 p-0">
                            <img src="{{asset('img/rom3.jpg')}}" class="img-fluid" alt="" style="width: 100%;height: 20vh;object-fit: cover">
                        </div>
                        <div class="view_rom_text text-center">
                            <h6 class="font-serif font-bold text-black py-1">Room 3</h6>
                            <p class=" font-semibold text-dark text-black text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, veniam?</p>
                            <div class="button-view py-2">
                                <a href="#" >
                                    <button type="submit" class="cursor-pointer btn btn-secondary duration-700 p-2 rounded-md text-white" >show rom</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 px-4 py-4">
                    <div class="card p-1 cursor-pointer transition hover:scale-105 duration-700 ease-linear">
                        <div class="card-img m-0 p-0">
                            <img src="{{asset('img/rom4.jpg')}}" class="img-fluid" alt="" style="width: 100%;height: 20vh;object-fit: cover">
                        </div>
                        <div class="view_rom_text text-center">
                            <h6 class="font-serif font-bold text-black py-1">Room 4</h6>
                            <p class=" font-semibold text-dark text-black text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, veniam?</p>
                            <div class="button-view py-2">
                                <a href="#" >
                                    <button type="submit" class="cursor-pointer btn btn-secondary duration-700 p-2 rounded-md text-white" >show rom</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row " >
                <div class="col-lg-3 px-4 py-4">
                    <div class="card p-1 cursor-pointer transition hover:scale-105 duration-700 ease-linear">
                        <div class="card-img m-0 p-0">
                            <img src="{{asset('img/rom5.jpg')}}" class="img-fluid" alt="" style="width: 100%;height: 20vh;object-fit: cover">
                        </div>
                        <div class="view_rom_text text-center">
                            <h6 class="font-serif font-bold text-black py-1">Room 5</h6>
                            <p class=" font-semibold text-dark text-black text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, veniam?</p>
                            <div class="button-view py-2">
                                <a href="#" >
                                    <button type="submit" class="cursor-pointer btn btn-secondary duration-700 p-2 rounded-md text-white" >show rom</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 px-4 py-4">
                    <div class="card p-1 cursor-pointer transition hover:scale-105 duration-700 ease-linear">
                        <div class="card-img m-0 p-0">
                            <img src="{{asset('img/rom6.jpg')}}" class="img-fluid" alt="" style="width: 100%;height: 20vh;object-fit: cover">
                        </div>
                        <div class="view_rom_text text-center">
                            <h6 class="font-serif font-bold text-black py-1">Room 6</h6>
                            <p class=" font-semibold text-dark text-black text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, veniam?</p>
                            <div class="button-view py-2">
                                <a href="#" >
                                    <button type="submit" class="cursor-pointer btn btn-secondary duration-700 p-2 rounded-md text-white" >show rom</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 px-4 py-4">
                    <div class="card p-1 cursor-pointer transition hover:scale-105 duration-700 ease-linear">
                        <div class="card-img m-0 p-0">
                            <img src="{{asset('img/rom1.jpg')}}" class="img-fluid" alt="" style="width: 100%;height: 20vh;object-fit: cover">
                        </div>
                        <div class="view_rom_text text-center">
                            <h6 class="font-serif font-bold text-black py-1">Room 7</h6>
                            <p class=" font-semibold text-dark text-black text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, veniam?</p>
                            <div class="button-view py-2">
                                <a href="#" >
                                    <button type="submit" class="cursor-pointer btn btn-secondary duration-700 p-2 rounded-md text-white" >show rom</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 px-4 py-4">
                    <div class="card p-1 cursor-pointer transition hover:scale-105 duration-700 ease-linear">
                        <div class="card-img m-0 p-0">
                            <img src="{{asset('img/rom1.jpg')}}" class="img-fluid" alt="" style="width: 100%;height: 20vh;object-fit: cover">
                        </div>
                        <div class="view_rom_text text-center">
                            <h6 class="font-serif font-bold text-black py-1">Room 8</h6>
                            <p class=" font-semibold text-dark text-black text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, veniam?</p>
                            <div class="button-view py-2">
                                <a href="#" >
                                    <button type="submit" class="cursor-pointer btn btn-secondary duration-700 p-2 rounded-md text-white" >show rom</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="service">
    <div class="container-fluid bg-black">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-5">
                        <h2 class="font-serif font-bold text-white text-center">Services</h2>
                        <p class="text-center text-sm text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, veniam?</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card min-h-60 d-flex justify-center items-center text-center">
                        <i class="fa-solid fa-stethoscope text-3xl p-2.5 bg-sky-500 rounded-full cursor-pointer"></i>
                        <h6 class="font-mono text-lg  text-black py-2  ">Service 1</h6>
                        <p class="text-sm font-mono text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, veniam?</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card min-h-60 d-flex justify-center items-center text-center">
                        <i class="fa-solid fa-utensils text-3xl p-2.5 bg-sky-500 rounded-full cursor-pointer"></i>
                        <h6 class="font-serif text-lg font-bold text-black py-2">Service 1</h6>
                        <p class="text-sm font-mono text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, veniam?</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card min-h-60 d-flex justify-center items-center text-center">
                        <i class="fa-solid fa-music text-3xl p-2.5 bg-sky-500 rounded-full cursor-pointer"></i>
                        <h6 class="font-serif text-lg font-bold text-black py-2">Service 1</h6>
                        <p class="text-sm text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, veniam?</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="card min-h-60 d-flex justify-center items-center text-center">
                        <i class="fa-brands fa-sellsy text-3xl p-2.5 bg-sky-500 rounded-full cursor-pointer"></i>
                        <h6 class="font-serif text-lg font-bold text-black py-2">Service 1</h6>
                        <p class="text-sm text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, veniam?</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card min-h-60 d-flex justify-center items-center text-center">
                        <i class="fa-solid fa-route text-3xl p-2.5 bg-sky-500 rounded-full cursor-pointer"></i>
                        <h6 class="font-serif text-lg font-bold text-black py-2">Service 1</h6>
                        <p class="text-sm text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, veniam?</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card min-h-60 d-flex justify-center items-center text-center">
                        <i class="fa-solid fa-hotel text-3xl p-2.5 bg-sky-500 rounded-full cursor-pointer "></i>
                        <h6 class="font-serif text-lg font-bold text-black py-2">Service 1</h6>
                        <p class="text-sm text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, veniam?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
