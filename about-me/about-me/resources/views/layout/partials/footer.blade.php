<footer class="bg-dark">
    <div class="container-fluid min-h-72">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6  my-5">
                    <h1 class="font-serif font-bold text-2xl text-white">MengHong</h1>
                    <p class="font-mono text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit at sit laborum aliquid ad iusto, nostrum maiores saepe ipsa quo illum quae ab. Cumque, laborum eaque accusamus ab culpa optio.</p>
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-end gap-5 " >
                    <div class="contact">
                        <h4 class="font-serif font-bold text-white">Contact</h4>
                        <ul class="font-mono m-0 p-0  text-white">
                            <li><a href="" class="text-white">Email:</a></li>
                            <li><a href="" class="text-white">Phone:</a></li>
                            <li><a href="" class="text-white">Address:</a></li>
                            <li><a href="" class="text-white">Facebook:</a></li>
                        </ul>
                    </div>
                    <div class="service">
                        <h4 class="font-serif font-bold text-white">Service</h4>
                        <ul class="font-mono  m-0 p-0  text-white">
                            <li><a href="" class="text-white">Web Developer</a></li>
                            <li><a href="" class="text-white">Mobile Developer</a></li>
                            <li><a href="" class="text-white">Grapich Designer</a></li>
                            <li><a href="" class="text-white">Laravel</a></li>
                        </ul>
                    </div>
                    <div class="project">
                        <h4 class="font-serif font-bold text-white">Project</h4>
                        <ul class="font-mono m-0 p-0  text-white">
                            <li><a href="" class="text-white">MIT</a></li>
                            <li><a href="" class="text-white">FRESH NEW</a></li>
                            <li><a href="" class="text-white">SHOP</a></li>
                            <li><a href="" class="text-white">ABOUT ME</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row m-0 p-0 ">
                <div class="col-lg-6 my-5 text-white">
                    <p class="font-mono">Copyright © 2022 MengHong. All rights reserved.</p>
                </div>
                <div class="col-lg-6  d-flex align-items-center justify-content-end">
                    <form action="#" class="d-flex align-items-center justify-content-center gap-2 " method="POST" style="width: 60%">
                        @csrf
                        <input type="search" class="form-control" name="search" id="search" required >
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</footer>
