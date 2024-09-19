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

    <link rel="stylesheet" href="{{ asset('css/headerMIT.css') }}">
    {{-- this is a link boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class=" d-flex align-items-center " style="width: 100%; height: 12vh;">
    <div class="container-fluid d-flex align-itme-center ">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2  d-flex justify-content-center">
            <a href="#" class="d-flex align-items-center justify-content-center">
                <h1 class="text-light">MIT</h1>
            </a>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9 text-center  h-15 " id="navbarSupportedContent">
            <ul class="ul-hover d-flex gap-5 h-100 d-inline-block ">
                <li><a href="#">Education</a></li>
                <li><a href="#">Research</a></li>
                <li><a href="#">Innovation</a></li>
                <li><a href="#">Admissions+Aid</a></li>
                <li class="ul-3"><a href="#">CampusLife</a></li>
                <li class="ul-2"><a href="#">News</a></li>
                <li class="ul-1"><a href="#">Alumni</a></li>
                <li class="ul-1"><a href="#">AboutMIT</a></li>
            </ul>
        </div>
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 d-flex align-items-center justify-content-center ">
            <a href="#" class="search-icon"><i class="fa-solid fa-magnifying-glass fs-3 mx-4 text-white"></i></a>
            <div class="menubar">
                <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                    aria-controls="offcanvasScrolling"><i class="fa-solid fa-bars fs-3"></i></button>
            </div>
            <div class="showw offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
                id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                <div class="offcanvas-header">
                    <button class="button-show " data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class='bx bx-x'></i>
                    </button>
                </div>
                <div class="offcanvas-body">
                    <ul class="off">
                        <li class="p-4  "><a href="#">Education</a></li>
                        <li class="p-4 "><a href="#">Research</a></li>
                        <li class="p-4 "><a href="#">Innovation</a></li>
                        <li class="p-4 "><a href="#">Admissions+Aid</a></li>
                        <li class="p-4 "><a href="#">CampusLife</a></li>
                        <li class="p-4 "><a href="#">News</a></li>
                        <li class="p-4 "><a href="#">Alumni</a></li>
                        <li class="p-4 "><a href="#">AboutMIT</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

