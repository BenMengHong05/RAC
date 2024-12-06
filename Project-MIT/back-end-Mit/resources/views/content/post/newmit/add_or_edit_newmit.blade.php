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
                                <h3>{{isset($newmitEdit->id) ? "Update newmit MIT " : "Add newmit MIT"}}</h3>
                                <div class="card h-100 p-4">
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
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" class="form-control" id="title" name="title" value="{{ isset($newmitEdit) ? old('title', $newmitEdit->title) : old('title') }}" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="description" class="form-label">Description</label>
                                                <input type="text" name="description" id="description" class="form-control" value="{{ isset($newmitEdit) ? old('description', $newmitEdit->description) : old('description') }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Image</label>
                                                @if (isset($newmitEdit) && $newmitEdit->image)
                                                    <div class="mb-3">
                                                        <img src="{{ asset('images/' . $newmitEdit->image) }}" alt="Current Image" style="max-width: 150px;">
                                                    </div>
                                                @endif
                                                <input type="file" class="form-control" id="image" name="image" {{ isset($newmitEdit) ? '' : 'required' }}>
                                            </div>


                                            <button type="submit" class="btn btn-primary mx-2 float-end">
                                                {{ isset($newmitEdit->id) ? 'Update' : 'Submit' }}
                                            </button>
                                            <a href="{{route('newmits')}}" class="btn btn-primary  float-end">Back to list</a>
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
