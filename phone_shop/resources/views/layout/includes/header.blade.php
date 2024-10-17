<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite('resources/css/app.css')
</head>
<body>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 m-0 p-0">
                    <a href="#" class="logo-phone">
                       <img src="{{asset('img/`bannger_header.jpg')}}" class="img-fluid w-100 h-40" alt="" style="object-fit:cover">
                    </a>
                </div>
            </div>
        </div>
    </section>
    @include('layout.partials.navbar')
