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
                                <h3>{{isset($userEdit->id) ? "Update User MIT " : "Add User MIT"}}</h3>
                                <div class="card h-100 p-4">
                                    <p class="card-text">
                                        <form action="{{ isset($userEdit) && $userEdit->id ? route('user_update', $userEdit->id) : route('user_store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @if(isset($userEdit) && $userEdit->id)
                                                @method('PUT')
                                            @endif
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" class="form-control" value="{{isset($userEdit)&& $userEdit->id ? old('name' , $userEdit->name): ''}}" id="name" name="name" required>
                                                <label for="email" class="form-label">email</label>
                                                <input type="email" name="email" class="form-control" value="{{ isset($userEdit) && $userEdit->id ? old('email', $userEdit->email) : '' }}" required>
                                                <label for="password" class="form-label">password</label>
                                                <input type="text" name="password" class="form-control" value="{{ isset($userEdit) && $userEdit->id ? $userEdit->password : '' }}" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary mx-2 float-end">
                                                {{isset($userEdit->id)? "Update" : "Submit"}}
                                            </button>
                                            <a href="{{route('users')}}" class="btn btn-primary  float-end">Back to list</a>
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
