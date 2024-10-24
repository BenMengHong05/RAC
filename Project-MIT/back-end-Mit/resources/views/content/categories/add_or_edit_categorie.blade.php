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
                                    <h3>{{ isset($categorieEdit->id) ? 'Update categorie MIT ' : 'Add categorie MIT' }}</h3>
                                    <p class="card-text">
                                    <form
                                        action="{{ isset($categorieEdit) && $categorieEdit->id ? route('categorie_update', $categorieEdit->id) : route('categorie_store') }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @if (isset($categorieEdit) && $categorieEdit->id)
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
                                        </div>
                                        <button type="submit" class="btn btn-primary float-end">
                                            {{ isset($categorieEdit->id) ? 'Update' : 'Submit' }}
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
