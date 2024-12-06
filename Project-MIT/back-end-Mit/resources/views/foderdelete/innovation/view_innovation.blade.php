@extends('layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-2">
                @include('layout.partials.siderbar')
            </div>
            <div class="col-xl-10">
                @include('index.partials.header')
                <div class="container mt-4">
                    <h2>Innovation Detail</h2>
                    <div class="card mt-4">
                        <div class="card-body">
                            <table class="d-flex gap-2" >
                                <thead>
                                    <tr class="d-flex flex-column">
                                        <td><h5 class="card-text" style="min-height: 10vh">Title:</h5></td>
                                        <td><h5 class="card-text" style="min-height: 10vh">Description:</h5></td>
                                        <td><h5 class="card-text" style="min-height: 10vh">Image:</h5></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="d-flex flex-column">
                                        <td><h5 class="card-text" style="min-height: 10vh">{{$innovation->title}}</h5></td>
                                        <td><h5 class="card-text" style="min-height: 10vh">{{$innovation->description}}</h5></td>
                                        <td><img src="{{ asset('images/' . $innovation->image) }}" alt="" class="img-fluid" style="width: 10vh;height: 10vh"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a href="{{ route('innovations') }}" class="btn btn-primary mt-3 mb-3">Back to List</a>
                </div>

                @include('index.partials.footer')
            </div>
        </div>
    </div>
@endsection
