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
                                    <h3>{{isset($newmitEdit->id) ? "Update newmit MIT " : "Add newmit MIT"}}</h3>
                                    <div class="card-text">
                                        <form action="{{ isset($newmitEdit) && $newmitEdit->id ? route('newmit_update', $newmitEdit->id) : route('newmit_store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @if (isset($newmitEdit) && $newmitEdit->id)
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
                                                <!-- Image upload and display -->
                                                <label for="image" class="form-label">Image</label>

                                                @if (isset($newmitEdit) && $newmitEdit->image)
                                                    <!-- Show the current image if editing an existing item -->
                                                    <div class="mb-3">
                                                        <img src="{{ asset('images/' . $newmitEdit->image) }}" alt="Current Image" style="max-width: 150px;">
                                                    </div>
                                                @endif

                                                <!-- File input for a new image -->
                                                <input type="file" class="form-control" id="image" name="image" {{ isset($newmitEdit) ? '' : 'required' }}>
                                            </div>

                                            <!-- Title input -->
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" class="form-control" id="title" name="title" value="{{ isset($newmitEdit) ? old('title', $newmitEdit->title) : old('title') }}" required>
                                            </div>

                                            <!-- Description input -->
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Description</label>
                                                <input type="text" name="description" id="description" class="form-control" value="{{ isset($newmitEdit) ? old('description', $newmitEdit->description) : old('description') }}" required>
                                            </div>
                                            {{-- <div class="mb-3">
                                                <label for="categories" class="form-label">Categories</label>
                                                <select name="" class="form-control" id="">
                                                    @foreach ($categorieproducts as $index => $items)
                                                        <option value="1">{{$items->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div> --}}



                                            <!-- Category selection -->
                                            <!-- Submit button -->
                                            <button type="submit" class="btn btn-primary float-end">
                                                {{ isset($newmitEdit->id) ? 'Update' : 'Submit' }}
                                            </button>
                                        </form>

                                    </div>
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
