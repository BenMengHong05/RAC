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
                                <h3>{{isset($categorie_pathEdit->id) ? "Update Categories_Path" : "Add Categories_Path "}}</h3>
                                <div class="card h-100 p-4">
                                    <p class="card-text">
                                        <form action="{{ isset($categorie_pathEdit) && $categorie_pathEdit->id ? route('categorie_path_update', $categorie_pathEdit->id) : route('categorie_path_store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @if (isset($categorie_pathEdit) && $categorie_pathEdit->id)
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
                                                <input type="text" class="form-control" value="{{ isset($categorie_pathEdit) && $categorie_pathEdit->id ? old('title', $categorie_pathEdit->title) : '' }}" id="title" name="title" >
                                                <label for="description" class="form-label">Description</label>
                                                <input type="text" name="description" id="description" class="form-control"
                                                value="{{ isset($categorie_pathEdit) && $categorie_pathEdit->id ? old('description', $categorie_pathEdit->description) : old('description') }}" >
                                                <label for="image" class="form-label">Image_Description</label>
                                                <input type="text" class="form-control" value="{{ isset($categorie_pathEdit) && $categorie_pathEdit->id ? old('title', $categorie_pathEdit->image_description) : '' }}" id="image_description" name="image_description" >
                                                <div class="mb-3">
                                                    <label for="categorie_id" class="form-label">Select categorie</label>
                                                    <select name="categorie_id" id="categorie_id" class="form-control" >
                                                        @foreach ($categories as $categorie)
                                                            <option value="{{ $categorie->id }}"
                                                                    {{ (isset($categorie_pathEdit) && $categorie_pathEdit->categorie_id == $categorie->id) ? 'selected' : '' }}>
                                                                {{ $categorie->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <label for="image" class="form-label">Image</label>
                                                @if(isset($categorie_pathEdit) && $categorie_pathEdit->image)
                                                    <div class="mb-3">
                                                        <img src="{{ asset('images/' . $categorie_pathEdit->image) }}" alt="Current Image" style="max-width: 150px;">
                                                    </div>
                                                @endif
                                                <input type="file" class="form-control" id="image" name="image" {{ isset($categorie_pathEdit) ? '' : '' }}>
                                            </div>
                                            <button type="submit" class="btn btn-primary mx-2 float-end">
                                                {{ isset($categorie_pathEdit->id) ? "Update" : "Submit" }}
                                            </button>
                                            <a href="{{route('categorie_paths')}}" class="btn btn-primary  float-end">Back to list</a>
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
