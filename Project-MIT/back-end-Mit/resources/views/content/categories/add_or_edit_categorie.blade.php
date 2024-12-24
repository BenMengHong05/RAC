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
                                <h3>{{ isset($categorieEdit->id) ? 'Update categorie ' : 'Add categorie ' }}</h3>
                                <div class="card h-100 p-4">
                                    <p class="card-text">
                                    <form
                                    action="{{ isset($categorie_imageEdit) && $categorie_imageEdit->id ? route('categorie_images.update', $categorie_imageEdit->id) : route('categorie_images.store') }}"
                                    method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @if (isset($categorie_imageEdit) && $categorie_imageEdit->id)
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
                                            <label for="name" class="form-label">name</label>
                                            <input type="text" class="form-control"
                                                value="{{ isset($categorieEdit) && $categorieEdit->id ? old('name', $categorieEdit->name) : '' }}"
                                                id="name" name="name" required>
                                            <label for="title" class="form-label">title</label>
                                            <input type="text" class="form-control" value="{{ isset($categorieEdit) && $categorieEdit->id ? old('title', $categorieEdit->title) : '' }}"
                                            id="title" name="title" >
                                            <label for="title" class="form-label">description</label>
                                            <input type="text" class="form-control" value="{{ isset($categorieEdit) && $categorieEdit->id ? old('description', $categorieEdit->description) : '' }}"
                                            id="description" name="description" >
                                            <label for="title" class="form-label">image</label>
                                            @if(isset($categorieEdit) && $categorieEdit->image)
                                                <div class="mb-3">
                                                    <img src="{{ asset('images/' . $categorieEdit->image) }}" alt="Current Image" style="max-width: 150px;">
                                                </div>
                                            @endif
                                            <input type="file"  class="form-control" id="image" name="image" {{ isset($categorieEdit) ? '' : '' }}>
                                        </div>
                                        <button type="submit" class="btn btn-primary mx-2 float-end">
                                            {{ isset($categorieEdit->id) ? 'Update' : 'Submit' }}
                                        </button>
                                        <a href="{{route('categories')}}" class="btn btn-primary  float-end">Back to list</a>
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
