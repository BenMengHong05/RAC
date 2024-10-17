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
                                <div class="card h-100 p-4">
                                    <h3>{{isset($educationEdit->id) ? "Update education MIT " : "Add education MIT"}}</h3>
                                    <p class="card-text">

                                        <form action="{{ isset($educationEdit) && $educationEdit->id ? route('education_update', $educationEdit->id) : route('education_store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @if (isset($educationEdit) && $educationEdit->id)
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
                                                <label for="image" class="form-label">Image</label>

                                                @if(isset($educationEdit) && $educationEdit->image)
                                                    <!-- Display the current image if it exists -->
                                                    <div class="mb-3">
                                                        <img src="{{ asset('images/' . $educationEdit->image) }}" alt="Current Image" style="max-width: 150px;">
                                                    </div>
                                                @endif

                                                <!-- File input for uploading a new image -->
                                                <input type="file" class="form-control" id="image" name="image" {{ isset($educationEdit) ? '' : 'required' }}>
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" class="form-control" value="{{ isset($educationEdit) && $educationEdit->id ? old('title', $educationEdit->title) : '' }}" id="title" name="title" required>

                                                <label for="description" class="form-label">Description</label>
                                                <input type="text" name="description" id="description" class="form-control"
                                                value="{{ isset($educationEdit) && $educationEdit->id ? old('description', $educationEdit->description) : old('description') }}" required>
                                            </div>

                                            <button type="submit" class="btn btn-primary float-end">
                                                {{ isset($educationEdit->id) ? "Update" : "Submit" }}
                                            </button>
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
