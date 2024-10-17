@extends('layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-2">
                @include('layout.partials.siderbar')
            </div>
            <div class="col-xl-10">
                @include('index.partials.header')

                <div class="container mt-5">
                    <h1>Teacher Details</h1>
                    <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-text" style="min-height: 5vh">Image:<img src="{{ asset('images/' . $teacher->image) }}" alt="" class="img-fluid" style="width: 10vh;height: 10vh"></h5>
                            <h5 class="card-text" style="min-height: 5vh">Name:{{$teacher->name}}</h5>
                            <h5 class="card-text" style="min-height: 5vh">Sex:{{$teacher->sex}}</h5>
                            <h5 class="card-text" style="min-height: 5vh">Dob:{{$teacher->dob}}</h5>
                            <h5 class="card-text" style="min-height: 5vh">Phone:{{$teacher->phone}}</h5>
                        </div>
                    </div>
                    <a href="{{ route('teachers') }}" class="btn btn-primary mt-3">Back to List</a>
                </div>

                @include('index.partials.footer')
            </div>
        </div>
    </div>
@endsection
