@extends('layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-2">
                @include('layout.partials.siderbar')
            </div>
            <div class="col-xl-10">
                @include('index.partials.header')
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row g-4 mb-5">
                            <div class="col-lg-12">
                                <h3>{{isset($campuslifeEdit->id) ? "Update Campuslife " : "Add Campuslife"}}</h3>
                                <div class="card h-100 p-4">
                                    <p class="card-text">
                                        <form action="{{ isset($campuslifeEdit) && $campuslifeEdit->id ? route('campuslife_update', $campuslifeEdit->id) : route('campuslife_store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @if (isset($campuslifeEdit) && $campuslifeEdit->id)
                                                @method('PUT')
                                            @endif
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <div class="mb-3">

                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" class="form-control" value="{{ isset($campuslifeEdit) && $campuslifeEdit->id ? old('title', $campuslifeEdit->title) : '' }}" id="title" name="title" required>

                                                <label for="description" class="form-label">Description</label>
                                                <input type="text" name="description" id="description" class="form-control"
                                                value="{{ isset($campuslifeEdit) && $campuslifeEdit->id ? old('description', $campuslifeEdit->description) : old('description') }}" required>

                                                <label for="image" class="form-label">Image</label>
                                                @if(isset($campuslifeEdit) && $campuslifeEdit->image)
                                                    <div class="mb-3">
                                                        <img src="{{ asset('images/' . $campuslifeEdit->image) }}" alt="Current Image" style="max-width: 150px;">
                                                    </div>
                                                @endif
                                                <input type="file" class="form-control" id="image" name="image" {{ isset($campuslifeEdit) ? '' : 'required' }}>
                                            </div>

                                            <button type="submit" class="btn btn-primary mx-2 float-end">
                                                {{ isset($campuslifeEdit->id) ? "Update" : "Submit" }}
                                            </button>
                                            <a href="{{route('campuslifes')}}" class="btn btn-primary  float-end">Back to list</a>

                                        </form>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('index.partials.footer')
            </div>
        </div>
    </div>
@endsection
